<?php
namespace content_a\protection\report;


class view
{
	public static function config()
	{

		\dash\data::page_title(T_("Report"));


		\dash\data::badge_link(\dash\url::this());
		\dash\data::badge_text(T_('Back'));

	}

}
?>
