<?php

require __DIR__ . '/vendor/autoload.php';

$keys_data = array(
    'public_key' => '',
    'private_key' => ''
);

$ambient = "test"; //valores posibles: "test" o "prod"
$connector = new \Decidir\Connector($keys_data, $ambient);

$data = array(
    "site_transaction_id" => "9000_1",
    "token" => "9418f685-7f14-4e1f-a47d-61a7343bcec1",
    "customer" => array("id" => "customer", "email" => "user@mail.com"),
    "payment_method_id" => 1,
    "bin" => "450799",
    "amount" => 5.00,
    "currency" => "ARS",
    "installments" => 1,
    "description" => "",
    "establishment_name" => "12345",
    "payment_type" => "single",
    "sub_payments" => array()
);

try {
	$response = $connector->payment()->ExecutePayment($data);
} catch( \Exception $e ) {
	var_dump($e->getData());
}