<?php

use QuickPay\Catalog\Controller;

/**
 * Class ControllerExtensionPaymentQuickPayMobilepay
 */
class ControllerExtensionPaymentQuickPayMobilepay extends \Controller {

	use Controller;

	/**
	 * The name of the instance
	 *
	 * @return string
	 */
	public function getInstanceName() {
		return 'quickpay_mobilepay';
	}
}