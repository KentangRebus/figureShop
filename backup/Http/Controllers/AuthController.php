<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
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
        $this->validate($request, [
            'FullName' => 'bail|required|min:5',
            'Email' => 'bail|required|email|unique:user,email',
            'Password' => 'bail|required|alpha_num|min:5',
            'ConfirmPassword' => 'bail|required|same:Password',
            'Phone' => 'bail|required|numeric|digits:11',
            'Address' => 'bail|required|min:10',
            'Gender' => 'bail|required|not_in:Gender',
            'profile_picture' => 'bail|required|mimes:jpeg,bmp,png',
            'Agreement' => 'bail|required'
        ]);

        $user = new User();
        $user->name = $request->FullName;
        $user->email = $request->Email;
        $user->password = bcrypt($request->Password);
        $user->phone = $request->Phone;
        $user->address = $request->Address;
        $user->gender = $request->Gender;
        $user->picture = $request->profile_picture;
        $user->role = 'Member';
        $user->save();
        return redirect('Login')->with('alert-success','Register Success');
    }

    public function login(Request $request){

        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect()->intended('/');
        }
        return back()->withErrors(['message'=>'Email or Password is Incorrect']);
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
