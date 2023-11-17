<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Linux;
use Illuminate\Support\Facades\DB;

class LinuxController extends Controller
{
    public function createForm()
    {
        return view('addlinux');
    }

    public function index()
    {
        return view('welcome', ['list' => DB::table('lists')->get()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'masv' => 'required|string|max:10',
        ]);

        DB::table('lists')->insert([
            'name' => $request->name,
            'masv' => $request->masv
        ]);

        return redirect()->route('home')->with('success', 'Data added successfully!');
    }

    public function delete(Request $request) {
        DB::table('lists')->where('id', $request->id)->delete();
        return redirect()->route('home');
    }
}
