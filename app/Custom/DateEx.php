<?php

namespace App\Custom;


class DateEx
{

    private function get_date($date_check){
        $split_date = str_replace("/", "-",  $date_check);
        if (strtotime($split_date) == false) {
            throw new Exception("This is not valid date. Please check date again.");
        }else{
            return $date_check;
        }
    }

    public function start_date($date){
        $ch_date = $this->get_date($date);
        return date("Y-m-d H:i:s", strtotime(str_replace("/", "-", $ch_date).' 00:00:00'));
    }

    public function end_date($date){
        $ch_date = $this->get_date($date);
        return date("Y-m-d H:i:s", strtotime(str_replace("/", "-",  $ch_date).' 23:59:59'));
    }

    public function db_date($date){
        $ch_date = $this->get_date($date);
        return date("Y-m-d", strtotime(str_replace("/", "-",  $ch_date)));
    }

    public function db_date_time($date){
        $ch_date = $this->get_date($date);
        return date("Y-m-d H:i:s", strtotime(str_replace("/", "-",  $ch_date)));
    }

}