<?php defined('SYSPATH') or die('No direct script access.');

class DateHelper {
	public static function human_readable($from)
	{
		
		$difference = abs(time()- strtotime($from));
		if ($difference < 3600) //less than an hour from now
		{
			$amount_minutes = floor($difference/60);
			switch($amount_minutes)
			{
				case 0:
					return "less than a minute ago";
					break;
				case 1:
					return "one minute ago";
					break;
				default:
					return "{$amount_minutes} minutes ago";
					break;
			}
		} else if ( 3600 <= $difference AND $difference < 86400) //between one and 24 hours from now
		{
			$amount_hours = floor($difference/3600);
			switch($amount_hours)
			{
				case 1:
					return "one hour ago";
					break;
				default:
					return "{$amount_hours} hours ago";
					break;
			}
		} else if (86400<=$difference AND $difference < 172800)
		{
			return "yesterday";
		} else
		{
	/*		$date_info =getdate($from);
			return "on ".$date_info["month"]." ".$date_info["mday"];*/
		}
	}
}
?>