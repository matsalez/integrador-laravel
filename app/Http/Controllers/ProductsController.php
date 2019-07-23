<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::all();

      return view('front/products/index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
  		// Traer todo los géneros de la DB
  		$colors = \App\Color::orderBy('name')->get();
      $sizes = \App\Size::orderBy('name')->get();
      $categories = \App\Category::orderBy('name')->get();

  		return view('front.products.create', compact('colors','sizes','categories'));
  	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
   	{
      dd($request->all());
   		// 1. Validamos
   		$request->validate([
   			// input_name => rules,
   			'name' => 'required | max:30',
   			'description' => 'required | max:150',
   			'size' => 'required ',
   			'release_date' => 'required',
   			'length' => 'required | numeric',
   			'genre_id' => 'required',
   			'poster' => 'required | image'
   		], [
   			// input_name.rule => message
   			'title.required' => 'El campo título es obligatorio',
   			// 'rating.required' => 'El campo rating es obligatorio',
   			'required' => 'El campo :attribute es obligatorio',
   			'numeric' => 'El campo :attribute debe ser numérico',
   			'title.max' => 'El :attribute debe contener máximo 15 carácteres',
   			'rating.min' => 'El mínimo permitido es 0',
   			'rating.max' => 'El máximo permitido es 10'
   		]);
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
