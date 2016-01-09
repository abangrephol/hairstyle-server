<?php

namespace App\Http\Controllers\API;

use App\Frames;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FramesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $frames= Frames::all();
        $jsonArray = [];
        foreach ($frames as $fs){
        $jsonArray[]= [
            "frameId" => $fs->frame_id,
            "frameName" => $fs->name,
            "imageLayout" => url('/uploads/frames/'.$fs->image_layout),
			"imageBackground" => url('/uploads/frames/'.$fs->image_background),
			"imageForeground" => url('/uploads/frames/'.$fs->image_foreground),
			"imagePreview" => url('/uploads/frames/'.$fs->image_preview),
            "frameDescription"=>$fs->description,
        ];
    }
        return response()->json($jsonArray);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
