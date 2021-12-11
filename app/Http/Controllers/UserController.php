<?php

namespace App\Http\Controllers;

use App\Models\Logger;
use App\Models\Observer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class UserController extends Controller
{

    private $observer;

    public function __construct()
    {
        $this->observer = new Observer();
        $this->observer->attach(new Logger());
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if ($request->has('password') && $request->input('password') != '' && $request->input('password') == $request->input('password_confirmation')) {
            $user->password = bcrypt($request->input('password'));
        } else if ($request->has('password') && $request->input('password') != '' && $request->input('password') != $request->input('password_confirmation')) {
            return redirect()->back()->withErrors(['password' => 'Passwords do not match']);
        }

        $request->request->remove('password');
        $request->request->remove('password_confirmation');

        $user->update($request->all());
        $user->save();

        $this->observer->notify("users:updated", $user);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        $this->observer->notify("users:deleted", $user);

        return redirect()->route('register');
    }
}
