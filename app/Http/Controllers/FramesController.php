<?php namespace App\Http\Controllers;

use App\Frames;
use Auth;
use Illuminate\Http\Request;

class FramesController extends Controller
{

    /**
     * Show the profile for the given user.
     *
     * @param  int $id
     * @return Response
     */

    public function index()
    {
        $frames = Frames::all();
        return view('frames/frames', compact('frames'));
    }

    public function add()
    {
        return view('frames/add');
    }

    /**
     * @param Request $request
     */
    public function insert(request $request)
    {
        $file = array('image' => $request->file('image'));
        $rules = array('image' => 'required',);
//        $validator = Validator::make($file, $rules);
//        if ($validator->fails()) {
//            // send back to the page with the input data and errors
//            return Redirect::to('frame')->withInput()->withErrors($validator);
//        }
//        else {
        // checking file is valid.
//            if ($request->file('image')->isValid()) {
        $destinationPath = 'uploads/frames'; // upload path
//                $extension = $request->file('image')->getClientOriginalExtension(); // getting image extension
//                $fileName = rand(11111,99999).'.'.$extension; // renameing image
        $fileName = $request->file('image')->getClientOriginalName(); // renameing image
        $request->file('image')->move($destinationPath, $fileName); // uploading file to given path
        // sending back with message
//                Session::flash('success', 'Upload successfully');
//                return Redirect::to('upload');
//            }
//            else {
        // sending back with error message.
//                Session::flash('error', 'uploaded file is not valid');
//                return Redirect::to('frame');
//            }
//        }

        $frames = new Frames;
        $frames->name = $request->input('name');
        $frames->description = $request->input('description');
        $frames->image = $fileName;
        $frames->save();
        return redirect()->intended('frames');
    }

    public function edit($id)
    {
        $frames = Frames::find($id);
        return view('frames/edit', compact('frames'));
    }

    public function update($id, request $request)
    {
        $frames = Frames::find($id);

        $image = $frames->image;

        $file = $request->file('image');
        if (!empty($file)) {
            $destinationPath = 'uploads/frames'; // upload path
            $fileName = $request->file('image')->getClientOriginalName(); // renameing image
            $request->file('image')->move($destinationPath, $fileName); // uploading file to given path
        } else {
            $fileName = $image;
        }


        $frames->name = $request->input('name');
        $frames->description = $request->input('description');
        $frames->image = $fileName;
        $frames->save();
        return redirect()->intended('frames');
    }

    public function delete($id)
    {
        $frames = Frames::find($id);
        $frames->delete();
        return redirect()->intended('frames');
    }
}
