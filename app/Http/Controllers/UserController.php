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

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $all = User::get();

        if($request->has('view_deleted')) {
            $all = User::onlyTrashed()->get();;
        }
        return view ('systemadmin.user_list',compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('systemadmin.add_user');
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

        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $user = new User;
        $username = strtolower(str_replace(' ', '', $request->firstname . $request->middlename . $request->lastname));
        $username .= '_' . substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyz', 5)), 0, 5);
    
        while (User::where('username', $username)->exists()) {
            // If the username already exists, generate a new one
            $username = strtolower(str_replace(' ', '', $request->firstname . $request->middlename . $request->lastname));
            $username .= '_' . substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyz', 5)), 0, 5);
        }
    $user->username = $username;

    
        $user->firstname = strtoupper($request->firstname);
        $user->middlename = strtoupper($request->middlename);
        $user->lastname = strtoupper($request->lastname);

        $user->email = strtolower($request->email);
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->status = $request->status;
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
        $users = User::find($id);
        return redirect('/users');
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
            'status' => 'required|integer|in:0,1',
            'role' => 'required|string|in:System Admin,Enumerator',
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
    
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
    
        $user->save();
    
        return redirect('/users')->with('success', 'User updated successfully!');
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
        $activityLog = DB::table('activity_log')->orderBy('updated_at', 'desc')->get();
        return view('systemadmin.user_activitylogs',compact('activityLog'));
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

}