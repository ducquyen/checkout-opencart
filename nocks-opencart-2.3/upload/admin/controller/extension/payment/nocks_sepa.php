<?php

require_once(dirname(DIR_SYSTEM) . '/catalog/model/extension/payment/nocks/NocksPaymentAdminController.php');

class ControllerExtensionPaymentNocksSepa extends NocksPaymentAdminController
{
	protected $methodID = 'sepa';
}
