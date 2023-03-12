<?php

namespace App\Http\Controllers;

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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator=\Validator::make($request->all(),[
            'name'=>'required',
            'username'=>'required|unique:users',
            'email'=>'required|email|unique:users',
            'password'=>'required|string|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[!%&@#$^*?_~-]).{8,}$/',
            'status'=>'required',
            'role'=>'required',
        ]);
        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user = new User;

        $user->name=strtoupper($request->name);
        $user->username=$request->username;
        $user->email=strtolower($request->email);
        $user->password=Hash::make($request->password);
        $user->role=$request->role;
        $user->status=$request->status;
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
        
        $user->update([
            'name' => strtoupper($request->name),
            'username' => $request->username,
            'email' => strtolower($request->email),
            'status'=>$request->status,
            'role' => $request->role,
        ]);
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
        $activityLog = DB::table('activity_log')->orderBy('updated_at', 'asc')->get();
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