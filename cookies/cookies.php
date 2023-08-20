<?php
echo "Welcome back to our website. <br>";

//  this slash "/" at the end means that the cookie is now available throughout the whole website.
//  and the numbers is on seconds and it means the expiration time of this cookie and the time had to be set to get the time in seconds from 1970 which is a rule here.

$cookieName = "movieGenre";
$cookieValue = "sci-fi";
setcookie($cookieName, $cookieValue, time() + 86400, "/");
echo "The cookie is set.  <br>";
?>