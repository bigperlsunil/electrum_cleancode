<?php

class SJB_Admin_Classifieds_Linkedin extends SJB_Classifieds_PostToSocialNetworks
{
	function __construct(SJB_Acl $acl, $params, $roleID)
	{
		$this->networkID    = 'linkedin';
		$this->setPermissionLabel('set_linkedin_plug-in');
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
