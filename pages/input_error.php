<?php

$html_output = "<html>";
$html_output .= "<head>";
$html_output .= "<title>Error! - PlaceHolder Bookings Prototype</title>";
$html_output .="<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/style.css\">";
$html_output .="<body>";
$html_output .="<div class=\"container\">";
$html_output .="<h1> Error! </h1>";
$html_output .="<p> Oh no! You need to enter valid values! </p>";
$html_output .="<p> Your Event Title must not be empty </p>";
$html_output .="<p> Your Event Date must be a date in the future </p>";
$html_output .="<p> Your Event Start Time must be before your Event End Time </p>";
$html_output .="<br />";
$html_output .="<p> <a href=\"../index.html\" name=\"Home\">Try again? </a> </p>";
$html_output .="</div>";
$html_output .="</body>";
$html_output .= "</head>";
$html_output .= "</html>";

echo $html_output;
