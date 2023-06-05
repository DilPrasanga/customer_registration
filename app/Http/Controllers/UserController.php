<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $req){
        $req->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user=User::where(['email'=>$req->email])->first();
    
    if(!$user || !Hash::check($req->password,$user->password)){
    
        return 'Password not matched! or User not exist!';
    
    }
    else{
        $req->session()->put('user',$user);
        return  redirect('/');
    }
        }

        public function register(Request $request){

            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
            ]);
       
            $input = $request->all();
              $input['password'] = Hash::make($input['password']);
            User::create($input);
          
            return redirect()->route('login')
                            ->with('success','Registration is successfull.');
            }

        public function logout(Request $request)
        {
            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('/login');
        }
}
