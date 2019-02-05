<?php
/**
 * Created by PhpStorm.
 * User: Nazmul
 * Date: 15-Sep-17
 * Time: 2:19 PM
 */

namespace App\Custom;


class AutoUser
{
    public function payment_status($totalAmount, $payment){

        if($totalAmount == $payment){
            return 'Paid';
        }elseif ($payment == 0){
            return 'Unpaid';
        }elseif ($totalAmount > $payment){
            return 'Partial';
        }else{
            return 'Payable';
        }
    }

    public function payment_status2($totalAmount, $payment){

        if($totalAmount == $payment){
            return 'Paid';
        }elseif ($payment == 0){
            return 'Unpaid';
        }elseif ($totalAmount > $payment){
            return 'Partial';
        }else{
            return 'Receivable';
        }
    }

}