<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProductController extends Controller 
{
    public function show($id)
    {
        
        $data = []; //to be sent to the view
        try{

            $product = Product::findOrFail($id);
            $listOfSizes = array("XS","S","M","L","XL");
            $data["title"] = $product->getName();
            $data["product"] = $product;
            $data["sizes"] = $listOfSizes;

            return view('product.show')->with("data",$data);

        }catch(ModelNotFoundException $e){
            
            return redirect()->route('home.index');
        
        }
        
    }
    
    public function create()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Create product";
        $data["products"] = Product::with("comments")->get();

        return view('product.create')->with("data",$data);
    }

    public function save(Request $request)
    {
        Product::validate($request);
        Product::create($request->only(["name","price"]));

        return back()->with('success','Item created successfully!');
    }

}
