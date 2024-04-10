<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class crudController extends Controller
{
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;

        if ($request->hasfile('img')) {
            $img = $request->file('img');
            $image_name = time() . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('upload'), $image_name);
            $img_url = asset('upload/' . $image_name);
        }

        DB::table('students')->insert([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'img' => $img_url
        ]);
        return redirect()->route('index');
    }
    public function index()
    {
        $data = DB::table('students')->get();
        return view('index', ['data' => $data]);
    }
    public function show($id)
    {
        // $id = $request->id;
        $data = DB::table('students')->find($id);
        return view('show', ['data' => $data]);
    }

    public function edit($id)
    {
        $data = DB::table('students')->find($id);
        return view('edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        DB::table('students')->where('id', '=', $id)->update([
            'name' => $name,
            'email' => $email,
            'phone' => $phone
        ]);
        return redirect()->route('index');
    }
    public function delete($id)
    {
        // $id = $request->id;
        DB::table('students')->where('id', '=', $id)->delete();
        return redirect()->route('index');
    }
}
