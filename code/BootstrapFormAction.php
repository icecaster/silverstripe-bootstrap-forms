<?php

/**
 * Creates a {@link FormAction} object that is compatible
 * with the Twitter Bootstrap CSS framework.
 *
 * @author Uncle Cheese <unclecheese@leftandmain.com>
 * @package bootstrap_forms
 */
class BootstrapFormAction extends Extension {

	function setOwner($owner, $ownerBaseClass = null) {
		parent::setOwner($owner, $ownerBaseClass);
		if($owner) {
			$owner->addExtraClass("btn");
		}
	}


	/** 
	 * Sets the style of button. Options include:
	 * 	- "success"
	 *  - "danger"
	 *  - "info"
	 *  - "primary"
	 *  - "warning"
	 *  - "inverse"
	 *
	 * @param string $style
	 * @return BootstrapFormAction
	 */
	public function setStyle($style) {
		$this->owner->addExtraClass("btn-".trim(strtolower($style)));
		return $this->owner;
	}



	/** 
	 * Sets the size of the button. Options include:
	 * 	- "large"
	 *  - "small"
	 *  - "mini"
	 *
	 * @param string $size
	 * @return BootstrapFormAction
	 */
	public function setSize($size) {
		$this->owner->addExtraClass("btn-".trim(strtolower($size)));
		return $this->owner;
	}


}