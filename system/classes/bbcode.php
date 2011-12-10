<?php defined('SYSPATH') or die('No direct script access.');

class BBCode {
	public static function parse($content) {
		return str_replace("\n","<br/>",$content);
	}
}
