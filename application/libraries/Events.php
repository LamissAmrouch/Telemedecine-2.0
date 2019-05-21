<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 17/09/2018
 * Time: 10:06
 */

class Events
{
    private $Events;
    public function __construct($events)
    {
        $this->Events = $events;
    }

    public function getByDay(){
        $days = [];
        foreach ($this->Events as $event) :
            $date = $event->Date;
            if(!isset($days[$date])){
                $days[$date] = [$event];
            }else{
                $days[$date][] = $event;
            }
        endforeach;
        return $days;
    }

}