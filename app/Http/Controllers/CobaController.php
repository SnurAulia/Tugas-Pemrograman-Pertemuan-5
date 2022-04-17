<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\friends;


class CobaController extends Controller
{
    // public function index()
    // {
    //     return 'text berhasil';
    // }
    // public function urutan ($ke)
    // {
    //     $friends = friends::paginate(2);
    //     return view('friend', compact('friends'));
    // }
    // public function coba($ke)
    // {
    //     return view('coba',['ke' => $ke]);
    // }

    public function index()
    {
        $friends = friends::paginate(2);
        return view('index', compact('friends'));
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        // Validate the request...
 
        $friends = new Friends;
 
        $friends->nama = $request->nama;
        $friends->no_tlp = $request->no_tlp;
        $friends->alamat = $request->alamat;
 
        $friends->save();
    }
    
}
