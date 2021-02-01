<?php

use QuickPay\Catalog\Controller;

/**
 * Class ControllerExtensionPaymentQuickPayKlarna
 */
class ControllerExtensionPaymentQuickPayKlarna extends \Controller {

	use Controller;

	/**
	 * The name of the instance
	 *
	 * @return string
	 */
	public function getInstanceName() {
		return 'quickpay_klarna';
	}
}