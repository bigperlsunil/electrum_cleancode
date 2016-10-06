<?php

class SJB_StaticContentAuxil
{
	public static function isValidNameID($name, $id)
	{
		if (!isset($name) || $name == '') {
			return 'Please enter Static Content Name.';
		}
		if (!isset($id) || $id == '') {
			return 'Please enter Static Content ID.';
		}
		if (!self::isValidID($id)) {
			return 'The ID you have entered is invalid. Please try another ID.';
		}
		return '';
	}
	
	public static function isValidID ($id)
	{
		return preg_match("(^\w+$)", $id);
	}
	
	public static function warning($error_code, $error_message)
	{
		$i18N = SJB_I18N::getInstance();
		echo "<p class='error'>{$i18N->gettext('Backend', $error_message)}</p>";
	}
}
