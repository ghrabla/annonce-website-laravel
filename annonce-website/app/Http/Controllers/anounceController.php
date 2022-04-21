<?php

namespace App\Http\Controllers;

use App\Models\anounce;
use Illuminate\Http\Request;

class anounceController extends Controller
{
    public function create()
    {
        return view('anounces.create');
    }

    public function store(Request $request)
    {
        $anounce = new anounce;
        $anounce->user_id = auth()->user()->id;
        $anounce->type = $request->input('type');
        $anounce->photo = $request->input('photo');
        $anounce->description = $request->input('description');
        // $anounce->section = $request->input('section');
        $anounce->save();
        return redirect()->back()->with('status','anounce Added Successfully');
    }

    public function index()
    {
        $anounce = anounce::join('users', 'users.id', '=', 'anounces.user_id')
        -> orderBy('created_at', 'desc')
        ->get(['anounces.*', 'users.name']);
        $data = json_decode($anounce);
        return view('layouts/app',["data"=>$data]);

    }
    // public function index()
    // {
    //     $anounce = anounce::all();
    //     return view('anounce.index', compact('anounce'));
    // }

    public function edit($id)
    {
        $anounce = anounce::find($id);
        $data = json_decode($anounce);
        return view('anounces.edit', ["data"=>$data]);
    }

    public function update(Request $request, $id)
    {
        $anounce = anounce::find($id);
        $anounce->user_id = auth()->user()->id;
        $anounce->type = $request->input('type');
        $anounce->photo = $request->input('photo');
        $anounce->description = $request->input('description');
        $anounce->update();
        // dd($anounce);
        return redirect()->back()->with('status','anounce Updated Successfully');
    }

    public function destroy($id)
    {
        $anounce = anounce::find($id);
        $anounce->delete();
        return redirect()->back()->with('status','anounce Deleted Successfully');
    }

    // public function search(Request $request){
       
    //     $search = $request->input('demande');
    //     $anounce = anounce::query()
    //                 ->where('type', 'LIKE', "%{$search}%")
    //                 // ->orWhere('body', 'LIKE', "%{$search}%")
    //                 ->get();
    //                 $data = json_decode($anounce);
    //                 return view('layouts/app',["data"=>$data]);
    // }



}
