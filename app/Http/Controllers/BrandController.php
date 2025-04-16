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
            'country_code' => 'nullable|string|size:2',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Create a new brand
        $brand = Brand::create([
            'brand_name' => $request->brand_name,
            'brand_image' => $request->brand_image,
            'rating' => $request->rating,
            'country_code' => $request->country_code
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


    public function destroy($id)
    {
        $brand = Brand::find($id);

        if (!$brand) {
            return response()->json(['message' => 'Brand not found'], 404);
        }

        $brand->delete();

        return response()->json(['message' => 'Brand deleted successfully'], 200);
    }

    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);

        if (!$brand) {
            return response()->json(['message' => 'Brand not found'], 404);
        }

        // Validate incoming data
        $validator = Validator::make($request->all(), [
            'brand_name' => 'nullable|unique:brands,brand_name,' . $id . ',brand_id',
            'brand_image' => 'nullable|url',
            'rating' => 'nullable|integer|between:1,5',
            'country_code' => 'nullable|string|size:2',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Update only the fields that were provided in the request
        if ($request->has('brand_name')) {
            $brand->brand_name = $request->brand_name;
        }
        if ($request->has('brand_image')) {
            $brand->brand_image = $request->brand_image;
        }
        if ($request->has('rating')) {
            $brand->rating = $request->rating;
        }
        if($request->has('country_code')){
            $brand->country_code = $request->country_code;
        }

        $brand->save();

        return response()->json($brand, 200);
    }

    public function getToplist(Request $request)
    {
        $cfIpCountry = $request->header('CF-IPCountry');

        if(!$cfIpCountry) {
            $defaultTopRatedBrands = Brand::orderBy('rating', 'desc')->take(10)->get();
            return response()->json($defaultTopRatedBrands, 200);
        }

        $topRatedBrands = Brand::where('country_code', $cfIpCountry)
            ->orderBy('rating', 'desc')
            ->take(10)
            ->get();

        return response()->json($topRatedBrands, 200);
    }
}
