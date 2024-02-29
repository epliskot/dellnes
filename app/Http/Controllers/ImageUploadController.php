<?php

  

namespace App\Http\Controllers;
use App\Models\Image;

  

use Illuminate\Http\Request;

  

class ImageUploadController extends Controller

{

     /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function imageUpload()

    {

        return view('imageUpload');

    }

    

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function imageUploadPost(Request $request)

    {

        $request->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description',
            'uploaded_by',
            'file_path'
           
            

        ]);
        Image::create($request->all());

    

        $imageName = time().'.'.$request->image->extension();  
        
     

        $request->image->move(public_path('images'), $imageName);

  

        /* Store $imageName name in DATABASE from HERE */

    

        return back()

            ->with('success','Takk for bildet. Nå er det lastet opp. Kan ta litt tid før jeg får lagt det ut til å vises. Men sjekk igjen om ca. én dag.')

            ->with('image', $imageName); 
          

    }

}