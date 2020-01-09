<?php //html output is echo'd in pages/display_events.php where this file is required

require 'databaseconnection.php';

$query_string = "SELECT EventName, DateOfEvent, TimeStart, TimeEnd FROM Event";

$query_statement = $pdo->prepare($query_string);
$query = $query_statement->execute();
$query_results = $query_statement->fetchAll();

//$html_output .= $query_results;

$html_output .= "<table>";
$html_output .= "<tr> <td> Event Name </td> <td> Event Date </td><td> Time Start </td><td> Time End </td></tr>";

//var_dump($query_results);

foreach ($query_results as $arr)
{
    $html_output .= "<tr>";
    foreach ($arr as $key => $value)
    {

        $html_output .= "<td>";
        $html_output .= $value;
        $html_output .= "</td>";

    }
    $html_output .= "</tr>";
}

$html_output .= "</table>";