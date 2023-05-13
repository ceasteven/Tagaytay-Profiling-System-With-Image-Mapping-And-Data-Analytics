<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Hash;
use  Illuminate\Support\Facades\SoftDeletes;
use App\Models\User;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Artisan;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(auth()->user()->role == 'System Administrator') {
            $all = User::get();
    
            return view ('systemadmin.user_list',compact('all'));
        } else {
            return redirect()->route('dashboard');
        }
     
    }
    // public function index(Request $request)
    // {
    //     $all = User::where('status',1)->get();

    
    //     return view ('systemadmin.user_list',compact('all'));
    // }
    // public function inactive(Request $request)
    // {
    //     $inactive = User::where('status',0)->get();

    
    //     return view ('systemadmin.view_inactive',compact('inactive'));
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()->role == 'System Administrator') {

    
            return view('systemadmin.add_user');
        } else {
            return redirect()->route('dashboard');
        }
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'firstname' => 'required|string|max:255',
    'middlename' => 'nullable|string|max:255',
    'lastname' => 'required|string|max:255',
     
            'email' => 'required|email|unique:users',
            'password' => [
                'required',
                'string',
                'confirmed',
                'regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[!%&@#$^*?_~-]).{8,}$/'
            ],
            'status' => 'required',
            'role' => 'required',
            'barangay' => 'nullable|string|max:255',
            'profile' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        
        ], [
            'firstname.required' => 'Please enter a first name.',
            'firstname.string' => 'The first name should be a string.',
            'firstname.max' => 'The first name should not exceed 255 characters.',
            'middlename.string' => 'The middle name should be a string.',
            'middlename.max' => 'The middle name should not exceed 255 characters.',
            'lastname.required' => 'Please enter a last name.',
            'lastname.string' => 'The last name should be a string.',
            'lastname.max' => 'The last name should not exceed 255 characters.',
            'email.required' => 'Please enter an email address.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'That email address is already taken.',
            'password.required' => 'Please enter a password.',
            'password.confirmed' => 'The password confirmation does not match.',
            'password.regex' => 'The password must contain at least 8 characters, including at least one uppercase letter, one lowercase letter, one number, and one special character (!%&@#$^*?_~-).',
            'status.required' => 'Please select a status.',
            'role.required' => 'Please select a role.',
            'profile.image' => 'The file must be an image.',
            'profile.mimes' => 'The image must be a jpeg, png, jpg, or gif.',
            'profile.max' => 'The profile size must not exceed more than 2MB.'
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
     
    
        $user = new User;
     // Generate the initial username
$username = strtolower(str_replace(' ', '', $request->firstname . $request->lastname));

// Check if the generated username starts with a symbol or a number, if yes add an underscore to the start
if (preg_match('/^[^a-zA-Z]/', $username)) {
    $username = '_' . $username;
}

// Add a random 5-character string to the end of the username to ensure uniqueness
$username .= '_' . substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyz', 5)), 0, 5);

// Loop through the usernames until a unique one is found
while (User::where('username', $username)->exists()) {
    // Generate a new username with a different random string
    $username = strtolower(str_replace(' ', '', $request->firstname . $request->lastname));
    if (preg_match('/^[^a-zA-Z]/', $username)) {
        $username = '_' . $username;
    }
    $username .= '_' . substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyz', 5)), 0, 5);
}

// Set the username of the user object

$user->username = $username;


    
        $user->firstname = strtoupper($request->firstname);
        $user->middlename = strtoupper($request->middlename);
        $user->lastname = strtoupper($request->lastname);

        $user->email = strtolower($request->email);
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->status = $request->status;
        $user->barangay = $request->barangay;
      
            if ($request->hasFile('profile')) {
                // Save uploaded image
                $filename = public_path('dist/img/') . time() . '_' . $request->file('profile')->getClientOriginalName();
                $request->file('profile')->move(public_path('dist/img/'), basename($filename));
            $user->profile = basename($filename);

        } else {
            $user->profile = 'default.jpg'; // fallback to default image
        }
    
        $user->save();
        return redirect('/users')->with('success', 'User added successfully!');
  
    
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
            if(auth()->user()->role == 'System Administrator') {
                $users = User::findOrFail($id);
                return view('systemadmin.view_users', compact('users'));
            } else {
                return redirect()->route('dashboard');
            }
        
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
       
        
        $validator = \Validator::make($request->all(), [
            'firstname' => 'required|string|max:255',
            'middlename' => 'nullable|string|max:255',
            'lastname' => 'required|string|max:255',
            'username' => [
                'required',
                'string',
                'max:255',
                Rule::unique('users')->ignore($user),
                'regex:/^[A-Za-z0-9](?!.*[-_]{2})[A-Za-z0-9_-]*[A-Za-z0-9]$/'
            ],
            
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id)
            ],
            'password' => 'nullable|string|min:8|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[!%&@#$^*?_~-]).{8,}$/',
          
            'role' => 'required|string|in:System Administrator,Enumerator',
            'barangay' => 'nullable|string|max:255',
            'profile' => 'image|mimes:jpeg,png,jpg|max:2048',
            [
            'firstname.required' => 'Please enter a first name.',
            'firstname.string' => 'The first name should be a string.',
            'firstname.max' => 'The first name should not exceed 255 characters.',
            'middlename.string' => 'The middle name should be a string.',
            'middlename.max' => 'The middle name should not exceed 255 characters.',
            'lastname.required' => 'Please enter a last name.',
            'lastname.string' => 'The last name should be a string.',
            'lastname.max' => 'The last name should not exceed 255 characters.',
            'username.required' => 'Please enter a username.',
            'username.unique' => 'That username is already taken.',
            'username.regex' => 'The username should only contain letters, numbers, dash, or underscore. It should not start or end with dash or underscore and two consecutive dashes or underscores are not allowed',
            'email.required' => 'Please enter an email address.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'That email address is already taken.',
            'password.required' => 'Please enter a password.',
            'password.confirmed' => 'The password confirmation does not match.',
            'password.regex' => 'The password must contain at least 8 characters, including at least one uppercase letter, one lowercase letter, one number, and one special character (!%&@#$^*?_~-).',
            'status.required' => 'Please select a status.',
            'role.required' => 'Please select a role.',
            'profile.image' => 'The file must be an image.',
            'profile.mimes' => 'The image must be a jpeg, png, jpg, or gif.',
            'profile.max' => 'The profile size must not exceed more than 2MB.'
            ]
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $user->firstname = strtoupper($request->firstname);
        $user->middlename = strtoupper($request->middlename);
        $user->lastname = strtoupper($request->lastname);
        $user->username = $request->username;
        $user->email = strtolower($request->email);
        $user->status = $request->status;
        $user->role = $request->role;
        $user->barangay = $request->barangay;
    
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
        if ($request->hasFile('profile')) {
            // Save uploaded image
            $filename = public_path('dist/img/') . time() . '_' . $request->file('profile')->getClientOriginalName();
            $request->file('profile')->move(public_path('dist/img/'), basename($filename));
            $user->profile = basename($filename);
        } else {
            // Use existing profile picture
            $user->profile = $user->profile ?? 'default.jpg'; // fallback to default image if no profile picture is set
        }
        
    
        
        if ($user->isDirty()) {
            $user->save();
            return redirect('/users')->with('success', 'User updated successfully!');
        } else {
            return redirect()->back()->with('error','No changes were made.');
        }
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $user = User::find($id)->delete();
      
        return redirect()->route('users.index')
        ->with('success','User have been archive successfully!');
    }
    public function activityLog()
    {
        if(auth()->user()->role == 'System Administrator') {
            $activityLog = DB::table('activity_log')->orderBy('created_at', 'desc')->get();
            return view('systemadmin.user_activitylogs',compact('activityLog'));
        } else {
            return redirect()->route('dashboard');
        }
     
    }

    public function restore($id) 
{
    
    User::withTrashed()->find($id)->restore();

    return redirect()->route('users.index', )->with('success','User restored successfully!');
}
public function restore_all() 
{
    
    if (User::onlyTrashed()->restore()){
        return redirect()->route('users.index')->with('success','Users restored successfully!');
    }
    // show data
  else{
    return redirect()->route('users.index')->with('error','No users have been restored!');
    
}
}
public function clearLogs()
{
 
    $olderThan30Days = Carbon::now()->subDays(30);

    $deletedRows = DB::table('activity_log')->where('updated_at', '<', $olderThan30Days)->delete();
    
    if ($deletedRows == 0) {
        return redirect()->route('activityLog')->with('error', 'No activity logs older than 30 days found!');
    }
    
    return redirect()->route('activityLog')->with('success', 'Activity logs cleared!');
}

}
