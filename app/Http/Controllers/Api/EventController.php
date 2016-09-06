<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Helpers\JsonHelper;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Event;
use Validator;
use Eloquent;
use Illuminate\Support\Collection;

class EventController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * Can have the following GET filter params:  
   *  @param date_from - return all events after this date, including
   *  @param date_to   - return all events before this date, including
   *  @param date_on   - return all events exactly on this date
   *  @param query     - do a search for given query through events title / description
   *  @param category  - must be a valid category id
   *  @param tags[]    - // TODO must be a valid tag string / id
   *  @param society   - return all events of this society 
   *  @param author    - return all events of this author
   *  @param address   - // TODO return all events at this address
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request) {
    /* DISABLE DB EVENTS 
    // Validate
    $validator = Validator::make($request->all(), [
      'date_from'     =>  'sometimes|date',
      'date_to'       =>  'sometimes|date',
      'date_on'       =>  'sometimes|date',
      'query'         =>  'sometimes',
      'category'      =>  'sometimes|exists:event_categories,id',
      'society'       =>  'sometimes|exists:societies,id',
      'author'        =>  'sometimes|exists:users,id',
    ]);
    if($validator->fails()) {
      return JsonHelper::error(json_encode($validator->errors));
    }

    $condition = "";
    if($request->has('date_from')) {
      $condition.= "(DATEDIFF(date_start, '".$request->input('date_from')."') >= 0) AND ";
    }
    if($request->has('date_to')) {
      $condition.= "(DATEDIFF(date_start, '".$request->input('date_to')."') <= 0) AND ";
    }
    if($request->has('date_on')) {
      $condition.= "(DATEDIFF(date_start, '".$request->input('date_on')."') = 0) AND ";
    }
    if($request->has('query')) {
      $condition.= "((title LIKE '%".$request->input('query')."%') OR (description LIKE '%".$request->input('query')."%')) AND ";
    }
    if($request->has('category')) {
      $condition.= "(category_id = '".$request->input('category')."') AND ";
    }
    if($request->has('society')) {
      $condition.= "(society_id = '".$request->input('society')."') AND ";
    }
    if($request->has('author')) {
      $condition.= "(creator_id = '".$request->input('author')."') AND ";
    }
    $condition.= "(1 = 1)";

    // Do the query
    $events = Event::whereRaw($condition)->get();
    */

    $events_json = json_decode(file_get_contents('events.json'), 1);

    Eloquent::unguard();
    $events = new Collection;
    foreach ($events_json as $key => $events_json) {
      $event = new Event($events_json);
      $events->push($event);
    }
    Eloquent::reguard();

    if($request->has('date_from')) {
      $events = $events->filter(function($event) use ($request) {
        return strtotime($event->date_start) >= strtotime($request->input('date_from'));
      });
    }
    if($request->has('date_to')) {
      $events = $events->filter(function($event) use ($request) {
        return strtotime($event->date_start) <= strtotime($request->input('date_to'));
      });
    }
    if($request->has('date_on')) {
      $events = $events->filter(function($event) use ($request) {
        return strtotime($event->date_start) == strtotime($request->input('date_on'));
      });
    }


    return JsonHelper::success($events);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id) {

    $event = Event::find($id);

    if(!$event) {
      return JsonHelper::error("Invalid event.");
    }

    return JsonHelper::success($event);
  }

}