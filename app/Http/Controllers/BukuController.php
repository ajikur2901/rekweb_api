<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->all();
        $buku = Buku::create($data);

        return response()->json($buku);
    }
}
