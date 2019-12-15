<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

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
        //membuat validator untuk melakukan validasi yang diminta soal
        $validator = Validator::make($request->all(), [
            'FullName' => 'bail|required|min:5',
            'Email' => 'bail|required|email|unique:users,email',
            'Password' => 'bail|required|alpha_num|min:5',
            'ConfirmPassword' => 'bail|required|same:Password',
            'Phone' => 'bail|required|numeric|digits_between:11,13',
            'Address' => 'bail|required|min:10',
            'Gender' => 'bail|required|not_in:Gender',
            'profile_picture' => 'bail|required|mimes:jpeg,jpg,png',
            'Agreement' => 'bail|required'
        ]);
        // kita cek validator, jika ada yang gagal, maka balik ke register dengan pesan error
        if(!$validator->fails()){

            //melakukan insert ke database table user
            $image = $request->file('profile_picture');
            $imagename = time().'.'.$image->getClientOriginalName();
            $dest = 'public';
            $image->storeAs($dest,$imagename);

            //buat objek user untuk di insert
            $user = new User();
            $user->name = $request->FullName;
            $user->email = $request->Email;
            $user->password = bcrypt($request->Password);
            $user->phone = $request->Phone;
            $user->address = $request->Address;
            $user->gender = $request->Gender;
            $user->picture = $imagename;
            $user->role = 'Member';
            $user->save();
            //kembali dengan pesan sukses
            return redirect('Login')->with('alert-success','Register Success');
        }
        else{
            return redirect('Login')->withErrors($validator->errors());
        }

    }

    public function logout(){
        //melakukan logout dan menghapus segala session dan cookie
        $user = Auth::user();
        $user->remember_token="";
        $user->save();
        Auth::logout();
        Session::flush();
        session()->regenerate();
        return redirect('Login')->with('alert-success','Logout Success');
    }

    public function login(Request $request){

        $email = $request->email;
        $password = $request->password;
        if($request->remember == null){
            //login tanpa remember me
            if (Auth::attempt(['email' => $email, 'password' => $password])) {
                return redirect()->intended('/');
            }
        }
        else{
            //melakukan remember me dengan auth attempt dan login
            if (Auth::attempt(['email' => $email, 'password' => $password],true)) {
                return redirect()->intended('/');
            }
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
