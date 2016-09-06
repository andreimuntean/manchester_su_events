<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Helpers\JsonHelper;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
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
    $categories = Category::all();

    return JsonHelper::success($categories);
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

    $category = Category::find($id);

    if(!$category) {
      return JsonHelper::error("Invalid category.");
    }

    return JsonHelper::success($category);
  }
}