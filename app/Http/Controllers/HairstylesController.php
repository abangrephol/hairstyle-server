<?php namespace App\Http\Controllers;

use App\Categories;
use App\Hairstyles;
use Auth;
use Illuminate\Http\Request;

class HairstylesController extends Controller
{

    /**
     * Show the profile for the given user.
     *
     * @param  int $id
     * @return Response
     */

    public function index()
    {
        $hairstyles = Hairstyles::all();
//        dd($hairstyles);
//        exit;
        return view('hairstyles/hairstyles', compact('hairstyles'));
    }

    public function add()
    {
        $category = Categories::all();
        return view('hairstyles/add',compact('category'));
    }

    /**
     * @param Request $request
     */
    public function insert(request $request)
    {
        $request->file('image');
        $destinationPath = 'uploads/hairstyles'; // upload path
        $fileName = $request->file('image')->getClientOriginalName(); // renameing image
        $request->file('image')->move($destinationPath, $fileName); // uploading file to given path

        $hairstyles = new hairstyles;
        $hairstyles->name = $request->input('name');
        $hairstyles->category_id = $request->input('category');
        $hairstyles->description = $request->input('description');
        $hairstyles->image = $fileName;
        $hairstyles->save();
        return redirect()->intended('hairstyles');
    }

    public function edit($id)
    {
        $hairstyles = Hairstyles::find($id);
        $category = Categories::all();
        return view('hairstyles/edit', compact('hairstyles','category'));
    }

    public function update($id, request $request)
    {
        $hairstyles = hairstyles::find($id);

        $image = $hairstyles->image;

        $file = $request->file('image');
        if (!empty($file)) {
            $destinationPath = 'uploads/hairstyles'; // upload path
            $fileName = $request->file('image')->getClientOriginalName(); // renameing image
            $request->file('image')->move($destinationPath, $fileName); // uploading file to given path
        } else {
            $fileName = $image;
        }


        $hairstyles->name = $request->input('name');
        $hairstyles->category_id = $request->input('category');
        $hairstyles->description = $request->input('description');
        $hairstyles->image = $fileName;
        $hairstyles->save();
        return redirect()->intended('hairstyles');
    }

    public function delete($id)
    {
        $hairstyles = Hairstyles::find($id);
        $hairstyles->delete();
        return redirect()->intended('hairstyles');
    }
}
