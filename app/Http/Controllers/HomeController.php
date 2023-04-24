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

use Illuminate\Support\Facades\Session;

use Carbon\Carbon;

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
        $resident = Residents::count();
        $users = DB::table('users')->where('status', '1')->count();
        $hcn =DB::table('households')->count('housecontrolnum');
        $asisan = DB::table('residents')->where('barangay', 'Asisan')->count();
        $asisanh = DB::table('residents')->where('barangay', 'Asisan')->distinct()->count('housecontrolnum');
        $bagongtubig = DB::table('residents')->where('barangay', 'Bagong Tubig')->count();
        $bagongtubigh = DB::table('residents')->where('barangay', 'Bagong Tubig')->distinct()->count('housecontrolnum');
        $calabuso = DB::table('residents')->where('barangay', 'Calabuso ')->count();
        $calabusoh = DB::table('residents')->where('barangay', 'Calabuso ')->distinct()->count('housecontrolnum');
        $dapdapeast = DB::table('residents')->where('barangay', 'Dapdap East')->count();
        $dapdapeasth = DB::table('residents')->where('barangay', 'Dapdap East')->distinct()->count('housecontrolnum');
        $dapdapwest = DB::table('residents')->where('barangay', 'Dapdap West')->count();
        $dapdapwesth = DB::table('residents')->where('barangay', 'Dapdap West')->distinct()->count('housecontrolnum');
        $francisco = DB::table('residents')->where('barangay', 'Francisco')->count();
        $franciscoh = DB::table('residents')->where('barangay', 'Francisco')->distinct()->count('housecontrolnum');
        $guinhawanorth = DB::table('residents')->where('barangay', 'Guinhawa North ')->count();
        $guinhawanorthh = DB::table('residents')->where('barangay', 'Guinhawa North ')->distinct()->count('housecontrolnum');
        $guinhawasouth = DB::table('residents')->where('barangay', 'Guinhawa South')->count();
        $guinhawasouthh = DB::table('residents')->where('barangay', 'Guinhawa South')->distinct()->count('housecontrolnum');
        $iruhincentral = DB::table('residents')->where('barangay', 'Iruhin Central')->count();
        $iruhincentralh = DB::table('residents')->where('barangay', 'Iruhin Central')->distinct()->count('housecontrolnum');
        $iruhineast = DB::table('residents')->where('barangay', 'Iruhin East')->count();
        $iruhineasth = DB::table('residents')->where('barangay', 'Iruhin East')->distinct()->count('housecontrolnum');
        $iruhinwest = DB::table('residents')->where('barangay', 'Iruhin West ')->count();
        $iruhinwesth = DB::table('residents')->where('barangay', 'Iruhin West ')->distinct()->count('housecontrolnum');
        $kaybagalcentral = DB::table('residents')->where('barangay', 'Kaybagal Central')->count();
        $kaybagalcentralh = DB::table('residents')->where('barangay', 'Kaybagal Central')->distinct()->count('housecontrolnum');
        $kaybagalnorth = DB::table('residents')->where('barangay', 'Kaybagal North')->count();
        $kaybagalnorthh = DB::table('residents')->where('barangay', 'Kaybagal North')->distinct()->count('housecontrolnum');
        $kaybagalsouth = DB::table('residents')->where('barangay', 'Kaybagal South')->count();
        $kaybagalsouthh = DB::table('residents')->where('barangay', 'Kaybagal South')->distinct()->count('housecontrolnum');
        $magasawangilat = DB::table('residents')->where('barangay', 'Mag-asawang Ilat')->count();
        $magasawangilath = DB::table('residents')->where('barangay', 'Mag-asawang Ilat')->distinct()->count('housecontrolnum');
        $maharlikaeast = DB::table('residents')->where('barangay', 'Maharlika East')->count();
        $maharlikaeasth = DB::table('residents')->where('barangay', 'Maharlika East')->distinct()->count('housecontrolnum');
        $maharlikawest = DB::table('residents')->where('barangay', 'Maharlika West')->count();
        $maharlikawesth = DB::table('residents')->where('barangay', 'Maharlika West')->distinct()->count('housecontrolnum');
        $maitimcentral = DB::table('residents')->where('barangay', 'Maitim Central')->count();
        $maitimcentralh = DB::table('residents')->where('barangay', 'Maitim Central')->distinct()->count('housecontrolnum');
        $maitimeast = DB::table('residents')->where('barangay', 'Maitim East')->count();
        $maitimeasth = DB::table('residents')->where('barangay', 'Maitim East')->distinct()->count('housecontrolnum');
        $maitimwest = DB::table('residents')->where('barangay', 'Maitim West')->count();
        $maitimwesth = DB::table('residents')->where('barangay', 'Maitim West')->distinct()->count('housecontrolnum');
        $mendezeast = DB::table('residents')->where('barangay', 'Mendez Crossing East')->count();
        $mendezeasth = DB::table('residents')->where('barangay', 'Mendez Crossing East')->distinct()->count('housecontrolnum');
        $mendezwest = DB::table('residents')->where('barangay', 'Mendez Crossing West')->count();
        $mendezwesth = DB::table('residents')->where('barangay', 'Mendez Crossing West')->distinct()->count('housecontrolnum');
        $neogan = DB::table('residents')->where('barangay', 'Neogan')->count();
        $neoganh = DB::table('residents')->where('barangay', 'Neogan')->distinct()->count('housecontrolnum');
        $patutonorth = DB::table('residents')->where('barangay', 'Patutong Malaki North')->count();
        $patutonorthh = DB::table('residents')->where('barangay', 'Patutong Malaki North')->distinct()->count('housecontrolnum');
        $patutosouth = DB::table('residents')->where('barangay', 'Patutong Malaki South')->count();
        $patutosouthh = DB::table('residents')->where('barangay', 'Patutong Malaki South')->distinct()->count('housecontrolnum');
        $sambong = DB::table('residents')->where('barangay', 'Sambong')->count();
        $sambongh = DB::table('residents')->where('barangay', 'Sambong')->distinct()->count('housecontrolnum');
        $sanjose = DB::table('residents')->where('barangay', 'San Jose')->count();
        $sanjoseh = DB::table('residents')->where('barangay', 'San Jose')->distinct()->count('housecontrolnum');
        $silangeast = DB::table('residents')->where('barangay', 'Silang Crossing East')->count();
        $silangeasth = DB::table('residents')->where('barangay', 'Silang Crossing East')->distinct()->count('housecontrolnum');
        $silangwest = DB::table('residents')->where('barangay', 'Silang Crossing West')->count();
        $silangwesth = DB::table('residents')->where('barangay', 'Silang Crossing West')->distinct()->count('housecontrolnum');
        $sungayeast = DB::table('residents')->where('barangay', 'Sungay East')->count();
        $sungayeasth = DB::table('residents')->where('barangay', 'Sungay East')->distinct()->count('housecontrolnum');
        $sungaywest = DB::table('residents')->where('barangay', 'Sungay West')->count();
        $sungaywesth = DB::table('residents')->where('barangay', 'Sungay West')->distinct()->count('housecontrolnum');
        $tolentinoeast = DB::table('residents')->where('barangay', 'Tolentino East')->count();
        $tolentinoeasth = DB::table('residents')->where('barangay', 'Tolentino East')->distinct()->count('housecontrolnum');
        $tolentinowest = DB::table('residents')->where('barangay', 'Tolentino West')->count();
        $tolentinowesth = DB::table('residents')->where('barangay', 'Tolentino West')->distinct()->count('housecontrolnum');
        $zambal = DB::table('residents')->where('barangay', 'Zambal')->count();
        $zambalh = DB::table('residents')->where('barangay', 'Zambal')->distinct()->count('housecontrolnum');
       
        $male = DB::table('residents')->where('gender', 'Male')->count();
        $female = DB::table('residents')->where('gender', 'Female')->count();
        $school = DB::table('residents')->where('attendschool', 'Yes')->count();
        $noschool = DB::table('residents')->where('attendschool', 'No')->count();
        $voter = DB::table('residents')->where('voter', 'Yes')->count();
        $novoter = DB::table('residents')->where('voter', 'No')->count();


        $list = Residents::all();
        $infants = $list->where('age', '<=', '1')->count();
        $children = $list->whereBetween('age', [2, 12])->count();
        $teenager = $list->whereBetween('age', [13, 19])->count();
        $adults = $list->whereBetween('age', [20, 59])->count();
        $senior = $list->where('age', '>=', '60')->count();
        return view('backend.dashboard', compact('resident', 'users', 'hcn','asisan','asisanh', 'bagongtubig', 'bagongtubigh','calabuso', 'calabusoh','dapdapeast','dapdapeasth', 'dapdapwest','dapdapwesth', 'francisco','franciscoh', 'guinhawanorth',  'guinhawanorthh','guinhawasouth', 'guinhawasouthh','iruhincentral','iruhincentralh', 'iruhineast','iruhineasth', 'iruhinwest','iruhinwesth', 'kaybagalcentral','kaybagalcentralh', 'kaybagalnorth','kaybagalnorthh', 'kaybagalsouth','kaybagalsouthh', 'magasawangilat','magasawangilath', 'maharlikaeast','maharlikaeasth', 'maharlikawest', 'maharlikawesth','maitimcentral','maitimcentralh', 'maitimeast','maitimeasth', 'maitimwest', 'maitimwesth','mendezeast','mendezeasth', 'mendezwest','mendezwesth', 'neogan','neoganh', 'patutonorth','patutonorthh', 'patutosouth','patutosouthh', 'sambong','sambongh', 'sanjose','sanjoseh', 'silangeast','silangeasth', 'silangwest','silangwesth', 'sungayeast','sungayeasth', 'sungaywest','sungaywesth' ,'tolentinoeast','tolentinoeasth', 'tolentinowest', 'tolentinowesth', 'zambal', 'zambalh', 'male', 'female', 'school', 'noschool', 'voter', 'novoter', 'infants', 'children', 'teenager', 'adults', 'senior'));
    }

    public function changePassword()
    {
        return view('auth.change_password');
    }
    public function updatePassword(Request $request)
    {


        if (!(Hash::check($request->get('old_password'), Auth::user()->password))) {
            // The passwords matches
            return back()->with("error", "Your current password does not matches with the password you provided. Please try again.");
        }

        if (strcmp($request->get('old_password'), $request->get('new_password')) == 0) {
            //Current password and new password are same
            return back()->with("error", "New Password cannot be same as your current password. Please choose a different password.");
        }


        $validator = $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|string|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[!%&@#$^*?_~-]).{8,}$/',

        ]);

      
 
        $dt=Carbon::now();
$todaydate=$dt->toDateTimeString();
         $activityLog=[
'log_name'=> Auth::check() ? Auth::user()->name : null,
'description'=>'Change Password',
'updated_at'=>$todaydate,


         ];
  
   DB::table('activity_log')->insert($activityLog);
        activity()->disableLogging();
      
        //Change Password
        /** @var \App\Models\User $user **/
        $user = Auth::user();
        $user->password = Hash::make($request->get('new_password'));
     
        $user->save();
   
        return back()->with("status", "Password changed successfully!");
    }
}
