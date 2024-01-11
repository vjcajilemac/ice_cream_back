<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Resources\IceCreamCollection;
use App\Http\Resources\IceCreamResource;
use App\Models\IceCreamModel;

class IceCreamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $icecreams = IceCreamModel::all();
        //
        return response([
			'success' => true,
			'message' => __('Datos encontrados'),
			'data'    => new IceCreamCollection($icecreams),
		]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): Response
    {
        
        //$icecreams = IceCreamModel::all();
        $new_icecream = new IceCreamModel();
        $new_icecream->name = $request->name;
        $new_icecream->price= $request->price;
        $new_icecream->flavours_max= $request->flavours_max;
        $new_icecream->description= $request->description;
        //dd($new_icecream);
        $new_icecream->save();

        //
        return response([
			'success' => true,
			'message' => __('Registrado correctamente'),
			'data'    => new IceCreamResource($new_icecream),
		]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
