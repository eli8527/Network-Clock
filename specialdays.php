<?php
//THESE ARRAYS MUST BE MANUALLY UPDATED

$specialdays = array("10.05","10.14");
$noclasses = array("10.02","10.08","10.15","10.16","10.17","10.18","10.23","10.30","11.05","11.06");

$holidays = array("");

//Normal Days return 0
$type = 0;
date_default_timezone_set('America/New_York');
$mmDD = date("m.d");
//echo $mmDD;

//Special Days return 1
for ($i = 0; $i < count($specialdays,0); $i++)
{
	if ($mmDD == $specialdays[$i])
	{
		$type = 1;
		break;		
	}
}

//No Classes return 2
for ($i = 0; $i < count($noclasses,0); $i++)
{
	if ($mmDD == $noclasses[$i] && $type == 0)
	{
		$type = 2;
		break;
	}
}

//Holiday return 3
for ($i = 0; $i < count($holidays,0); $i++)
{
	if ($mmDD == $holidays[$i])
	{
		$type = 3;
		break;
	}
}

$message = "";
$message .= "{\"type\":\"";
$message .= $type;
$message .= "\"}";

echo $message;
?>