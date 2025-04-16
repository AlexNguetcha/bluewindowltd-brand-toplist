<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'brand_name' => 'required|unique:brands,brand_name',
            'brand_image' => 'required|url',
            'rating' => 'required|integer|between:1,5',
        ]);

        if($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Create a new brand
        $brand = Brand::create([
            'brand_name' => $request->brand_name,
            'brand_image' => $request->brand_image,
            'rating' => $request->rating,
        ]);

        return response()->json($brand, 201);
    }

    public function index()
    {
        $brands = Brand::all();
        return response()->json($brands, 200);
    }

    public function show($id)
    {
        $brand = Brand::find($id);
        if (!$brand) {
            return response()->json(['message' => 'Brand not found'], 404);
        }
        return response()->json($brand, 200);
    }
}
