<?php

namespace App\Http\Controllers;

use App\Exports\ExportResidents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Hash;
use  Illuminate\Support\Facades\SoftDeletes;
use App\Imports\ResidentsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Residents;
use Carbon\Carbon;

class ResidentsController extends Controller
{
    public function export() 
    {
        $date = date('Y-m-d');
        $fileName = 'residents-' . $date . '.xlsx'; // add date 
        return Excel::download(new ExportResidents, $fileName);

    }
    public function exportcsv() 
    {
        $date = date('Y-m-d');
        $fileName = 'residents-' . $date . '.csv'; // add date 
        return Excel::download(new ExportResidents, $fileName);

    }

      
    public function import(Request $request) 
    {
        if (empty($request->file('file')))
        {
            return back()->with('error','Empty File');
        
        }
        else{
            request()->validate([
            'file'  => 'required|mimes:xls,xlsx,csv,txt|max:10000',
            
            ]);
            $pathToFile = $request->file('file');
            $import = new ResidentsImport();
            $rows = $import->toArray($pathToFile)[0];
            if (empty($rows)) {
                return redirect()->back()->with('error', 'The imported file is empty!');
            }
            // Get the number of rows in the CSV file
            $rowCount = count($rows);
            
            // Import the CSV file
            $import->import($pathToFile);
    
            // Get the number of rows imported
            $importedRowCount = $import->getRowCount();
    
            if ($importedRowCount !== ($rowCount - 1)) {
                return redirect()->back()->with('error', 'Row count is not the same as the heading row.');
            } else if ($import->failures()->isNotEmpty()) {
                $failures = $import->failures();
                return redirect()->back()->with('error', $failures);
            } else {
                return redirect()->route('residents.index')->with('success', 'Residents imported successfully!');
            }
        }
        // $validator=\Validator::make($request->all(),[
        //     'file'  => 'required|mimes:xls,xlsx,csv,txt|max:10000',
       

        
        // ]);
        // if ($validator->fails())
        // {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }
      
        // Excel::import(new ResidentsImport,request()->file('file'));
        
        // return redirect()->route('residents.index')
        // ->with('success','Records imported successfully!');
        
    }
    
      
    public function index(Request $request)
    {
        $all = Residents::get();
        if($request->has('view_deleted')) {
            $all = Residents::onlyTrashed()->get();;
        }
        return view ('enumerator.residents',compact('all'));

    }
    
    public function reports()
    {
        $male=DB::table('residents')->where('gender','Male')->count();
        $female=DB::table('residents')->where('gender','Female')->count();
        $school=DB::table('residents')->where('attendschool','Yes')->count();
        $noschool=DB::table('residents')->where('attendschool','No')->count();
        $voter=DB::table('residents')->where('voter','Yes')->count();
        $novoter=DB::table('residents')->where('voter','No')->count();
        
        $list = Residents::all();
    $infants=$list->where('age','<=','1')->count();
    $children=$list->whereBetween('age',[2,12])->count();
    $teenager=$list->whereBetween('age',[13,19])->count();
    $adults=$list->whereBetween('age',[20,59])->count();
    $senior=$list->where('age','>=','60')->count();
        return view ('systemadmin.reports',compact('male','female','school','noschool','voter','novoter','infants','children','teenager','adults','senior'));
}
 
