<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Session;


class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cvs= Cv::orderBy('created_at','DESC')->paginate(20);
        return view('data.alldata',compact('cvs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $validated = $request->validate([
            'name' => 'required|max:200',

            'email' => 'required',
            'address' => 'required',
            'mobile_number' => 'required',
            'social_url' => 'required',
            'post' => 'required',
            'image' => 'required|image',

        ]);



            $cv= Cv::create([
                'name' =>$request->name,
                'email' =>$request->email,
                'address' =>$request->address,
                'mobile_number' =>$request->mobile_number,
                'social_url' =>$request->social_url,
                'post' =>$request->post,


                'cvfile'=>'cvfile.jpg',
                'image'=>'image.jpg',

            ]);




        if ($request->has('image')) {
            $image= $request->image;
            $image_new_name = time().'.'. $image->getClientOriginalExtension();
            $image->move('storage/image/',$image_new_name);
            $cv->image = 'storage/image/'.$image_new_name;
            $cv->save();
    }
        if ($request->has('cvfile')) {
            $cvfile= $request->cvfile;
            $image_new_name = time().'.'. $cvfile->getClientOriginalExtension();
            $cvfile->move('storage/cv/',$image_new_name);
            $cv->cvfile = 'storage/cv/'.$image_new_name;
            $cv->save();
    }
        Session::flash('success', 'Your Application Submitted Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function show(Cv $cv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function edit(Cv $cv)
    {

        return view('edit.cv', compact('cv'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cv $cv)
    {





            $cv->name =$request->name;


            $cv->email = $request->email;
            $cv->address = $request->address;
            $cv->mobile_number = $request->mobile_number;
            $cv->social_url = $request->social_url;
            $cv->post = $request->post;




        if ($request->has('image')) {
            $image= $request->image;
            $image_new_name = time().'.'. $image->getClientOriginalExtension();
            $image->move('storage/cv/',$image_new_name);
            $cv->image = 'storage/cv/'.$image_new_name;

        }
        if ($request->has('cvfile')) {
            $image= $request->cvfile;
            $image_new_name = time().'.'. $image->getClientOriginalExtension();
            $image->move('storage/cv/',$image_new_name);
            $cv->image = 'storage/cv/'.$image_new_name;
            $cv->save();
    }

        $cv->save();

        Session::flash('success', 'Cv Updated Successfully');
        return redirect()->route('cv.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cv $cv)
    {
        if($cv){
            if (file_exists(public_path($cv->image))) {
                unlink(public_path($cv->image));
            }
            $cv->delete();
            Session::flash('success', 'Cv Deleted Successfully');

        }
        return redirect()->route('cv.index');
    }
}
