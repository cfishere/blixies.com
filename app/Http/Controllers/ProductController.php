<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{    

    /**
	 * 
	 */
    public function index()
    {
    	//show view of resource list
    	$products = Product::latest()->get();

    	return view('products.index' , ['products' => $products]);
    }

	/**
	  * Show the view for specified resource.
	 *
	 * @param \App\Models\Project
	 * @return Illuminate\Http\Response
	 */
    public function show(Project $project)
    {
    	//show view to show a resource
    }	

	/**
	 * 
	 */
    public function create()
    {
    	//show view to create a resource
    }
    
	/**
	 * Show the form for editing the speicified resource.
	 *
	 * @param \App\Models\Project
	 * @return Illuminate\Http\Response
	 */
    public function edit(Project $project)
    {
    	//show view to edit a resource

    }

    /**
     * 
     */    
    public function save()
    {
    	//endpoint to persist new resource
    }

    /**
     * Update the specified resource in storage
     * 
     * @param Illuminate\Http\Request $request
     * @param \App\Models\Project $project
     * @return Illuminate\Http\Response $response
     */    
    public function update(Request $request, Project $project)
    {
    	//endpoint to persist edited resource
    }

    /**
     * 
     */    
    public function destroy()
    {
    	//endpoint to remove resource from storage
    }
}
