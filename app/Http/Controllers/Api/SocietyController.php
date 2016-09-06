<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Helpers\JsonHelper;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Society;

class SocietyController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
    // we don't need no database
    return JsonHelper::success([]);

    // Do the query
    $societies = Society::all();

    return JsonHelper::success($societies);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id) {
    // we don't need no database
    return JsonHelper::success(null);

    $societies = Society::find($id);

    if(!$societies) {
      return JsonHelper::error("Invalid societies.");
    }

    return JsonHelper::success($societies);
  }
}