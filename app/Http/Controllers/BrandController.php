<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Offer;


class BrandController extends Controller
{
    public function index()
    {

        $brands = Brand::all();

        return view('brand.index', ['brands' => $brands]);
    }

}
