<?php

namespace App\Http\Controllers;

use App\Athlete;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;


class AthleteController extends Controller
{
  public function create (Request $request) {
    Athlete::create($request->all());
    return Response::json(['created' => true]);
  }

  public function retrieveAll () {
    $athletes = Athlete::all();
    return Response::json($athletes);
  }

  public function retrieve($id) {
    $athlete = Athlete::find($id);
    return Response::json($athlete);
  }

  public function update(Request $request, $id) {
    $athlete = Athlete::find($id);
    $athlete->update($request->all());
    return Response::json(['updated' => true]);
  }

  public function destroy($id) {
    $athlete = Athlete::find($id);
    $athlete->delete();
    return Response::json(['deleted' => true]);
  }
}
