<?php

namespace App\Imports;

use App\Models\Residents;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Validators\Failure;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Throwable;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ResidentsImport implements ToModel, WithStartRow,WithValidation,SkipsEmptyRows
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    
    use Importable,SkipsFailures;
    private $rowCount = -1;
    public function model(array $row)
    {
        $this->rowCount++;
        return new Residents([
            'region'=>$row[1],
            'province'=>$row[2],
            'city'=>$row[3],
            'zone'=>$row[4],
            'barangay'=>$row[5],
            'purok'=>$row[6],
            'street'=>$row[7],
            'housenum'=>$row[8],
            'unitnum'=>$row[9],
            'headname'=>$row[10],
            'respondentname'=>$row[11],
            'startdate'=>$row[12],
            'timestart'=>$row[13],
            'enumname'=>$row[14],
            'housecontrolnum'=>$row[15],
            'housetype'=>$row[16],
            'bedroomsnum'=>$row[17],
            'storeysnum'=>$row[18],
            'rooftype'=>$row[19],
            'walltype'=>$row[20],
            'floortype'=>$row[21],
            'nucfam'=>$row[22],
            'housemembernum'=>$row[23],
            'householdhead'=>$row[24],
            'householdmembername'=>$row[25],
            'reltohead'=>$row[26],
            'nucfambelong'=>$row[27],
            'gender'=>$row[28],
            'birthdate'=>$row[29],
            'birthregistered'=>$row[30],
            'civilstatus'=>$row[31],
            'ethnicity'=>$row[32],
            'religiousaffiliation'=>$row[33],
            'ofw'=>$row[34],
            'ofwcountry'=>$row[35],
            'residing'=>$row[36],
            'residingo'=>$row[37],
            'attendschool'=>$row[38],
            'yearlevel'=>$row[39],
            'schooltype'=>$row[40],
            'notattending'=>$row[41],
            'educcompleted'=>$row[42],
            'shsstrand'=>$row[43],
            'collegecourse'=>$row[44],
            'training'=>$row[45],
            'pasttraining'=>$row[46],
            'trainnum'=>$row[47],
            'trainprogram'=>$row[48],
            'literate'=>$row[49],
            'voter'=>$row[50],
            'votedlast'=>$row[51],
            'job'=>$row[52],
            'nwork'=>$row[53],
            'jobnum'=>$row[54],
            'occup'=>$row[55],
            'occupcode'=>$row[56],
            'industry'=>$row[57],
            'industrycode'=>$row[58],
            'employ'=>$row[59],
            'employhrs'=>$row[60],
            'employthrs'=>$row[61],
            'addhrsworkpast'=>$row[62],
            'addextrawork'=>$row[63],
            'classworker'=>$row[64],
            'fjobpast'=>$row[65],
            'findwork'=>$row[66],
            'rfindwork'=>$row[67],
            'findworknum'=>$row[68],
            'rfnotwork'=>$row[69],
            'lastlookjob'=>$row[70],
            'pastwillingwork'=>$row[71],
            'willingtotakeupwork'=>$row[72],
            'cashsalary'=>$row[73],
            'kindsalary'=>$row[74],
            'sssmember'=>$row[75],
            'gsismember'=>$row[76],
            'philhealthmember'=>$row[77],
            'membertype'=>$row[78],
            'philhealthdependent'=>$row[79],
            'pregnant'=>$row[80],
            'soloparent'=>$row[81],
            'soloparentid'=>$row[82],
            'disability'=>$row[83],
            'disabilitytype'=>$row[84],
            'pwdid'=>$row[85],
            'seniorcitizenid'=>$row[86],
            'crime'=>$row[87],
            'crimetype'=>$row[88],
            'crimeloc'=>$row[89],
            'bloodtype'=>$row[90],
            'rhtype'=>$row[91],
            'nutritionstatus'=>$row[92],
            'datebns'=>$row[93],
            'treatment'=>$row[94],
            'treatmentloc'=>$row[95],
            'enddate'=>$row[96],
            'endtime'=>$row[97],
        ]);
        
    }
  
    public function startRow(): int
    {
        return 2;
    }
    public function rules(): array
    {
        return [
            '*.1' => 'required',
            '*.2' => 'required',
            '*.3' => 'required',
            '*.15' => 'required',
            '*.24' => 'required',
            '*.25' => 'required',
        
        ];
    }
    public function customValidationMessages()
    {
        return [
            '1' => 'Region field is required',
            '2' => 'Province field is required',
            '3' => 'City field is required',
            '15' => 'Household Control Number field is required',
            '24' => 'Household Head field is required',
            '25' => 'Household Member Name field is required',
            
        ];
    }
    public function getRowCount(): int
    {
        return $this->rowCount;
    }
}
