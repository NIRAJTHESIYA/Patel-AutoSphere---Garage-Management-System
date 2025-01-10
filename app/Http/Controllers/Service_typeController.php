<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class Service_typeController extends Controller
{
    public function index(){
        $services = Service::all();
        // $service = Service::find($id);
        return view('services.service_type', compact('services'));
    }

    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('services.service_type', compact('service'));
    }


}
