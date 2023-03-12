<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Households;
use App\Models\Residents;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\DB;
use  Illuminate\Support\Facades\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */





    public function index()
    {
        $resident=Residents::count();
        $users=User::count('id');
        $hcn=Households::count('housecontrolnum');
        $asisan=DB::table('residents')->where('barangay','Asisan')->count();
        $bagongtubig=DB::table('residents')->where('barangay','Bagong Tubig')->count();
        $calabuso=DB::table('residents')->where('barangay','Calabuso ')->count();
        $dapdapeast=DB::table('residents')->where('barangay','Dapdap East')->count();
        $dapdapwest=DB::table('residents')->where('barangay','Dapdap West')->count();
        $francisco=DB::table('residents')->where('barangay','Francisco')->count();
        $guinhawanorth=DB::table('residents')->where('barangay','Guinhawa North ')->count();
        $guinhawasouth=DB::table('residents')->where('barangay','Guinhawa South')->count();
        $iruhincentral=DB::table('residents')->where('barangay','Iruhin Central')->count();
        $iruhineast=DB::table('residents')->where('barangay','Iruhin East')->count();
        $iruhinwest =DB::table('residents')->where('barangay','Iruhin West ')->count();
        $kaybagalcentral=DB::table('residents')->where('barangay','Kaybagal Central')->count();
        $kaybagalnorth=DB::table('residents')->where('barangay','Kaybagal North')->count();
        $kaybagalsouth=DB::table('residents')->where('barangay','Kaybagal South')->count();
        $magasawangilat=DB::table('residents')->where('barangay','Mag-asawang Ilat')->count();
        $maharlikaeast=DB::table('residents')->where('barangay','Maharlika East')->count();
        $maharlikawest=DB::table('residents')->where('barangay','Maharlika West')->count();
        $maitimcentral=DB::table('residents')->where('barangay','Maitim Central')->count();
        $maitimeast=DB::table('residents')->where('barangay','Maitim East')->count();
        $maitimwest=DB::table('residents')->where('barangay','Maitim West')->count();
        $mendezeast=DB::table('residents')->where('barangay','Mendez Crossing East')->count();
        $mendezwest=DB::table('residents')->where('barangay','Mendez Crossing West')->count();
        $neogan=DB::table('residents')->where('barangay','Neogan')->count();
        $patutonorth=DB::table('residents')->where('barangay','Patutong Malaki North')->count();
        $patutosouth=DB::table('residents')->where('barangay','Patutong Malaki South')->count();
        $sambong=DB::table('residents')->where('barangay','Sambong')->count();
        $sanjose=DB::table('residents')->where('barangay','San Jose')->count();
        $silangeast=DB::table('residents')->where('barangay','Silang Crossing East')->count();
        $silangwest=DB::table('residents')->where('barangay','Silang Crossing West')->count();
        $sungayeast=DB::table('residents')->where('barangay','Sungay East')->count();
        $sungaywest=DB::table('residents')->where('barangay','Sungay West')->count();
        $tolentinoeast=DB::table('residents')->where('barangay','Tolentino East')->count();
        $tolentinowest=DB::table('residents')->where('barangay','Tolentino West')->count();
        $zambal=DB::table('residents')->where('barangay','Zambal')->count();
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
        return view('backend.dashboard',compact('resident','users','hcn','asisan','bagongtubig','calabuso','dapdapeast','dapdapwest','francisco','guinhawanorth','guinhawasouth','iruhincentral','iruhineast','iruhinwest','kaybagalcentral','kaybagalnorth','kaybagalsouth','magasawangilat','maharlikaeast','maharlikawest','maitimcentral','maitimeast','maitimwest','mendezeast','mendezwest','neogan','patutonorth','patutosouth','sambong','sanjose','silangeast','silangwest','sungayeast','sungaywest','tolentinoeast','tolentinowest','zambal','male','female','school','noschool','voter','novoter','infants','children','teenager','adults','senior'));
    }

    public function changePassword()
{
   return view('auth.change_password');
}
public function updatePassword(Request $request)
{


    if (!(Hash::check($request->get('old_password'), Auth::user()->password))) {
        // The passwords matches
        return back()->with("error","Your current password does not matches with the password you provided. Please try again.");
    }

    if(strcmp($request->get('old_password'), $request->get('new_password')) == 0){
        //Current password and new password are same
        return back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
    }
   

    $validator = $request->validate([
        'old_password' => 'required',
        'new_password' => 'required|string|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[!%&@#$^*?_~-]).{8,}$/',
    
    ]);
 
    //Change Password
    /** @var \App\Models\User $user **/
    $user = Auth::user();
    $user->password = Hash::make($request->get('new_password'));
    $user->save();

    return back()->with("status", "Password changed successfully!");

}


}


