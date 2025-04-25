<?php
date_default_timezone_set("Asia/Karachi");


$hour = date("H");

if ($hour < 12) {
    echo "Good Morning";
} else {
    echo "Good Afternoon";
}
?>
