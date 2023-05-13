<?php

namespace App\Exports;
use Illuminate\Support\Facades\Auth;
use App\Models\Residents;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportResidents implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    
    public function collection()
    {
        $user = Auth::user();
    
    if ($user->barangay) {
        $residents = Residents::where('barangay', $user->barangay)->get();
    } else {
        $residents = Residents::all();
    }
    
        return $residents->map(function($resident) {
            $resident = $resident->toArray();
    
            foreach($resident as $key => $value) {
                if(is_null($value)) {
                    $resident[$key] = '';
                }
            }
    
            return $resident;
        });
    }
    
    public function headings(): array
        {
            return ["id",
            "region",
            "province",
            "city",
            "zone",
            "barangay",
            "purok",
            "street",
            "housenum",
            "unitnum",
            "headname",
            "respondentname",
            "startdate",
            "timestart",
            "enumname",
            "housecontrolnum",
            "housetype",
            "bedroomsnum",
            "storeysnum",
            "rooftype",
            "walltype",
            "floortype",
            "nucfam",
            "housemembernum",
            "householdhead",
            "householdmembername",
            "reltohead",
            "nucfambelong",
            "gender",
            "birthdate",
            "birthregistered",
            "civilstatus",
            "ethnicity",
            "religiousaffiliation",
            "ofw",
            "ofwcountry",
            "residing",
            "residingo",
            "attendschool",
            "yearlevel",
            "schooltype",
            "notattending",
            "educcompleted",
            "shsstrand",
            "collegecourse",
            "training",
            "pasttraining",
            "trainnum",
            "trainprogram",
            "literate",
            "voter",
            "votedlast",
            "job",
            "nwork",
            "jobnum",
            "occup",
            "occupcode",
            "industry",
            "industrycode",
            "employ",
            "employhrs",
            "employthrs",
            "addhrsworkpast",
            "addextrawork",
            "classworker",
            "fjobpast",
            "findwork",
            "rfindwork",
            "findworknum",
            "rfnotwork",
            "lastlookjob",
            "pastwillingwork",
            "willingtotakeupwork",
            "cashsalary",
            "kindsalary",
            "sssmember",
            "gsismember",
            "philhealthmember",
            "membertype",
            "philhealthdependent",
            "pregnant",
            "soloparent",
            "soloparentid",
            "disability",
            "disabilitytype",
            "pwdid",
            "seniorcitizenid",
            "crime",
            "crimetype",
            "crimeloc",
            "bloodtype",
            "rhtype",
            "nutritionstatus",
            "datebns",
            "treatment",
            "treatmentloc",
            "enddate",
            "endtime",
        ];
        }
}

