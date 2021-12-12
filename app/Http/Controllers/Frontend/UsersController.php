<?php

namespace App\Http\Controllers\Frontend;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
use Image;
use File;


class UsersController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $std = User::find($id);

        $std->name       = $request->name;
        $std->phone      = $request->phone;
        $std->address    = $request->address;
        $std->city       = $request->city;
        $std->country    = $request->country;
        $std->zipcode    = $request->zipcode;

        if ($request->image) 
        {
            if (File::exists('backend/img/user/' . $std->image)){
                File::delete('backend/img/user/' . $std->image);  
            }

            $image = $request->file('image');
            $img = rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/img/user/' . $img);
            Image::make($image)->save($location);
            $std->image = $img;
        }
        $std->save();
        return redirect()->route('stdDashboard');
    }

}
