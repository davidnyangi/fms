<?php
namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\RedirectResponse;
use DB;
use Session;
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
		return view('welcome');
	}

}