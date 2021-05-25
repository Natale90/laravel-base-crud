<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ospite;

class OspitiController extends Controller
{
    public function home(){

        $ospiti = Ospite::all();

        return view('pages.home', compact('ospiti'));
    }

    public function details($id){

        $ospite = Ospite::FindorFail($id);
        return view('pages.ospite', compact('ospite'));
    }

    public function create(){

        return view('pages.create');
    }

    public function store(Request $request){

        $validate = $request -> validate([

            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'date_of_birth' => 'required|date',
            'document_type' => 'required|max:1024',
            'document_number' => 'required|max:1024'
        ]);

        dd($validate);
        $ospite = Ospite::create($validate);

        return redirect() -> route('details', $ospite -> id);
    }
}
