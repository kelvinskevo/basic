<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function profile()
    { // Check if the user is authenticated
        if (Auth::check()) {
            $id = Auth::user()->id;
            $adminData = User::find($id);
            return view('admin.admin_profile_view')->with('adminData', $adminData);
        } else {
            // Redirect to login page or show an error message
            return redirect()->route('login')->with('error', 'You must be logged in to view this page.');
        }
    }

    public function editprofile()
    {
        if (Auth::check()) {
            $id = Auth::user()->id;
            $editData = User::find($id);
            return view('admin.admin_profile_edit')->with('editData', $editData);
        } else {
            // Redirect to login page or show an error message
            return redirect()->route('login')->with('error', 'You must be logged in to view this page.');
        }
    }

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
