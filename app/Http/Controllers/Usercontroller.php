<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Validator;


class Usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data   =  \App\User::where('user_type', '<>', config('role.ROLES.ADMIN.ROLE'))->get();
        return view('admin.users.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.users.create');
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
        // aprint($request->all());
        $request->validate([
            'name'     => 'required|max:100',
            'email'    => 'required|unique:users',
            'password' => 'required'
        ]);

        try {
            //code...
            $data            = $request->all();
            $password        = $request->password;
            $hashedPassword  = Hash::make($password);

            $data['password']  = $hashedPassword;

            $object  = new \App\User; 
            $save    = $object->fill($data)->save();

            return back()->with('success', 'User added successfully');

        } catch (\Throwable $th) {
            //throw $th;

            return back()->with('error', $th->getMessage());
        }

        


        
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
        $userData  =  \App\User::whereId($id)->first();
        return view('admin.users.update', compact('userData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $request->validate([
            'name'     => 'required|max:100',
            'email'    => 'required',
            'user_type' => 'required'
        ]);

        try {
            //code...
            $data   =  $request->all();
            unset($data['id']);
    
            $id        = $request->id; 
            $userInfo  = \App\User::whereId($id)->first();
            $userInfo->fill($data)->save();

            return back()->with('success', 'User details updated successfully');
        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('error', $th->getMessage());
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
        //

        try {
            //code...
            if($id) {
                $delete   = \App\User::whereId($id)->delete();
    
                return back()->with('success', 'User removed successfully');
            }

        } catch (\Throwable $th) {
            //throw $th;

            return back()->with('error', $th->getMessage());
        }

       

    }
}
