<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('Admin.services', compact('services'));
    }

    public function create()
    {
        return view('Admin.new_service');
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_name' => 'required|string|max:255',
            'service_description' => 'required|string',
            'service_topic' => 'required|string|max:255',
            'service_image' => 'nullable|image|max:2048',
            'service_icon' => 'nullable|image|max:2048',
            'price_range' => 'required|string',
        ]);

        $serviceImagePath = $request->hasFile('service_image') ? $request->file('service_image')->store('service_images', 'public') : null;
        $serviceIconPath = $request->hasFile('service_icon') ? $request->file('service_icon')->store('service_icons', 'public') : null;

        Service::create([
            'service_name' => $request->service_name,
            'service_description' => $request->service_description,
            'service_topic' => $request->service_topic,
            'price_range' => $request->price_range,
            'service_image' => $serviceImagePath,
            'service_icon' => $serviceIconPath,
        ]);

        return redirect()->route('admin.services')->with('success', 'Service added successfully!');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('Admin.service_edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $request->validate([
            'service_name' => 'required|string|max:255',
            'service_description' => 'required|string',
            'service_topic' => 'required|string|max:255',
            'service_image' => 'nullable|image|max:2048',
            'service_icon' => 'nullable|image|max:2048',
            'price_range' => 'required|string',
        ]);

        $serviceImagePath = $service->service_image;
        $serviceIconPath = $service->service_icon;

        if (!File::exists(public_path('images/service_images'))) {
            File::makeDirectory(public_path('images/service_images'), 0755, true);
        }

        if (!File::exists(public_path('images/service_icons'))) {
            File::makeDirectory(public_path('images/service_icons'), 0755, true);
        }

        if ($request->hasFile('service_image')) {
            if ($serviceImagePath && File::exists(public_path($serviceImagePath))) {
                File::delete(public_path($serviceImagePath));
            }

            $imageFile = $request->file('service_image');
            $imageName = time() . '-' . Str::random(10) . '.' . $imageFile->getClientOriginalExtension();
            $imageFile->move(public_path('images/service_images'), $imageName);

            $serviceImagePath = 'images/service_images/' . $imageName;
        }

        if ($request->hasFile('service_icon')) {
            if ($serviceIconPath && File::exists(public_path($serviceIconPath))) {
                File::delete(public_path($serviceIconPath));
            }

            $iconFile = $request->file('service_icon');
            $iconName = time() . '-' . Str::random(10) . '.' . $iconFile->getClientOriginalExtension();
            $iconFile->move(public_path('images/service_icons'), $iconName);

            $serviceIconPath = 'images/service_icons/' . $iconName;
        }

        $service->update([
            'service_name' => $request->service_name,
            'service_description' => $request->service_description,
            'service_topic' => $request->service_topic,
            'price_range' => $request->price_range,
            'service_image' => $serviceImagePath,
            'service_icon' => $serviceIconPath,
        ]);

        return redirect()->route('admin.services')->with('success', 'Service updated successfully!');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        if ($service->service_image) {
            Storage::disk('public')->delete($service->service_image);
        }

        if ($service->service_icon) {
            Storage::disk('public')->delete($service->service_icon);
        }

        $service->delete();

        return redirect()->route('admin.services')->with('success', 'Service deleted successfully!');
    }
}
