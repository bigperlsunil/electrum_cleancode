<?php

class SJB_Admin_Classifieds_Twitter extends SJB_Classifieds_PostToSocialNetworks
{
	function __construct(SJB_Acl $acl, $params, $roleID)
	{
		$this->networkID    = 'twitter';
		$this->setPermissionLabel('set_twitter_plug-in');
		parent::__construct($acl, $params, $roleID);
	}

	public function isAccessible()
	{
		return parent::isAccessible();
	}

	public function execute()
	{
		parent::execute();
	}
}
