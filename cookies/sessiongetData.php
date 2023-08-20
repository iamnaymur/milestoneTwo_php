<?php
session_start();
if (isset($_SESSION['username'])) {
    echo "Welcome" . $_SESSION['username'];
    echo "Favorite movie" . $_SESSION['favoriteMovie'];
    echo "<br>";
}
else{
    echo 'please login again to continue';
}
?>