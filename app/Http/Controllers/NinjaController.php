<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dojo;
use App\Models\Ninja;
use Illuminate\Auth\Events\Validated;

class NinjaController extends Controller
{
    public function index() {
      // route --> /ninjas/
      // fetch all records & pass into the index view

      // $ninjas = Ninja::all();
      $partner = Ninja::with('dojo')->orderBy('created_at', 'desc')->paginate(10);

      return view('partner1', ['partner' => $partner]);
    }

    public function show(Ninja $partner) {

      $partner->load('dojo');

      return view('more', ['partner' => $partner]);
    }

    public function create() {
      $dojos = dojo::all();
      return view('create', ['dojos' => $dojos]);
    }

    public function store(Request $request) {
      // --> /ninjas/ (POST)
      $validated = $request->validate([
        'name' =>'required|string|max:255',
        'skill' => 'required|integer|min:0|max:100',
        'bio' => 'required|string|min:20|max:1000',
        'dojo_id' => 'required|exists:dojos,id',
      ]);

      Ninja::create($validated);

      return redirect()->route('partner1')->with('success', 'Ninja Created');
    }

    public function destroy(Ninja $partner) {
      // --> /ninjas/{id} (DELETE)
      $partner->delete();

      return redirect()->route('partner1')->with('success', 'Ninja Deleted!');
    }

    // edit() and update() for edit view and update requests
    // we won't be using these routes
}