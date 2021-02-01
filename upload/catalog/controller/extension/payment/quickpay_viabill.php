<?php

use QuickPay\Catalog\Controller;

/**
 * Class ControllerExtensionPaymentQuickPayViabill
 */
class ControllerExtensionPaymentQuickPayViabill extends \Controller {

	use Controller;

	/**
	 * The name of the instance
	 *
	 * @return string
	 */
	public function getInstanceName() {
		return 'quickpay_viabill';
	}
}