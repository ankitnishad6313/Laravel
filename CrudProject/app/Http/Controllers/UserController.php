<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'phone' => 'required|digits:10|unique:users,phone',
            'email' => "required|email|unique:users,email",
            'password' => 'required|min:6',
            'city' => 'required|min:3',
            'gender' => 'required|in:Male,Female'
        ]);

        $res = User::create($request->all());
        
        if($res){
            return redirect()->back()->with('success', 'Registration Successfull!');
            
        }else{
            return redirect()->back()->with('error', 'Registration Failed!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return view('show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|min:3',
            'phone' => 'required|digits:10|unique:users,phone,' . $id,
            'email' => "required|email|unique:users,email,$id",
            'city' => 'required|min:3',
            'gender' => 'required|in:Male,Female'
        ]);

        $res = User::find($id)->update($request->all());
        
        if($res){
            return redirect()->route('home')->with('success', 'User Updated Successfully!');
            
        }else{
            return back()->with('error', 'Updation Failed!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(User::find($id)->delete()){
            return redirect()->route('home')->with('success', 'User Deleted Successfully!');
        }else{
            return back()->with('error', 'Something went wrong!');
        }
    }

    public function trash()
    {
        $users = User::onlyTrashed()->get();
        return view('trash', compact('users'));
    }
    public function restore ($id)
    {
        User::withTrashed()->find($id)->restore();
        return redirect()->route('home')->with('success', 'User Restored Successfully!');

    }

    public function forceDestroy(string $id)
    {
        if(User::withTrashed()->find($id)->forceDelete()){
            return back()->with('success', 'User Permanentaly Deleted!');
        }else{
            return back()->with('error', 'Something went wrong!');
        }
    }
}
