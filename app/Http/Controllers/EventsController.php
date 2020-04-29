<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\Http;

class EventsController extends Controller
{
    protected $case1 = ['2', '74', '147', '9806', '321', '10548', '10488'];

    public function index()
    {
        $eventUrl = 'https://eventraveler.com/get_events?ids='.implode(",", $this->case1);
        $response = Http::get($eventUrl);
        $events = $response->json();
        return view('events', ['events' => $events]);
    }

    public function detail($eventId)
    {
//        https://eventraveler.com/get_event?event_id=354
        $eventUrl = 'https://eventraveler.com/get_event?event_id='.$eventId;
        $response = Http::get($eventUrl);
        $event = $response->json()[0];
        return view('event_detail', ['event' => $event]);
    }
}
