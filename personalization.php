<?php 
require_once("app-includes/app-include.php");
require_once("app-includes/_station.php");
require_once("app-includes/_personalization.php");
//When to send notifications
/*
1. When 1 day is left for the journey for getting prepared
2. When user visit the station inform all about the train and platform
3. If passenger has to wait inform about the retiring rooms
4. 
*/


checkDay($conn); //send notification one day before the journey
?>