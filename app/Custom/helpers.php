<?php

    function money($amount){
        return 'Tk '.number_format($amount, 2);
    }

    function money_abs($amount){
        $amount1 = abs($amount);
        return 'Tk '.number_format($amount1, 2);
    }

    function pub_date($date){
        if($date == ''){
            return '';
        }else{
            return date("d/m/Y", strtotime(str_replace("/", "-",  $date)));
        }
    }

    function db_date($date){
        if($date == '' || $date == null){
            return null;
        }else{
            return date("Y-m-d", strtotime(str_replace("/", "-",  $date)));
        }
    }

    function t_size($height, $width){
        return $width.'x'.$height;
    }

    function invoice_n($numbers){
        return str_pad($numbers, 5, '0', STR_PAD_LEFT);
    }
 function ac_type($accountNumber){
     $strs = str_split($accountNumber,3);

     $output = '';
     foreach ($strs as $val){
         $output .= $val.'-';
     }

     return rtrim($output, "-");
 }

 function date_range($dateRange){
     $date_range = explode(' - ', $dateRange);
     $start_date = date("Y-m-d", strtotime(str_replace("/", "-",  $date_range[0])));
     $end_date = date("Y-m-d", strtotime(str_replace("/", "-",  $date_range[1])));

     return [$start_date, $end_date];
 }

function date_time_range($dateRange){
    $date_range = explode(' - ', $dateRange);
    $start_date = date("Y-m-d H:i:s", strtotime(str_replace("/", "-",  $date_range[0]).' 00:00:00'));
    $end_date = date("Y-m-d H:i:s", strtotime(str_replace("/", "-",  $date_range[1]).' 23:59:59'));

    return [$start_date, $end_date];
}

/*
 *@gn_dis
 * Important Note About Payment Cash book transaction
 * Invoice Number | Receipt Number | Customer ID | Supplier ID | Customer Account Transaction ID | Expense Transaction ID | 01 For Deposit to Cashbook | 02 For Withdraw from Cashbook
 *
*/
    function gn_dis(array $data){

        $invoice = (isset($data['invoice'])?'<abbr title="Invoice ID">'.$data['invoice'].'</abbr>':00);
        $receipt = (isset($data['receipt'])?'<abbr title="Receipt ID">'.$data['receipt'].'</abbr>':00);
        $customer = (isset($data['customer'])?'<abbr title="Customer ID">'.$data['customer'].'</abbr>':00);
        $supplier = (isset($data['supplier'])?'<abbr title="Supplier ID">'.$data['supplier'].'</abbr>':00);
        $customerAC = (isset($data['customerAC'])?'<abbr title="Customer Account Transaction ID">'.$data['customerAC'].'</abbr>':00);
        $expense = (isset($data['expense'])?'<abbr title="Expense Transaction ID">'.$data['expense'].'</abbr>':00);
        $deposit = (isset($data['deposit'])?'<abbr title="Cash In">01</abbr>':00);
        $withdraw = (isset($data['withdraw'])?'<abbr title="Cash Out">02</abbr>':00);

        $str = $invoice.' | '.$receipt.' | '.$customer.' | '.$supplier.' | '.$customerAC.' | '.$expense.' | '.$deposit.' | '.$withdraw;

        return $str;
    }

    function gn_date($month, $year){
        $dates = [];
        if($month != ''){

            $total_day = cal_days_in_month(CAL_GREGORIAN, $month, $year);

            $st_date = date('Y-m-d', strtotime($year.'-'.$month.'-01'));
            $st_date = strtotime($st_date);

            for ($i = 1; $i <= $total_day; $i++){
                $dates[] = date('d/m/Y', $st_date);
                $st_date = strtotime('+1 day', $st_date);
            }
        }
        return $dates;
    }

