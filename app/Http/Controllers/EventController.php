<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validateWithBag('CreateEvent', [
            'wedding_id' => ['required', 'exists:weddings,id'],
            'title' => ['required', 'string', 'between:4,20'],
            'description' => ['nullable', 'string'],
            'start_date' => ['required', 'date:Y-m-d H:i'],
            'end_date' => ['nullable', 'date:Y-m-d H:i', 'after:start_date'],
            'location' => ['nullable', 'string'],
        ]);

        $event = Event::create([
            'wedding_id' => $request->wedding_id,
            'title' => $request->title,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'location' => $request->location,
        ]);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
