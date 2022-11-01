<?php
namespace App\Http\Controllers;

use App\Models\Nft;

class NftApiController extends Controller
{
    public function index()
    {
        return Nft::all();
    }

}
