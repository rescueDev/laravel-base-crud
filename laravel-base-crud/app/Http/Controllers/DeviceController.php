<?php

namespace App\Http\Controllers;

use App\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index()
    {
        $devices = Device::all();
        return view('pages.devices', compact('devices'));
    }
    public function show($id)
    {
        $device = Device::findOrFail($id);
        return view('pages.device', compact('device'));
    }
}
