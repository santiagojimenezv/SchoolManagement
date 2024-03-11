<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Setting;
use App\Models\User;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /* public function __construct()
    {
        $this->middleware('auth');
    } */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $settings = Setting::pluck('value', 'key');
        $teachers = User::where('role_id', '4')->get();
        $staff = User::whereNotIn('role_id', ['4', '2'] )->get();

        $today = Carbon::now()->format('Y-m-d');
        $schedule = Schedule::where('date', '>=', $today)->orderBy('date', 'asc')->get(); 
        /* $schedule = Schedule::orderBy('date', 'asc')->get();   */
        
        $posts = Post::orderBy('created_at', 'desc')->take(3)->get();
    
        return view('layouts.main', compact('settings', 'teachers', 'staff', 'schedule', 'posts'));
    }

    public function login()
    {
        $settings = Setting::pluck('value', 'key');

        return view('layouts.admin.main', compact('settings'));
    }
}
