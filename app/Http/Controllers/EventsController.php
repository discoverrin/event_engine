<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EventsController extends Controller
{
    protected $case1 = ['2', '74', '147', '9806', '321', '10548', '10488', '414', '10562', '11509'
    , '10564', '10614'];
    protected $case2 = ['2', '74', '10555', '10547', '10897', '10801', '10803', '412'];
    protected $similarEvents = [
        '74' => ['2', '414', '412', '413']
    ];
    protected $performers = [
        '74' => [
            [
                "name" => "Lewis Hamilton",
                "img_src" => "1.jpg"
            ],
            [
                "name" => "valtteri bottas",
                "img_src" => "2.jpg"
            ],
            [
                "name" => "sebastian vettel",
                "img_src" => "3.jpg"
            ],
            [
                "name" => "charles leclerc",
                "img_src" => "4.jpg"
            ],
            [
                "name" => "max verstappen",
                "img_src" => "5.jpg"
            ],
            [
                "name" => "alexander albon",
                "img_src" => "6.jpg"
            ],
            [
                "name" => "daniel ricciardo",
                "img_src" => "7.jpg"
            ],
            [
                "name" => "esteban ocon",
                "img_src" => "8.jpg"
            ]
        ]
    ];

    public function index(Request $request)
    {
        $age = $request->get('age', '18-42');
        $case = $age == "18-24" ? $this->case1 : $this->case2;

        $eventUrl = 'https://eventraveler.com/get_events?ids='.implode(",", $case);
        $response = Http::get($eventUrl);
        $events = $response->json();
        return view('events', ['events' => $events]);
    }

    public function detail($eventId)
    {
//        https://eventraveler.com/get_event?event_id=354
        $eventUrl = 'https://eventraveler.com/get_event?event_id=' . $eventId;
        $response = Http::get($eventUrl);
        $event = !empty($response->json()) ? $response->json()[0] : [];

        $eventUrl = 'https://eventraveler.com/get_events?ids=' . $eventId;
        $response = Http::get($eventUrl);
        $eventinfo = $response->json()[0];

        if(empty($event)) $event = $eventinfo;

        $similarEventIds = !empty($this->similarEvents[$eventId]) ? $this->similarEvents[$eventId] : [];
        if ($similarEventIds)
        {
            $similarEventsUrl = 'https://eventraveler.com/get_events?ids=' . implode(",", $similarEventIds);
            $similarEventsResponse = Http::get($similarEventsUrl);
            $similarEvents = $similarEventsResponse->json();
        }
        else
        {
            $similarEvents = [];
        }

        $performers = !empty($this->performers[$eventId]) ? $this->performers[$eventId] : [];

        return view('event_detail', ['performers' => $performers, 'info' => $eventinfo, 'event' => $event, 'similar_events'=> $similarEvents]);
    }
}
