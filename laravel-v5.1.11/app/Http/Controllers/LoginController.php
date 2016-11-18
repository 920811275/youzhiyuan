<?php
namespace App\Http\Controllers;
use App\Http\Controllers;
use DB;
use Request;
use Session;
use Paginator;
use Input;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
}




?>