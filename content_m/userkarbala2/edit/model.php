<?php
namespace content_m\userkarbala2\edit;

class model
{

	public static function post()
	{
		$id = \dash\data::myUser_id();
		if($id)
		{
			$displayname = \dash\request::post('displayname');
			if(!$displayname)
			{
				\dash\notif::error('لطفا نام را وارد کنید');
				return false;
			}

			if(mb_strlen($displayname) > 100)
			{
				\dash\notif::error('لطفا نام را کمتر از ۱۰۰ حرف وارد کنید');
				return false;
			}

			\lib\db\karbala2users::update(['displayname' => $displayname], $id);
			\dash\notif::ok('کاربر ویرایش شد');
			\dash\redirect::pwd();
		}

	}
}
?>