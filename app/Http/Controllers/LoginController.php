<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\LoginModel;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function goToRegisterPage(){
        return view('register');    
    }
    public function goToLoginPage(){
        return view('index');
    }

    public function createUser(Request $request){
        $request->validate([

            'username'=>'required',
            'password'=>'min:8|max:12',
            'email'=>'email|unique:course_member,email',
            'mobile' => 'required|unique:course_member,mobile|numeric'
        ],
            [
                'email.email' => 'Please provide a valid email address.',
                'username.required' => 'Username is required.',
                'email.unique' => 'This email has already been taken.',
                'password.min' => 'Password must be at least :min characters.',
                'password.max' => 'Password cannot be longer than :max characters.',              
                'mobile.required' => 'Mobile number is required.',
                'mobile.unique' => 'This mobile number has already been taken.',
                'mobile.numeric' => 'Invalid Mobile Number.'
            ]);

        $username = $request['username'];
        $email = $request['email'];
        $password = $request['registerpassword'];
        $mobile = $request['mobile'];

        $users = new LoginModel();

        $users->username = $username;
        $users->email = $email;
        $users->password = $password;
        $users->mobile = $mobile;

        $users->save();

        return view('index');        
    }

    public function userLogin(Request $request){
        // echo 'ddfdfs';
        // die;
        if (isset($_POST["login"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $result = LoginModel::where("username", "=" ,$username)->where("password","=",$password)->get();
            if ($result != null && count($result)>0) {
                $request->session()->put('loggedin', true);
                $request->session()->put('username', $username);
        
                session_start();
                $_SESSION["loggedin"]=true;
                $_SESSION["username"]=$username;
                return redirect('/home');
                }else{
                    return back()->with('fail','Invalid credentials');
                    };
                }
            }
    public function logOut(Request $request){
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');   
    }

    public function goToHome(Request $request){
        if ($request->session()->has('loggedin') && $request->session()->get('loggedin')) {
            return view('home');
        }
        else{
                return redirect("/login")->with('fail','You must log in first!');
        }
                
    }

}
