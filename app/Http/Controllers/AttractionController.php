<?php

namespace App\Http\Controllers;

use App\Attraction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class AttractionController extends Controller
{
  public function create (Request $request) {
    Attraction::create($request->all());
    return Response::json(['created' => true]);
  }

  public function retrieveAll () {
    $attractions = Attraction::all();
    return Response::json($attractions);
  }

  public function retrieve($id) {
    $attraction = Attraction::find($id);
    return Response::json($attraction);
  }

  public function update(Request $request, $id) {
    $attraction = Attraction::find($id);
    $attraction->update($request->all());
    return Response::json(['updated' => true]);
  }

  public function destroy($id) {
    $attraction = Attraction::find($id);
    $attraction->delete();
    return Response::json(['deleted' => true]);
  }
}
