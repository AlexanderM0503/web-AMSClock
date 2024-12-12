<?php

require_once "start.php";

function getCurrentDate($timezoneStr)
{
    $timezone = new DateTimeZone($timezoneStr);
    $currentTime = new DateTimeImmutable("now", $timezone);

    $data = array("hours" => $currentTime->format("H"),
        "minutes" => $currentTime->format("i"),
        "date" => $currentTime->format("d.m.Y"),
        "day" => $currentTime->format("D"));

    return $data;
}

if (isset($_GET["date"]))
{
    $data = getCurrentDate($CONF["timezone"]);
    echo json_encode($data);
}
