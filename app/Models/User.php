<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, LogsActivity, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'role',
        'status'
    ];
    
    protected static $logName = 'User';
    protected static $logAttributes=['name', 'email'];
    protected static $ignoredChangedAttributes=['password'];
    protected static $logOnlyDirty = true;
    protected static $recordEvents=['Created','Updated','Deleted', 'Restored'];

    protected static $submitEmptyLogs = false;
    
    public function getActivitylogOptions(): LogOptions
{
    return LogOptions::defaults()
    ->setDescriptionForEvent(fn(string $eventName) =>  "{$eventName} {$this->role} named {$this->name}")
    ->useLogName(Auth::check() ? Auth::user()->name : null);
}

    
   
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
//     protected function serializeDate($date)
// {
//     return $date->format('m-d-Y');
// }
}
