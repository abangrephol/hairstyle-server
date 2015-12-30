<?php namespace App\Http\Controllers;

use App\ApiKeys;
use Auth;
use Illuminate\Http\Request;

class ClientsController extends Controller
{

    /**
     * Show the profile for the given user.
     *
     * @param  int $id
     * @return Response
     */

    public function index()
    {
        $apikeys = ApiKeys::all();		
        return view('clients/clients', compact('apikeys'));
    }

    public function add()
    {
        return view('clients/add');
    }

    /**
     * @param Request $request
     */
    public function insert(request $request)
    {
		
        $apikeys = new ApiKeys;
        $apikeys->imei = $request->input('imei');
        $apikeys->api = $this->generateAPI();
        $apikeys->save();
        return redirect()->intended('clients');
    }
	
	function generateAPI(){
		$unique = false;
		$api = "";
		while(!$unique){
			$api = str_random(20);
			$count = ApiKeys::where('api', '=', $api)->count();
			if($count == 0) $unique = true;
		}
		return $api;
		
	}
	
    public function edit($id)
    {
        $apikeys = ApiKeys::find($id);
        return view('clients/edit', compact('apikeys'));
    }

    public function update($id, request $request)
    {
        $apikeys = ApiKeys::find($id);

        $apikeys->imei = $request->input('imei');
        $apikeys->save();
        return redirect()->intended('clients');
    }

    public function delete($id)
    {
        $apikeys = ApiKeys::find($id);
        $apikeys->delete();
        return redirect()->intended('clients');
    }
}
