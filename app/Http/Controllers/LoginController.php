<?php
namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\RedirectResponse;
use DB;
use Session;
use App\FMSUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
class LoginController extends Controller
{
	public function getHomepage(){
		try {
		    DB::connection()->getPdo();
		} catch (\Exception $e) {
		    die("Could not connect to the database.  Please check your configuration.");
		}
		return view('login');
	}
	public function login(){
	 	$inputs = array(
    	 		"username" => Input::get('email'),
    	 		"password" => Input::get('password')
    	 		);
    	 	if(($user = FMSUsers::where('Username', '=',$inputs['username'])->first())&&(Hash::check($inputs['password'], $user->Password))){
    	 		 $role = DB::table('fms_users')->where('Username', $inputs['username'])->value('UserType');
                 $userDesignation = DB::table('fms_users')->where('Username', $inputs['username'])->value('Designation');
                 $userlevel = DB::table('fms_users')->where('Username', $inputs['username'])->value('Userlevel');
                 $loggedusername = DB::table('fms_users')->where('Username', $inputs['username'])->value('Username');
                 $dbfname = DB::table('fms_users')->where('Username', $inputs['username'])->value('FName');
                 $dblname = DB::table('fms_users')->where('Username', $inputs['username'])->value('LName');
                 $dbname = $dbfname.' '.$dblname;
    	 		 	if($role=='Admin'){
                        Session::put('fullname', $dbname);
                        Session::put('username', $loggedusername);
                        Session::put('userDesignation', $userDesignation);
                         Session::put('level', $userlevel);
                       return response()->json(['redirect'=> 'dashboard']);
                    }else if($role=='Accountant'){
                        Session::put('fullname', $dbname);
                        Session::put('username', $loggedusername);
                        Session::put('userDesignation', $userDesignation);
                        Session::put('level', $userlevel);
                        return response()->json(['redirect'=> 'accountant']);
                    }else if($role=='Secretary'){
                        Session::put('fullname', $dbname);
                        Session::put('username', $loggedusername);
                        Session::put('userDesignation', $userDesignation);
                        Session::put('level', $userlevel);
                        return response()->json(['redirect'=> 'secretary']);
                    }
    	 	}else{
    	 		return response()->json(['error'=> 'Wrong Credentials Entered!'],500);
    	 	}    	 	
    }
    public function getLogout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }

}