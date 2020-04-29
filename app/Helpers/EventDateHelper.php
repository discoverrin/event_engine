<?php


namespace App\Helpers;


class EventDateHelper
{
    public static function printStartEndDate($start_date,$end_date="")
    {
        if(date("jS F Y",strtotime($start_date)) == date("jS F Y",strtotime($end_date)) || empty($end_date))
        {
            $data =  date("jS F Y",strtotime($start_date)) ;
        }
        else
        {
            if(date("F",strtotime($start_date)) == date("F",strtotime($end_date)) )
            {
                if(date("Y",strtotime($start_date)) == date("Y",strtotime($end_date)) )
                {
                    $data =  date("jS",strtotime($start_date)). " - " .date("jS M Y",strtotime($end_date)) ;
                }
                else
                {
                    $data =  date("jS M Y",strtotime($start_date)). " - " .date("jS M Y",strtotime($end_date)) ;
                }
            }
            else
            {
                if(date("Y",strtotime($start_date)) == date("Y",strtotime($end_date)) )
                {
                    $data =  date("jS M",strtotime($start_date)). " - " .date("jS M Y",strtotime($end_date));
                }
                else
                {
                    $data =  date("jS M Y",strtotime($start_date)). " - " .date("jS M Y",strtotime($end_date));
                }
            }
        }

        return $data;
    }
}
