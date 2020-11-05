<?php
$SERVER = "localhost";
$USER = "u7dkat9hvtqmv";
$PW = "RuleofNine";
$DB = "dbau6j3tpamc7p";

$connect=mysqli_connect($server, $user, $pw, $db);

if( !$connect)
{
    die("ERROR: Cannot connect to database $db on server $server 
    using user name $user (".mysqli_connect_error().
    ", ".mysqli_connect_error().")");
}