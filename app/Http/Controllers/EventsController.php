<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EventsController extends Controller
{
    private $MSG_ERR_ID_NOT_FOUND = 'ID did not match any of the user found in database.';
    private $MSG_ERR_ADDITIONAL_PROPS = 'Model does not contain properties found in request';
    private $MSG_SUC_ID_FOUND = 'User found.';
    private $MSG_SUC_UPDATE = 'User successfully updated.';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return response()->json($events, 200, ['application/json']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $request->validate([
            'user_id' => 'required',
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
            'author' => 'required',
            'event_type' => 'required',
            'location' => 'required',
            'date' => 'required',
            'ref' => 'required'
        ]);

        $event = new Event;
        $event->fill($request->except(['user_id']));
        $event->user_id = $request->user_id;

        if($event->save()) {
            return response($event, 200, ['application/json']);
        } else {
            return response("Error in saving data", 400, ['application/json']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = HeroBanner::find($id);

        if($banner) {
            return response($this->generateRes($event, 200, $this->MSG_SUC_ID_FOUND), 200, ['application/json']);
        } else {
            return response($this->generateRes($event, 400, $this->MSG_ERR_ID_NOT_FOUND), 400, ['application/json']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $msg = '';
        $status = '';
        $err = false;

        $request->validate([
            'user_id' => 'required',
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
            'author' => 'required',
            'event_type' => 'required',
            'location' => 'required',
            'date' => 'required',
            'ref' => 'required'
        ]);

        $event = Event::find($id);
        $event->fill($request->except(['user_id']));
        $event->user_id = $request->user_id;

        if($event->save()) {
            $msg = $this->MSG_SUC_ID_FOUND;
            $status = 200;
            return response($this->generateRes($event, $status, $msg), 200, ['application/json']);
        } else {
            return response("Error in saving data", 400, ['application/json']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->is_deleted = true;

        if($event->save()) {
            return response("Succesfully deleted data!", 200, ['application/json']);
        } else {
            return response("Error in deleting data", 400, ['application/json']);
        }
    }

    public function generateRes($data, $status, $msg) {
        $res = [
            'data' => $data,
            'status' => $status,
            'msg' => $msg
        ];
        return $res;
    }
}
