<?php

namespace App\Http\Controllers\API;

use App\Hairstyles;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class HairstylesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hairstyle= Hairstyles::with('category')->get();
        $jsonArray = [];
        foreach($hairstyle as $hs){
            $jsonArray[] = [
                "hairstyleId"=>$hs->hairstyle_id,
                "categoryId"=>$hs->category_id,
                "hairstyleName"=>$hs->name,
                "categoryName"=>$hs->category->name,
                "image"=>url('/uploads/hairstyles/'.$hs->image),
                "hairsyleDescription"=>$hs->description,
                "categoryDescription"=>$hs->category->description,
				"xPoint" => $hs->Xpoint,
				"yPoint" => $hs->Ypoint,

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
