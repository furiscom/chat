<?php

$serverName = "localhost";
$dBUsername = "masjid65_wp460";
$dBPassword = "J4ng4nLup4!!!";
$dBName = "masjid65_chat";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName, 3306);

if (!$conn)
{
    die("Connection failed: ". mysqli_connect_error());
}
