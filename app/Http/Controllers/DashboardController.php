<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index() : View {
        $packages = Package::all();

        return view("dashboard.index", compact("packages"));
    }
}
