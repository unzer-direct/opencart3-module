<?php

use QuickPay\Catalog\Controller;
use QuickPay\Statuses;

/**
 * Class ControllerExtensionPaymentQuickPay
 */
class ControllerExtensionPaymentQuickPay extends \Controller implements Statuses {

	use Controller;

	/**
	 * The name of the instance
	 *
	 * @return string
	 */
	public function getInstanceName() {
		return 'quickpay';
	}
}