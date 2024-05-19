<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\View\View;

use App\Models\pembelian;

class HomeController extends Controller
{
    public function index(): View
    {
        //get posts
        $pembelians = Pembelian::latest()->paginate(8);

        //render view with posts
        return view('pembelians.home', compact('pembelians'));
    }
    public function show(string $id): View
    {
        //get post by ID
        $pembelian = Pembelian::findOrFail($id);

        //render view with post
        return view('home.show', compact('pembelian'));
    }
}
