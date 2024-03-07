<?php

  

namespace App\Http\Controllers;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
  

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
            'file_path',
            'name'
            
           
            

        ]);
       
    
        
        $imageName = time().'.'.$request->image->extension();

        //$imageName = time().'.'.$request->image->extension();
            

        $request->image->move(Storage::disk('local')->path('images'), $imageName);
             
                            
        $data= $request->all();
        $data['file_path'] = $imageName;
        Image::create($data);
       
      
      //$request->image->move(Storage::disk('local')->put('storage/app/images' . '/' . $imageName, $request->image));

        /* Store $imageName name in DATABASE from HERE */
        
      
        

        return back()

            
            ->with('success','Takk for bildet. Nå er det lastet opp. Det kan ta litt tid før jeg får lagt det ut til å vises. Jeg skal gi deg beskjed per e-post når bildet er klart for websiden.')

            ->with('image', $imageName);
            
       
          

    }

}