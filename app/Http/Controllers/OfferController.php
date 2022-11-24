<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Color;
use App\Models\Offer;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OfferController extends Controller
{
    public function show($id)
    {
        $brands = Brand::find($id);
        $colors = Color::all();
        $sizes = Size::all();
        if (!isset($brands)) {
            return view('error.error');
        }

        $offers = Offer::where('brand_id', $brands->id)
            ->get();

        if (isset($offers)) {
            return view('offer.show', compact('brands', 'offers', 'colors', 'sizes'));
        }

    }

    public function check(Request $request)
    {

        $colorQuery = DB::table('color')
            ->select('id')
            ->where('name', $request->input('color'))
            ->get();

        $color = json_decode( json_encode($colorQuery), true);

        $sizeQuery = DB::table('size')
            ->select('id')
            ->where('eu', $request->input('size'))
            ->first();

        $size = json_decode( json_encode($sizeQuery), true);

        $check = DB::table('offer')
            ->select('id', 'count')
            ->where('color_id', $color)
            ->where('size_id', $size)
            ->groupBy('id')
            ->get();

        return view('offer.check', ['check' => $check]);
    }

}
