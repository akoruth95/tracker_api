<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class FoodController extends Controller
{
    public function create (Request $request) {
      Food::create($request->all());
      return Response::json(['created' => true]);
    }

    public function retrieveAll () {
      $foods = Food::all();
      return Response::json($foods);
    }

    public function retrieve($id) {
      $food = Food::find($id);
      return Response::json($food);
    }

    public function update(Request $request, $id) {
      $food = Food::find($id);
      $food->update($request->all());
      return Response::json(['updated' => true]);
    }

    public function destroy($id) {
      $food = Food::find($id);
      $food->delete();
      return Response::json(['deleted' => true]);
    }
}