    public function barangays()
    {
        return view ('systemadmin.barangays');
    }
    public function destroy($id)
    {
        
        $resident = Residents::find($id)->delete();
      
        return redirect()->route('residents.index')
        ->with('success','Residents archived successfully.');
    }
    public function repair($id) 
    {
        Residents::withTrashed()->find($id)->restore();
    
        return redirect()->route('residents.index' )->with('success','Resident restored successfully!');
    }
    public function allrestore() 
    {
        
        if (Residents::onlyTrashed()->restore()){
            return redirect()->route('residents.index')->with('success','Resident restored successfully!');
        }
        // show data
      else{
        return redirect()->route('residents.index')->with('error','No resident has been restored!');
        
    }
    }
    public function store(Request $request)
    {
       
 
        $resident = new Residents;
            $resident->region=request('region');
            $resident->province=request('province');
            $resident->city=request('city');
            $resident->zone=request('zone');
            $resident->barangay=request('barangay');
            $resident->purok=request('purok');
            $resident->street=request('street');
            $resident->housenum=request('housenum');
            $resident->unitnum=request('unitnum');
            $resident->headname=request('headname');
            $resident->respondentname=request('respondentname');
            $resident->startdate=request('startdate');
            $resident->timestart=request('timestart');
            $resident->enumname=request('enumname');
            $resident->housecontrolnum=request('housecontrolnum');
            $resident->housetype=request('housetype');
            $resident->bedroomnum=request('bedroomnum');
            $resident->storeysnum=request('storeysnum');
            $resident->rooftype=request('rooftype');
            $resident->walltype=request('walltype');
            $resident->floortype=request('floortype');
            $resident->nucfam=request('nucfam');
            $resident->housemembernum=request('housemembernum');
            $resident->householdhead=request('householdhead');
            $resident->householdmembername=request('householdmembername');
            $resident->nucfambelong=request('nucfambelong');
            $resident->reltohead=request('reltohead');
            $resident->gender=request('gender');
            $resident->birthdate=request('birthdate');
            $resident->birthregistered=request('birthregistered');
            $resident->civilstatus=request('civilstatus');
            $resident->ethnicity=request('ethnicity');
            $resident->religiousaffiliation=request('religiousaffiliation');
            $resident->ofw=request('ofw');
            $resident->ofwcountry=request('ofwcountry');
            $resident->residing=request('residing');
            $resident->attendschool=request('attendschool');
            $resident->yearlevel=request('yearlevel');
            $resident->schooltype=request('schooltype');
            $resident->notattending=request('notattending');
            $resident->educcompleted=request('educcompleted');
            $resident->shsstrand=request('shsstrand');
            $resident->collegecourse=request('collegecourse');
            $resident->training=request('training');
            $resident->pasttraining=request('pasttraining');
            $resident->trainnum=request('trainnum');
            $resident->trainprogram=request('trainprogram');
            $resident->literate=request('literate');
            $resident->voter=request('voter');
            $resident->votedlast=request('votedlast');
            $resident->job=request('job');
            $resident->nwork=request('nwork');
            $resident->jobnum=request('jobnum');
            $resident->occup=request('occup');
            $resident->occupcode=strtoupper(request('occupcode'));
            $resident->industry=request('industry');
            $resident->industrycode=strtoupper(request('industrycode'));
            $resident->employ=request('employ');
            $resident->employhrs=request('employhrs');
            $resident->employthrs=request('employthrs');
            $resident->addhrsworkpast=request('addhrsworkpast');
            $resident->addextrawork=request('addextrawork');
            $resident->classworker=request('classworker');
            $resident->fjobpast=request('fjobpast');
            $resident->findwork=request('findwork');
            $resident->rfindwork=request('rfindwork');
            $resident->findworknum=request('findworknum');
            $resident->rfnotwork=request('rfnotwork');
            $resident->lastlookjob=request('lastlookjob');
            $resident->pastwillingwork=request('pastwillingwork');
            $resident->willingtotakeupwork=request('willingtotakeupwork');
            $resident->cashsalary=request('cashsalary');
            $resident->kindsalary=request('kindsalary');
            $resident->sssmember=request('sssmember');
            $resident->gsismember=request('gsismember');
            $resident->philhealthmember=request('philhealthmember');
            $resident->membertype=request('membertype');
            $resident->philhealthdependent=request('philhealthdependent');
            $resident->pregnant=request('pregnant');
            $resident->soloparent=request('soloparent');
            $resident->soloparentid=request('soloparentid');
            $resident->disability=request('disability');
            $resident->disabilitytype=request('disabilitytype');
            $resident->pwdid=request('pwdid');
            $resident->seniorcitizenid=request('seniorcitizenid');
            $resident->crime=request('crime');
            $resident->crimetype=request('crimetype');
            $resident->crimeloc=request('crimeloc');
            $resident->bloodtype=request('bloodtype');
            $resident->rhtype=request('rhtype');
            $resident->nutritionstatus=request('nutritionstatus');
            $resident->datebns=request('datebns');
            $resident->treatment=request('treatment');
            $resident->treatment=request('treatmentloc');
            $resident->enddate=request('enddate');
            $resident->endtime=request('endtime');
            $resident->save();

           
            return redirect('/residents')->with('success', 'Residents added successfully!');

    }
    public function update(Request $request, Residents $resident)
    {
        $resident->update($request->all());
           return redirect('/residents')->with('success', 'Residents updated successfully!');


        }
        
public function asisan(Request $request)
{
    $search=['Asisan'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.asisan',compact('all'));
}
public function bagongtubig(Request $request)
{
    $search=['Bagong Tubig'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.bagongtubig',compact('all'));
}
public function calabuso(Request $request)
{
    $search=['Calabuso'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.calabuso',compact('all'));
}
public function dapdap_east(Request $request)
{
    $search=['Dapdap East'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.dapdap_east',compact('all'));
}
public function dapdap_west(Request $request)
{
    $search=['Dapdap West'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.dapdap_west',compact('all'));
}
public function francisco(Request $request)
{
    $search=['Francisco'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.francisco',compact('all'));
}
public function guinhawa_north(Request $request)
{
    $search=['Guinhawa North'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.guinhawa_north',compact('all'));
}
public function guinhawa_south(Request $request)
{
    $search=['Guinhawa South'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.guinhawa_south',compact('all'));
}
public function iruhin_central(Request $request)
{
    $search=['Iruhin Central'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.iruhin_central',compact('all'));
}

public function iruhin_east(Request $request)
{
    $search=['Iruhin East'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.iruhin_east',compact('all'));
}
public function iruhin_west(Request $request)
{
    $search=['Iruhin West'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.iruhin_west',compact('all'));
}
public function kaybagal_central(Request $request)
{
    $search=['Kaybagal Central'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.kaybagal_central',compact('all'));
}
public function kaybagal_north(Request $request)
{
    $search=['Kaybagal North'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.kaybagal_north',compact('all'));
}
public function kaybagal_south(Request $request)
{
    $search=['Kaybagal South'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.kaybagal_south',compact('all'));
}
public function magasawang_ilat(Request $request)
{
    $search=['Mag-asawang Ilat'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.magasawang_ilat',compact('all'));
}
public function maharlika_east(Request $request)
{
    $search=['Maharlika East'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.maharlika_east',compact('all'));
}
public function maharlika_west(Request $request)
{
    $search=['Maharlika West'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.maharlika_west',compact('all'));
}
public function maitim_central(Request $request)
{
    $search=['Maitim II Central'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.maitim_central',compact('all'));
}
public function maitim_east(Request $request)
{
    $search=['Maitim II East'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.maitim_east',compact('all'));
}
public function maitim_west(Request $request)
{
    $search=['Maitim II West'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.maitim_west',compact('all'));
}
public function mendezcrossing_east(Request $request)
{
    $search=['Mendez Crossing East'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.mendezcrossing_east',compact('all'));
}
public function mendezcrossing_west(Request $request)
{
    $search=['Mendez Crossing West'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.mendezcrossing_west',compact('all'));
}
public function neogan(Request $request)
{
    $search=['Neogan'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.neogan',compact('all'));
}
public function patutongmalaki_north(Request $request)
{
    $search=['Patutong Malaki North'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.patutongmalaki_north',compact('all'));
}
public function patutongmalaki_south(Request $request)
{
    $search=['Patutong Malaki South'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.patutongmalaki_south',compact('all'));
}
public function sambong(Request $request)
{
    $search=['Sambong'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.sambong',compact('all'));
}
public function sanjose(Request $request)
{
    $search=['San Jose'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.sanjose',compact('all'));
}
public function silangcrossing_east(Request $request)
{
    $search=['Silang Crossing East'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.silangcrossing_east',compact('all'));
}
public function silangcrossing_west(Request $request)
{
    $search=['Silang Crossing West'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.silangcrossing_west',compact('all'));
}
public function sungay_east(Request $request)
{
    $search=['Sungay East'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.sungay_east',compact('all'));
}
public function sungay_west(Request $request)
{
    $search=['Sungay West'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.sungay_west',compact('all'));
}
public function tolentino_east(Request $request)
{
    $search=['Tolentino East'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.tolentino_east',compact('all'));
}
public function tolentino_west(Request $request)
{
    $search=['Tolentino West'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.tolentino_west',compact('all'));
}
public function zambal(Request $request)
{
    $search=['Zambal'];
    $all=Residents::wherein('barangay',$search)->get();
    return view ('systemadmin.barangay.zambal',compact('all'));
}
}
