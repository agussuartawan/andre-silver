<?php

namespace App\Http\Controllers;
use App\Models\Package;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class PackageController extends Controller
{
    
    public function edit(Package $package) : View {
        return view("dashboard.package.edit", compact("package"));
    }

    public function create() : View {
        return view("dashboard.package.create");
    }

    public function update(Request $request, Package $package): RedirectResponse {
        $request->validate([
            "name"=> "required|string|max:255",
            "min_price" => "required",
            "description" => "required",
            "image" => "mimes:jpg,jpeg,png,gif|max:2048"
        ]);

        $image = $request->file("image");
        if($image) {
            if ($package->image_url) {
                Storage::disk('public')->delete('images/' . $package->image_url);
            }

            $filename = time()."-".$image->getClientOriginalName();
            $image->storeAs("images", $filename, "public");
            $request->merge(['image_url' => $filename]);
        }
        $package->update($request->all());

        return redirect()->route("dashboard")->with("success", "Data berhasil diperbarui");
    }

    public function store(Request $request): RedirectResponse {
        $request->validate([
            "name"=> "required|string|max:255",
            "min_price" => "required",
            "description" => "required",
            "image" => "mimes:jpg,jpeg,png,gif|max:2048"
        ]);

        $image = $request->file("image");
        if($image) {
            $filename = time()."-".$image->getClientOriginalName();
            $image->storeAs("images", $filename, "public");
            $request->merge(['image_url' => $filename]);
        }
        Package::create($request->all());

        return redirect()->route("dashboard")->with("success", "Data berhasil disimpan");
    }

    public function delete(Package $package) : RedirectResponse {
        $package->delete();
        return redirect()->route("dashboard")->with("success","Data berhasil dihapus");
    }

}
