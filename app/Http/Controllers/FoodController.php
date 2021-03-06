<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class FoodController extends Controller
{
    public function create (Request $request) {//post new food record
      Food::create($request->all());
      return Response::json(['created' => true]);
    }

    public function retrieveAll () {//return all records in foods db
      $foods = Food::all();
      return Response::json($foods);
    }

    public function retrieve($id) {//return specified record
      $food = Food::find($id);
      return Response::json($food);
    }

    public function update(Request $request, $id) {//update specified record
      $food = Food::find($id);
      $food->update($request->all());
      return Response::json(['updated' => true]);
    }

    public function destroy($id) {//delete specified record
      $food = Food::find($id);
      $food->delete();
      return Response::json(['deleted' => true]);
    }
}
