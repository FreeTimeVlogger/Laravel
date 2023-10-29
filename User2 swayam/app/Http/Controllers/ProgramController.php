<?php

namespace App\Http\Controllers;

use App\Models\addprogram;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    //
    public function addprogram(Request $request)
    {
        $validatedData = $request->validate([
            // product Validation
            // 'id' => 'required:unique:products',
            'program_name' => 'required',
            'program_topic' => 'required|',
            'file' => 'required|mimes:jpeg,png,jpg,gif,webp,avif',
        ]);
        // dd($request->all());
        $imageName = time() . '.' . $request->file->extension();
        $request->file->move(public_path('programs_image'), $imageName);

        $programs = new addprogram();
        $programs->Image = $imageName;
        $programs->program_name = $request->program_name;
        $programs->program_topic = $request->program_topic;

        $programs->save();
        return back()->withsuccess('Program added successfully!!');
    }
    public function fetch_store(){
        $aahan=addprogram::all();
        return view('Admin/launch',compact('aahan'));
       }

}