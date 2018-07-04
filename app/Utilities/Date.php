<?php
namespace App\Utilities;

class Date
{

	public static function isWeekend()
	{
		return (new \DateTime)->format('N') > 5;
	}
}