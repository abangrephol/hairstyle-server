<?php namespace App\Http\Controllers;

use App\Frames;
use Auth;
use Illuminate\Http\Request;
use Validator;

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
        $requests = array(
			'name' => $request->get('name'),
			'description' => $request->get('description'),
			'image_layout' => $request->file('image_layout'),
			'image_background' => $request->file('image_background'),
			'image_foreground' => $request->file('image_foreground'),
			'image_preview' => $request->file('image_preview'),
		);
		$files = array(
			'image_layout' => $request->file('image_layout'),
			'image_background' => $request->file('image_background'),
			'image_foreground' => $request->file('image_foreground'),
			'image_preview' => $request->file('image_preview')
		);
        $rules = array(
			'name' => 'required',
			'image_layout' => 'required',
			'image_background' => 'required',
			'image_foreground' => 'required',
			'image_preview' => 'required',
		);
        $validator = Validator::make($requests, $rules);
        if ($validator->fails()) {
            // send back to the page with the input data and errors
            return Redirect::to('frame')->withInput()->withErrors($validator);
        }
        else {
			$filenames = array();
			foreach($files as $fieldname=>$file){
				// checking file is valid.
				if ($file->isValid()) {
					$destinationPath = 'uploads/frames'; // upload path
					$extension = $file->getClientOriginalExtension(); // getting image extension
					$fileName = rand(11111,99999).'.'.$extension; // renameing image
					//$fileName = $request->file('image')->getClientOriginalName(); // renameing image
					$file->move($destinationPath, $fileName); // uploading file to given path
					$filenames[$fieldname] = $fileName;					
				}
				else {
					// sending back with error message.
					Session::flash('error', 'uploaded file is not valid');
					return Redirect::to('frame');
				}
			}
			$frames = new Frames;
			$frames->name = $request->input('name');
			$frames->description = $request->input('description');
			$frames->image_layout = $filenames['image_layout'];
			$frames->image_background = $filenames['image_background'];
			$frames->image_foreground = $filenames['image_foreground'];
			$frames->image_preview = $filenames['image_preview'];
			$frames->save();
			return redirect()->intended('frames');
        
        }

        
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


        $requests = array(
			'name' => $request->get('name'),
			'description' => $request->get('description'),
			'image_layout' => $request->file('image_layout'),
			'image_background' => $request->file('image_background'),
			'image_foreground' => $request->file('image_foreground'),
			'image_preview' => $request->file('image_preview'),
		);
		$files = array(
			'image_layout' => $request->file('image_layout'),
			'image_background' => $request->file('image_background'),
			'image_foreground' => $request->file('image_foreground'),
			'image_preview' => $request->file('image_preview')
		);
        $rules = array(
			'name' => 'required',
		);
        $validator = Validator::make($requests, $rules);
        if ($validator->fails()) {
            // send back to the page with the input data and errors
            return Redirect::to('frame')->withInput()->withErrors($validator);
        }
        else {
			$filenames = array(
				'image_layout' => $frames->image_layout,
				'image_background' => $frames->image_background,
				'image_foreground' => $frames->image_foreground,
				'image_preview' => $frames->image_preview
			);
			foreach($files as $fieldname=>$file){
				if (!empty($file)) {
					// checking file is valid.
					if ($file->isValid()) {
						$destinationPath = 'uploads/frames'; // upload path
						$extension = $file->getClientOriginalExtension(); // getting image extension
						$fileName = rand(11111,99999).'.'.$extension; // renameing image
						//$fileName = $request->file('image')->getClientOriginalName(); // renameing image
						$file->move($destinationPath, $fileName); // uploading file to given path
						$filenames[$fieldname] = $fileName;					
					}
					else {
						// sending back with error message.
						Session::flash('error', 'uploaded file is not valid');
						return Redirect::to('frame');
					}
				}
				
			}			
			$frames->name = $request->input('name');
			$frames->description = $request->input('description');
			$frames->image_layout = $filenames['image_layout'];
			$frames->image_background = $filenames['image_background'];
			$frames->image_foreground = $filenames['image_foreground'];
			$frames->image_preview = $filenames['image_preview'];
			$frames->save();
			return redirect()->intended('frames');
        
        }
    }

    public function delete($id)
    {
        $frames = Frames::find($id);
        $frames->delete();
        return redirect()->intended('frames');
    }
}
