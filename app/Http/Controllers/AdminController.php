<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use validator;
use Hash;
use App\User;

class AdminController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.dashboard');
    }

    /**
     * manage admin profile
     */

    public function manageProfile()
    {
        $userData   = \App\User::whereId(Auth::user()->id)->first();
        return view('admin.profile', compact('userData'));
    }

    public function updateProfile(Request $request)
    {

        $request->validate([
            'name'   => 'required',
            // 'email'  => 'required|unique:users',
            'id'     => 'required'
        ]);

        $id  = $request->id;

        try {
            //code...
            $userData  = \App\User::whereId($id)->first();
            $userData->name   = $request->name;
            // $userData->email  = $request->email;
            $userData->save();

            return back()->with('success', 'Profile updated successfully');

        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('error', $th->getMessage());
        }

    }

    public function changePassword()
    {
        $userData   = \App\User::whereId(Auth::user()->id)->first();
        return view('admin.changePassword', compact('userData'));
    }

    public function savePAssword(Request $request)
    {
        $request->validate([
            'oldpassword'       =>   'required|min:8',
            'newPassword'       =>   'required|min:8',
            'confirmPassword'   =>   'required|same:newPassword|min:8'

        ]);
        try {
            //code...
            $userId    = Auth::user()->id;

            if( Hash::check($request->input('oldpassword') , Auth::user()->password)){
                $sql       = User::whereId($userId)->UPDATE(['password'=> Hash::make($request->input('confirmPassword'))]);
                return   back()->with('success', 'Password Updated Successfully');

            }else{

                return    back()->with('error', 'Old Password Not Matched');
            }

        } catch (\Throwable $th) {
            //throw $th;
            return   back()->with('error', $th->getMessage());

        }    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
