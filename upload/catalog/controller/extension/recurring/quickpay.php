<?php

use QuickPay\Catalog\Recurring;
use QuickPay\Statuses;

class ControllerExtensionRecurringQuickPay extends \Controller implements Statuses {

	use Recurring\Controller;

	/**
	 * Return the name of the payment instance
	 *
	 * @return string
	 */
	public function getInstanceName() {
		return 'quickpay';
	}
}