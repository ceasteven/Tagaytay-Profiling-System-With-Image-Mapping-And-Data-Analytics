<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use Spatie\Backup\BackupDestination\BackupDestination;
use Spatie\Backup\Tasks\ListBackups\ListBackups;
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
}

    public function create(){
        Artisan::call('backup:run',['--only-db'=>true]);
        /// whatever you want to display
        return redirect()->back()->with('success', 'Backup created successfully');
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
       
}
// public function destroy($backup)
//     {
//         try {
//             Storage::disk('backup')->delete($backup);
//             return redirect()->back()->with('success', 'Backup deleted successfully!');
//         } catch (\Exception $e) {
//             return redirect()->back()->with('error', 'Unable to delete backup: ' . $e->getMessage());
//         }
//     }
// }