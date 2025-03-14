<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /** 
     * @Author: agus suartawan 
     * @Date: 2024-06-11 09:57:23 
     * @Desc:  Load landing/home view
     */
    public function index(Request $request) : View {
        $packages = Package::all();
        return view("landing.home", compact("packages"));
    }

    /** 
     * @Author: agus suartawan 
     * @Date: 2024-06-11 11:30:55 
     * @Desc:  Load landing/about view
     */
    public function about() : View {
        return view("landing.about");
    }

    /** 
     * @Author: agus suartawan 
     * @Date: 2024-06-11 11:30:55 
     * @Desc:  Load landing/services view
     */
    public function services() : View {
        return view("landing.service");
    }

    /** 
     * @Author: agus suartawan 
     * @Date: 2024-06-11 11:30:55 
     * @Desc:  Load landing/product view
     */
    public function products() : View {
        $packages = Package::all();
        return view("landing.product", compact("packages"));
    }

    /** 
     * @Author: agus suartawan 
     * @Date: 2024-06-11 11:30:55 
     * @Desc:  Load landing/teams view
     */
    public function teams() : View {
        return view("landing.team");
    }
}
