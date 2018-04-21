<?php
// https://laravel-news.com/creating-helpers
// https://code.tutsplus.com/tutorials/how-to-create-a-laravel-helper--cms-28537

if ( ! function_exists('dateFormatDatabaseScreen') )
{
	function dateFormatDatabaseScreen($data,$formato='database') {
		if ($formato == "screen") {
			$hora = substr($data,11,8);
			$data = substr($data,8,2).'/'.substr($data,5,2).'/'.substr($data,0,4);
		}
		else if ($formato == "database") {
			$hora = substr($data,11,8);
			$data = substr($data,6,4).'-'.substr($data,3,2).'-'.substr($data,0,2);
		}
		if (trim($data) == "//" || trim($data) == "--") { $data=""; }
		return trim($data." ".$hora);
	}
}
