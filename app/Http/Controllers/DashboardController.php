<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index() : View {
        $packages = Package::all();
        $googleDriveApi = "https://script.google.com/macros/s/AKfycbzHCSYetUYwf5rH6i5wc9-Z-AwF2b9a5iJ-FjtvQFpagmpEcwk1BKKt-3fI4W5waaAo/exec";

        $googleDriveFilesResponse = Http::get($googleDriveApi);
        $googleDriveFiles = $googleDriveFilesResponse->json();

        return view("dashboard.index", compact("packages", "googleDriveFiles"));
    }
}
