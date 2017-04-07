<?php

namespace App\Http\Controllers;

use App\Attraction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class AttractionController extends Controller
{
  public function create (Request $request) {//post new attraction record
    Attraction::create($request->all());
    return Response::json(['created' => true]);
  }

  public function retrieveAll () {//return all records in attractions db
    $attractions = Attraction::all();
    return Response::json($attractions);
  }

  public function retrieve($id) {//return specified record
    $attraction = Attraction::find($id);
    return Response::json($attraction);
  }

  public function update(Request $request, $id) {//update specified record
    $attraction = Attraction::find($id);
    $attraction->update($request->all());
    return Response::json(['updated' => true]);
  }

  public function destroy($id) {//delete specified record
    $attraction = Attraction::find($id);
    $attraction->delete();
    return Response::json(['deleted' => true]);
  }
}
