<?php
namespace content_protection\setting;


class view
{
	public static function config()
	{

		\dash\data::page_title(T_("Occasion target"));


		\dash\data::badge_link(\dash\url::here());
		\dash\data::badge_text(T_('Back'));

		$dataTable = \lib\app\protectiontype::get_all_full('occasiontarget');
		\dash\data::dataTable($dataTable);
	}

}
?>
