<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EventsController extends Controller
{
    protected $case1 = ['2', '74', '147', '9806', '321', '10548', '10488', '414', '10562', '11509'
    , '10564', '10614'];
    protected $case2 = ['2', '74', '10555', '10547', '10897', '10801', '10803', '412',
        '343', '339', '414', '10448'
    ];
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
        $startDate = $request->get('start_date');
        $endDate = $request->get("end_date");
        $age = $request->get('age');
        $location = $request->get('location');
        $affluence = '';
        $children = $request->get('children') == true ? "true" : "false";
        $gender = $request->get('gender');

        $query = http_build_query([
           "location" => $location,
           "age" => $age,
           "start_date" => $startDate,
           "end_date" => $endDate,
           "children" => $children,
           "gender" => $gender
        ]);


//        $age = $request->get('age', '18-42');
//        $case = $age == "18-24" ? $this->case1 : $this->case2;

        $pUrl = "http://34.71.54.85/get_basic_reco?".$query;
        $data = Http::get($pUrl);
        $result = $data->json();
        $eventIds = [];
        if(!isset($result['msg']))
        {
            $events = collect($result);
            $eventIds = $events->unique('event_id')->pluck('event_id')->toArray();
        }

        $eventUrl = 'https://eventraveler.com/get_events?ids='.implode(",", $eventIds);
        $response = Http::get($eventUrl);
        $events = collect($response->json());

        $finalEventsInOrder = [];
        foreach ($eventIds as $i=>$eventId)
        {
            $finalEventsInOrder[] = $events->where("event_id", $eventId)->first();
        }

        return view('events', ['events' => $finalEventsInOrder]);
    }

    public function detail($eventId)
    {
        $eventUrl = 'https://eventraveler.com/get_event?event_id=' . $eventId;
        $response = Http::get($eventUrl);
        $event = !empty($response->json()) ? $response->json()[0] : [];

        $eventUrl = 'https://eventraveler.com/get_events?ids=' . $eventId;
        $response = Http::get($eventUrl);
        $eventinfo = $response->json()[0];

        if(empty($event)) $event = $eventinfo;

        $seUrl = "http://34.71.54.85/search_event?event_id=".$eventId;
        $seRes = Http::get($seUrl);
        $seData = $seRes->json();
        $eventIds = [];
        if(!isset($seData['message']))
        {
            $events = collect($seData);
            $eventIds = $events->unique('event_id')->pluck('event_id')->toArray();
        }

        $similarEventIds = $eventIds;
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
