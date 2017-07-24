<?php

class Training_Example_Helper_Data extends Mage_Core_Helper_Abstract
{
	protected $_store;
	protected $_urlModel;

	public function __construct (
		Mage_Core_Model_Store $store = null,
		Mage_Core_Model_Url $url = null
	)
	{
		$this->_store = $store;
		$this->_urlModel = $url;
	}

	public function getStore()
	{
		if (is_null($this->_store)) {
			$this->_store = Mage::app()->getStore();
		}
		return $this->_store;
	}

	public function getUrlModel()
	{
		if (is_null($this->_urlModel)) {
			$this->_urlModel = Mage::getModel('core/url');
		}
		return $this->_urlModel;
	}

	public function getRedirectTargetUrl()
	{
		$value = $this->getStore()->getConfig('training/example/redirect_target');
		return $this->getUrlModel()->getUrl($value);
	}
}
