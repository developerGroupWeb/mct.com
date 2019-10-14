<?php

/**
 * @param $timestamp
 * @return string
 */
function time_ago($timestamp)
{
    date_default_timezone_set('Benin/Cotonou');

    $time_ago = strtotime($timestamp);
    $current_time = time();

    $time_difference = $current_time - $time_ago;
    $seconds = $time_difference;

    $minutes = round($seconds / 60); // value 60 is seconds
    $hours = round($seconds / 3600); // value 3600 is 60 minutes * 60 seconds
    $days = round($seconds / 86400); // value 86400 is 60 minutes * 60 seconds * 24
    $weeks = round($seconds / 604800); // value 86400 is 60 minutes * 60 seconds * 24 * 7
    $months = round($seconds / 2629440);
    $years = round($seconds / 31553280);

    $out = '';

    if ($seconds <= 60) {
        return "A l'instant";
    } elseif ($minutes <= 60) {

        switch ($minutes){
            case 1:
                $out = "Une minute déjà";
                break;
            default:
                $out = "$minutes minutes déjà";
                break;
        }
    } elseif ($hours <= 24) {

        if($hours == 1){
            $out = "Une heure déjà";
        }elseif($hours <= 12){
            $out = "$hours heures déjà";
        }else{
            $out = "Aujourd'hui";
        }

    } elseif ($days <= 7) {

        if($days == 1){
            $out = "Hier";
        }elseif($days <= 5){
            $out = "$days jours déjà";
        }else{
            $out = "Cette semaine";
        }

    } elseif ($weeks <= 4.3)// 4.3 = 52/12
    {
        if($weeks == 1){
            $out = "Une semaine déjà";
        }elseif($weeks <= 3){
            $out = "$weeks semaines déjà";
        }else{
            $out = "Ce mois";
        }

    } elseif ($months <= 12) {

        switch ($months){
            case 1:
                $out = "Un mois déjà";
                break;
            default:
                $out = "$months mois déjà";
                break;
        }
    } else {
        switch ($years){
            case 1:
                $out = "Un an déjà";
                break;
            default:
                $out = "$years ans déjà";
                break;
        }
    }
    return $out;
}


