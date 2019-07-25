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
        'price' => 'required | integer | max:5',
        'description' => 'required | max:30',
        'poster' => 'required | image',
        'colors' => 'required',
   			'sizes' => 'required ',

   		], [
   			// input_name.rule => message
   			'name.required' => 'El campo nombre es obligatorio',
        'name.max' => 'El campo nombre debe contener máximo 30 carácteres',
        'price.required' => 'El campo precio es obligatorio',
        'price.integer' => 'El campo precio debe ser un número',
        'price.max' => 'El campo precio debe contener máximo 5 carácteres',
        'description.required' => 'La descripción es obligatoria',
        'description.max' => 'La descripción debe contener máximo 30 carácteres',
        'poster.required' => 'La imagen es obligatoria',
        'poster.image' => 'La imagen no es un formato válido',
        'colors.required' => 'Debes seleccionar al menos un color',
        'sizes.required' => 'Debes seleccionar al menos un talle',

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
      $theProduct = Product::find($id);

      return view('front.products.show', compact('theProduct'));
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
