<?php

require __DIR__ . '/vendor/autoload.php';

$keys_data = array(
    'public_key' => '',
    'private_key' => ''
);

$ambient = "test"; //valores posibles: "test" o "prod"
$connector = new \Decidir\Connector($keys_data, $ambient);

$data = [
     "site_transaction_id" => "900",
     "token" => "17ae7c20-13a2-4f29-9044-43a368568fc3",
     "payment_method_id" => 1,
     "bin" => "450799",
     "amount" => 2000,
     "currency" => "ARS",
     "installments" => 1,
     "description" => "",
     "payment_type" => "single",
     "sub_payments" => [],
     "aggregate_data" => [
         "indicator" => "1",
         "identification_number" => "30598910045",
         "bill_to_pay" => "Decidir_Test",
         "bill_to_refund" => "Decidir_Test",
         "merchant_name" => "DECIDIR",
         "street" => "Lavarden",
         "number" => "247",
         "postal_code" => "C1437FBE",
         "category" => "05044",
         "channel" => "005",
         "geographic_code" => "C1437"
     ]
 ];

try {
	$response = $connector->payment()->ExecutePayment($data);
} catch( \Exception $e ) {
	var_dump($e->getData());
}