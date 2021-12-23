<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaymentMethod;
use App\Models\PaymentDetails;


class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentMethod::truncate();
        PaymentDetails::truncate();
            $payment_method = [
                [
                   'method_name' => 'Cash On Delivery',
                ],
                [
                    'method_name' => 'SSL COMMERZ',
                ],
            ];
            foreach($payment_method as $method){
                PaymentMethod::create($method);
        }

        $payment_details = [
            [
                'method_id' => 1,
                'key_name'=>'cash_enable_option',
                'key_value'=>'yes',
            ],
            [
                'method_id' => 2,
                'key_name'=>'ssl_enable_option',
                'key_value'=>'yes',
            ],
            [
                'method_id' => 2,
                'key_name'=>'ssl_store_id',
                'key_value'=>'gameg604d008bb9dd8',
            ],
            [
                'method_id' => 2,
                'key_name'=>'ssl_store_password',
                'key_value'=>'gameg604d008bb9dd8@ssl',
            ],
        ];
        foreach($payment_details as $details){
            PaymentDetails::create($details);
        }
    }
}
