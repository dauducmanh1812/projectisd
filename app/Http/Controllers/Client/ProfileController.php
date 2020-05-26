<?php

namespace App\Http\Controllers\Client;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
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
        $user = Auth::user();
        return view('client.profile.index', compact('user'));
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
        
        $user = User::find($id);
        return view('client.profile.edit')->with(['user'=>$user]);
        // dd($user);
        // $user = Auth::user();
        // return view('client.profile.edit', compact('user'));
        // $arr['user'] = $user;
        // return view('client.profile.edit')->with($arr);
        // var_dump($request);
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
        // dd($request->all());
       
        // $user->name = $request->name;
        // $user->phone = $request->phone;
        // $user->role = $request->role;
        // $user->email = $request->email;
       
        // $user->password = $newPassword;
        // $user->save();
        $userId = $request->id;
        $newPassword = Hash::make($request->password);
        User::where('id',$userId)->update(array(
            'name' => $request->name,
            'phone' => $request->phone,
            'role' => $request->role,
            'email' => $request->email,
            'password' => $newPassword
        ));
        return redirect()->route('client.profile.index');
        //a se gia su chu da nhap vao 1 cai pass cu  va 2 cai pass moi
        //get pass cu trong db.
        //hash pass cu moi nhap vao tu input
        //so sanh 2 cai hash xem co bang nhau k
        // neu bang nhau thi compare 2 cai pass moi.
        //neu 2 pass moi bang nhau thi hash pass moi. roi save vao db
        // $passwordInput = '123'; // cai nay tu input nen chua dc hash
        // $newPassword =  '456';
        // $reNewPass = '456';
        // // o day se co doan validate neu muon. neu co validate o day thi k can line 102 nua
        // // $validator = Validator::make($request->all(), [
        // //     'title' => 'required|unique:posts|max:255',
        // //     'body' => 'required',
        // // ]);

        // $oldPass = User::find($id)->password;
        // if(Hash::make($passwordInput) == $oldPass){
        //     if($newPassword == $reNewPass){
        //         $pass = Hash::make($newPassword);
        //     }
        // }
        // User::where('id',$id)->update([
        //     'password'=>$pass
        // ]);
       
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
