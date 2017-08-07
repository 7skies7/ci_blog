<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('timespan'))
{
    function timespan($timestamp)
    {
        $difference = $timestamp - time();

	    $periods = array(" sec", " min", " hour", " day", " week", " month", " years", " decade");
	    $lengths = array("60","60","24","7","4.35","12","10");

	    if ($difference > 0)
	    {
	        $ending = " ago";
	    }
	    else
	    {
	         $difference = -$difference;
	         $ending = " ago";
	    }

	    for($j = 0; $difference >= $lengths[$j]; $j++)
	    {
	        $difference /= $lengths[$j];
	    }

	    $difference = round($difference);

	    if($difference != 1)
	    {
	         $periods[$j].= "s";
	    }
	    return $difference . $periods[$j] . $ending;
    }   
}