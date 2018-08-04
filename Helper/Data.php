<?php

namespace Dangs\TaxInfoHide\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{

	public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }

	/**
     * Return the status
     *
     * @return string
     */

	public function getStatusTax(){
		return $this->scopeConfig->getValue('tax/sales_display/hide_tax', 
                        \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}

    public function getTemplate()
    {
        if($this->getStatusTax()) {
            $template = 'Dangs_TaxInfoHide::shipping.phtml';
        }else{
            $template = 'Magento_Checkout::cart/shipping.phtml';
        }

        return $template;
    }
}