<?php

use QuickPay\Catalog\Controller;

/**
 * Class ControllerExtensionPaymentQuickPaySofort
 */
class ControllerExtensionPaymentQuickPaySofort extends \Controller {

	use Controller;

	/**
	 * The name of the instance
	 *
	 * @return string
	 */
	public function getInstanceName() {
		return 'quickpay_sofort';
	}
}