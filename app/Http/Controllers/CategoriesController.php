<?php namespace App\Http\Controllers;

use App\Categories;
use Auth;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    /**
     * Show the profile for the given user.
     *
     * @param  int $id
     * @return Response
     */

    public function index()
    {
        $categories = Categories::all();
        return view('categories/categories', compact('categories'));
    }

    public function add()
    {
        return view('categories/add');
    }

    /**
     * @param Request $request
     */
    public function insert(request $request)
    {

        $categories = new Categories;
        $categories->name = $request->input('name');
        $categories->description = $request->input('description');
        $categories->save();
        return redirect()->intended('categories');
    }

    public function edit($id)
    {
        $categories = Categories::find($id);
        return view('categories/edit', compact('categories'));
    }

    public function update($id, request $request)
    {
        $categories = Categories::find($id);

        $categories->name = $request->input('name');
        $categories->description = $request->input('description');
        $categories->save();
        return redirect()->intended('categories');
    }

    public function delete($id)
    {
        $categories = Categories::find($id);
        $categories->delete();
        return redirect()->intended('categories');
    }
}
