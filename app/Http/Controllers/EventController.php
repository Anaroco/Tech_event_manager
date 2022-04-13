<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view ('index', ['events' => $events]);
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $events = Event::orderBy('id', 'desc');
        return view('events.create', ['events' => $events]);   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $events = new Event();
        $events-> title = $request -> title; 
        $events-> description = $request -> description; 
        $events-> assistants = $request -> assistants; 
        $events-> date = $request -> date; 
        $events-> img = $request -> img; 

        $events->save();

        return redirect('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $events = Event::find($id);

        // show the view and pass the events$events to it
        return View('home', ['events' => $events]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $events = Event::find($id);
        $events-> title = $request -> title; 
        $events-> description = $request -> description; 
        $events-> assistants = $request -> assistants; 
        $events-> date = $request -> date; 
        $events-> img = $request -> img; 

        $events->save();

        return redirect('home');
    }

    public function edit($id)
    {
        $events = Event::find($id);

        return view('events.edit', ['events'=> $events]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $events = Event::findOrFail($id);
        $events->delete();
        
        return redirect('/home'); 
    }
    
}