<?php

require_once(dirname(DIR_SYSTEM) . '/catalog/model/extension/payment/nocks/NocksPaymentAdminController.php');

class ControllerExtensionPaymentNocksIdeal extends NocksPaymentAdminController
{
	protected $methodID = 'ideal';
}
