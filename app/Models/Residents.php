<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Residents as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Http\Controllers\ResidentsController;
class Residents extends Model
{
    use HasFactory, LogsActivity, SoftDeletes;

    protected $fillable = [
        'region',
        'province',
        'city',
        'zone',
        'barangay',
        'purok',
        'street',
        'housenum',
        'unitnum',
        'headname',
        'respondentname',
        'startdate',
        'timestart',
        'enumname',
        'housecontrolnum',
        'housetype',
        'bedroomnum',
        'storeysnum',
        'rooftype',
        'walltype',
        'floortype',
        'nucfam',
        'housemembernum',
        'householdhead',
        'householdmembername',
        'reltohead',
        'nucfambelong',
        'gender',
        'birthdate',
        'birthregistered',
        'civilstatus',
        'ethnicity',
        'religiousaffiliation',
        'ofw',
        'ofwcountry',
        'residing',
        'attendschool',
        'yearlevel',
        'schooltype',
        'notattending',
        'educcompleted',
        'shsstrand',
        'collegecourse',
        'training',
        'pasttraining',
        'trainnum',
        'trainprogram',
        'literate',
        'voter',
        'votedlast',
        'job',
        'nwork',
        'jobnum',
        'occup',
        'occupcode',
        'industry',
        'industrycode',
        'employ',
        'employhrs',
        'employthrs',
        'addhrsworkpast',
        'addextrawork',
        'classworker',
        'fjobpast',
        'findwork',
        'rfindwork',
        'findworknum',
        'rfnotwork',
        'lastlookjob',
        'pastwillingwork',
        'willingtotakeupwork',
        'cashsalary',
        'kindsalary',
        'sssmember',
        'gsismember',
        'philhealthmember',
        'membertype',
        'philhealthdependent',
        'pregnant',
        'soloparent',
        'soloparentid',
        'disability',
        'disabilitytype',
        'pwdid',
        'seniorcitizenid',
        'crime',
        'crimetype',
        'crimeloc',
        'bloodtype',
        'rhtype',
        'nutritionstatus',
        'datebns',
        'treatment',
        'treatmentloc',
        'enddate',
        'endtime',
       
    ];
    protected static $logName = 'User';
    protected static $logAttributes=['name', 'householdmembername'];
    protected static $recordEvents=['Created','Updated','Deleted', 'Restored'];
    
    public function getActivitylogOptions(): LogOptions
{
    return LogOptions::defaults()
    ->setDescriptionForEvent(fn(string $eventName) =>  "{$eventName} a resident named {$this->householdmembername}")
    ->useLogName(Auth::user()->name);
}
protected $appends = ['age'];

public function getAgeAttribute()
{
   return Carbon::parse($this->attributes['birthdate'])->age;
}

}
