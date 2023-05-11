<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $image = File::get();
        return view('view_image',compact('image'));
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ImageUpload');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'filenames'=>'required|mimes:jpeg,png,jpg,jfif,gif',
            'filenames.*'=>'image'
        ]);

        $files=[];
        if($request->hasFile('filenames')){

            foreach($request->file('filenames') as $file)
            {
                $filename = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path('files'),$filename);
                $files[] = $filename;
            }   
        }

        $file = new File();
        $file->filenames=$files;
        $file->save();
        return redirect('/image');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $image = File::find($id);   
        return view('updateimage',compact('image'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $files=[];
        if($request->hasFile('filenames')){

            foreach($request->file('filenames') as $file)
            {
                $filename = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path('files'),$filename);
                $files[] = $filename;
            }   
        }

        $file = File::find($id);
        $file->filenames=$files;
        $file->update();
        return redirect('/image');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $image = File::find($id);
        $image->delete();
        return redirect('/image'); 
    }
}
