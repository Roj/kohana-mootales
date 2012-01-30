<?php defined('SYSPATH') or die('No direct script access.');

class DateHelper {
	public static function human_readable_day($from,$long_date_prefix='on ')
	{
		//This function returns the day in a human-readable way.
		//in other words, return values are 'today', 'x days ago' (x<=10)
		//and full date.
		//This function is used on profiles, when outputting last date active.
		$difference = abs(time()- strtotime($from));
		if ($difference < 86400)
		{
			return "Today";
		}
		return DateHelper::human_readable($from,$long_date_prefix);
	}
	public static function human_readable($from, $long_date_prefix='on ')
	{
		$from = strtotime($from);
		$difference = abs(time()- $from);
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
		} else if ($difference < 86400) //between one and 24 hours from now
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
		} else if ($difference < 864000)
		{
			$amount_days = floor($difference/86400);
			switch($amount_days)
			{
				case 1:
					return "one day ago";
					break;
				default:
					return "{$amount_days} days ago";
					break;
			}
		} else
		{
			$date_info =getdate($from);
			$year = ($difference >= 3.154 * pow(10,7))? ", ".$date_info["year"]:"";
			return $long_date_prefix.$date_info["month"]." ".$date_info["mday"].$year;
		}
	}
}
?>