<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use Spatie\Backup\BackupDestination\BackupDestination;
use Spatie\Backup\Tasks\ListBackups\ListBackups;

use Illuminate\Support\Facades\DB;

use ZipArchive;
class BackupController extends Controller
{
   
    private function formatSizeUnits($bytes)
    {
        if ($bytes >= 1073741824) {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        } elseif ($bytes >= 1048576) {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        } elseif ($bytes >= 1024) {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        } elseif ($bytes > 1) {
            $bytes = $bytes . ' bytes';
        } elseif ($bytes == 1) {
            $bytes = $bytes . ' byte';
        } else {
            $bytes = '0 bytes';
        }
    
        return $bytes;
    }
    
    public function index()

{
    if(auth()->user()->role == 'System Administrator') {
        $backups = collect(Storage::disk('backup')->files('TPS'))
        ->map(function ($file) {
            return [
                'path' => $file,
                'name' => basename($file),
                'date' => date('Y-m-d H:i:s', Storage::disk('backup')->lastModified($file)),
                'size' => $this->formatSizeUnits(\Illuminate\Support\Facades\Storage::disk('backup')->size($file)),


            ];
        })
        ->reverse();
    return view('backup.backups', compact('backups'));
    } else {
        return redirect()->route('dashboard');
    }
  
}

public function create()
{
    try {
        // Run the backup
        Artisan::call('backup:run',['--only-db'=>true]);

        // Get the path of the latest backup file
        $latestBackup = collect(Storage::disk('backup')->files('TPS'))
            ->sortByDesc(function ($file) {
                return Storage::disk('backup')->lastModified($file);
            })
            ->first();

        // Get the contents of the backup file
        $backupContents = Storage::disk('backup')->get($latestBackup);
        $filename = 'backup-' . date('Y-m-d-H-i-s') . '.zip';

        // Send the backup file as a download attachment in the HTTP response
        return response()->make($backupContents, 200, [
            'Content-Type' => 'application/octet-stream',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ]);
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Unable to create backup: ' . $e->getMessage());
    }
}

public function destroy($backup)
{
    try {
        $path = "backups/TPS/$backup"; // Use $backup as the full path to the backup file
        Storage::disk('local')->delete($path); // Delete the backup file

        return redirect()->back()->with('success', 'Backup deleted successfully!');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Unable to delete backup: ' . $e->getMessage());
    }
}




public function restore($backup)
{
    try {
        $path = "backups/TPS/$backup"; // Use $backup as the full path to the backup file

        // Unzip the backup file and extract the SQL file
        $tempPath = storage_path('app/temp/');
        $zip = new \ZipArchive();
        $zip->open(storage_path('app/' . $path));
        $zip->extractTo($tempPath);
        $zip->close();

        $sqlFile = glob($tempPath . 'db-dumps/*.sql')[0]; // Assuming there's only one SQL file

        // Wipe the current database
        Artisan::call('db:wipe');

        // Get the DB connection details
        $connection = config('database.default');
        $host = config("database.connections.{$connection}.host");
        $port = config("database.connections.{$connection}.port");
        $database = config("database.connections.{$connection}.database");
        $username = config("database.connections.{$connection}.username");
        $password = config("database.connections.{$connection}.password");

        // Build the mysql command to import the backup file
        $command = sprintf(
            'mysql --user=%s --password=%s --host=%s --port=%s --database=%s < %s',
            escapeshellarg($username),
            escapeshellarg($password),
            escapeshellarg($host),
            escapeshellarg($port),
            escapeshellarg($database),
            escapeshellarg($sqlFile)
        );

        // Execute the mysql command
        if (!empty($password)) {
            $command = str_replace("--password=" . escapeshellarg($password), "--password=" . escapeshellarg($password), $command);
        }

        shell_exec($command);

        // Remove temporary files
        \File::deleteDirectory($tempPath);

        return redirect()->back()->with('success', 'Database restored successfully!');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Unable to restore database: ' . $e->getMessage());
    }
}











}



