<?php
namespace content_lottery\item\permission;


class controller
{
	public static function routing()
	{

		$id = \dash\request::get('id');

		if(!$id || !\dash\coding::decode($id))
		{
			\dash\header::status(404, T_("Id not found"));
		}
	}
}
?>