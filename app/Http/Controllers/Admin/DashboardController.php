<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(){
        // echo('Khởi động dashboard');
        // return 'Khởi động dashboard';
    }
    public function index(){
        return '<h2>Wellcome</h2>';
    }
}
