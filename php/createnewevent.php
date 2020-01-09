<?php

$toggle_execution = true;

$user_input = $_POST;

$eventtitle = $user_input['eventtitle'];
$eventdate = $user_input['eventdate'];
$eventstarttime = $user_input['eventstarttime'];
$eventendtime = $user_input['eventendtime'];
$eventcategory = $user_input['eventcategory'];
$eventlocation = $user_input['eventlocation'];

$user_input = []; //purges userinput array
$clean_user_input = [];

if($toggle_execution == true){

    //sanitises variables and pushes to clean array if values are valid
    if($eventtitle != "" && strtotime($eventdate) > time() && strtotime($eventstarttime) < strtotime($eventendtime))
    { 
        $clean_user_input['eventtitle'] = filter_var($eventtitle, FILTER_SANITIZE_STRING);
        $clean_user_input['eventdate'] = $eventdate;
        $clean_user_input['eventstarttime'] = $eventstarttime;
        $clean_user_input['eventendtime'] = $eventendtime;
        $clean_user_input['eventcategory'] = $eventcategory;
        $clean_user_input['eventlocation'] = $eventlocation;
    }

    else
    {
        $toggle_execution = false;
        require '../pages/input_error.php';
    }

    if($toggle_execution == true)
    {
        $eventcategoryID=0;
        switch($eventcategory){
            case 'wedding':
                $eventcategoryID = 1;
                break;
    
            case 'gig':
                $eventcategoryID=2;
                break;
    
            case 'party':
                $eventcategoryID=3;
                break;
    
            case 'film-showing':
                $eventcategoryID=4;
                break;
    
            default:
                $eventcategoryID=0;
                break;
        }

        if($eventcategoryID != 0)
        {
            require "databaseconnection.php";

            $query_string = 'INSERT INTO Event (EventName, DateOfEvent, TimeStart, TimeEnd, EventTypeID) VALUES (?, ?, ?, ?, ?)';
            $query = $pdo->prepare($query_string);
            $query_result = $query->execute(array($clean_user_input['eventtitle'], $clean_user_input['eventdate'], $clean_user_input['eventstarttime'], $clean_user_input['eventendtime'], $eventcategoryID));

            if($query_result==true)
            {
                require '../pages/creation_success.php';
            }

            else
            {
                echo "it doesn't work!";
            }
        }
    }
}

