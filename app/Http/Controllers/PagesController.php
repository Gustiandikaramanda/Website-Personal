<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('home');
    }
    public function about() {
        return view('about');
    }
    public function services() {
        return view('services');
    }
    public function dashboard() {
        $adminData = array();
        if (session()->has('loginID')) {
            $adminData = User::where('id','=',session('loginID'))->first();
        }
        return view('dashboard', compact('adminData'));
    }
}
