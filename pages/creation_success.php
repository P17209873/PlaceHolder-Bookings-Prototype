<?php

$html_output = "<html>";
$html_output .= "<head>";
$html_output .= "<title>Creation Success! - PlaceHolder Bookings Prototype</title>";
$html_output .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/style.css\">";
$html_output .= "<body>";
$html_output .= "<div class=\"container\">";
$html_output .= "<h1> Success! </h1>";
$html_output .= "<p> Your event has been created. </p>";
$html_output .= "<br />";
$html_output .= "<p> <a href=\"../index.html\" name=\"Home\">Homepage </a> </p>";
$html_output .= "<p> <a href='display_events.php' name='DisplayEvents'> Display All Events </a> </p>";
$html_output .= "</div>";
$html_output .= "</body>";
$html_output .= "</head>";
$html_output .= "</html>";

echo $html_output;