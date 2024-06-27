<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Mail\SendOTPMail;
use App\Mail\mymail;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class Chatapp extends Component
{
    public $loginpage,$registerpage,$emailfindpage,$emailotppage,$homepage=false;
    public $name,$email,$password,$password_confirmation,$otp;
    public function render()
    {
       
        return view('livewire.chatapp');
    }
   
    public function mount(){
        if(Auth::check()){
            $this->homepage=true;
            $this->loginpage=false;
            $this->registerpage=false;
            $this->emailfindpage=false;
            $this->emailotppage=false;

        }
        else{
            $this->loginpage=true;
        }
        
    }
    public function registerpageshow(){
        $this->loginpage = false;
        $this->registerpage = true;
        
    }
   
    public function emailfindpageshow(){
        $this->loginpage = false;
        $this->registerpage = false;
        $this->emailfindpage = true;
    }
    public function register(){
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);
        $user = new User();
        $otp = mt_rand(100000, 999999);
        $user->temp_otp = $otp;
        $user->name = $this->name;
        $user->email = $this->email;
        $this->loginpage = false;
        $this->registerpage = false;
        $this->emailotppage = true;
        $user->password = Hash::make($this->password);
        $user->save();
      
        $this->name='';
    
        $this->password='';
        Mail::to($this->email)->send(new SendOTPMail($otp));
        

    }

    public function verify(){
       
        $user = User::where('email',$this->email)->first();
        if($user->temp_otp == $this->otp){
           
            $user->email_verified_at = Carbon::now('Asia/Colombo');
            $user->temp_otp = null;
            $user->status = "active";
            $user->active_status = "online";
            $user->save();
            Auth::login($user);
            $this->emailotppage = false;
            $this->loginpage = false;
            $this->registerpage = false;
            $this->emailfindpage = false;
            $this->homepage=true;
            $this->email='';
            $this->otp='';
        }
        else{
            $this->emailotppage = true;
            $this->loginpage = false;
     
            $this->otp='';
        }
    }

    public function logout(){
        Auth::logout();
        $this->loginpage = true;
        $this->registerpage = false;
        $this->emailfindpage = false;
        $this->emailotppage = false;
        $this->homepage=false;
    }
    public function login(){
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(Auth::attempt(['email' => $this->email, 'password' => $this->password])){
            $user = Auth::user();
            $user->active_status = "online";
            $user->save();
            $this->loginpage = false;
            $this->registerpage = false;
            $this->emailfindpage = false;
            $this->emailotppage = false;
            $this->homepage=true;
            $this->email='';
            $this->password='';
        }
        else{
            $this->loginpage = true;
            $this->registerpage = false;
            $this->emailfindpage = false;
            $this->emailotppage = false;
            $this->homepage=false;
            $this->email='';
            $this->password='';
        }
    }
}
