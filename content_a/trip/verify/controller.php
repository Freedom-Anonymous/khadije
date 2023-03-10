<?php
namespace content_a\trip\verify;


class controller
{
	public static function routing()
	{
		if(!\dash\user::login())
		{
			\dash\redirect::to(\dash\url::kingdom(). '/enter');
			return;
		}


		$city = \dash\request::get('city');

		if(!$city)
		{
			\dash\header::status(403, T_("City not found"));
		}

		$term = \lib\app\travel::trip_get_terms('family', $city);

		if(!$term)
		{
			\dash\header::status(404);
		}

		\dash\data::termsAndCondition($term);

	}
}
?>
