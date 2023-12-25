<?php

namespace App\Http\Controllers;

use App\Http\Resources\StokResource;
use App\Models\Stok;
use Illuminate\Http\Request;

class StokController extends Controller
{
    public function index() {
        $stok = Stok::all();

        return StokResource::collection($stok);
    }
}
