<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plane;

class PlaneController extends Controller
{

    public function create()
    {

        $data = []; //to be sent to the view
        $data["title"] = "Create Plane";

        return view('plane.create')->with("data",$data);;
    }
    public function list()
    {
        $data = []; 
        $data["title"] = "List Planes";
        $data["planes"] = Plane::All();

        return view('plane.list')->with("data",$data);
    }

    public function save(Request $request)
    {
        $request["status"]= $request->has("status");

        Plane::validate($request);
        Plane::create($request->only(['name', 'status', 'price']));

        return back()->with('success','Item created successfully!');
    }

    public function statistics(){

        $data = []; 
        $data["title"] = "Statistics Planes";
        $data["planes"] = Plane::orderBy("status","desc")->get();
        $data["available"] = 0;
        $data["notAvailable"] = 0;

        foreach($data["planes"] as $key => $plane){
            if($plane->getStatus() == 1){
                $data["available"] = $data["available"] + $plane->getPrice();
            }else{
                $data["notAvailable"] = $data["notAvailable"] + $plane->getPrice();
            }
        }

        return view('plane.statistics')->with("data",$data);
    }
}