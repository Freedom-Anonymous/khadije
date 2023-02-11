<?php
namespace content_m\festival\social;


class view
{
	public static function config()
	{
		\dash\data::page_pictogram('edit');

		\dash\data::display_festivalAdd('content_m/festival/layout.html');

		\dash\data::page_title(\dash\data::dataRow_title(). ' | '. T_("Edit festival social detail"));
		\dash\data::page_desc(T_("Edit festival social detail like email, facebook, telegram, ..."));

		\dash\data::badge_link(\dash\url::here(). '/festival?id='. \dash\request::get('id'));
		\dash\data::badge_text(T_('Back to festival dashboard'));

	}
}
?>
