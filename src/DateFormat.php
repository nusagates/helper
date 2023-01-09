<?php

namespace Nusagates\Helper;

class DateFormat
{
  public static function getMonthname($number)
  {
    switch ($number) {
      case '01':
        return 'Januari';
      case '02':
        return 'Februari';
      case '03':
        return 'Maret';
      case '04':
        return 'April';
      case '05':
        return 'Mei';
      case '06':
        return 'Juni';
      case '07':
        return 'Juli';
      case '08':
        return 'Agustus';
      case '09':
        return 'September';
      case '10':
        return 'Oktober';
      case '11':
        return 'November';
      case '12':
        return 'Desember';
    }
  }

  public static function dateFormat($date)
  {

    $date = explode("-", $date);
    $month = DateFormat::getMonthname($date[1]);
    return $date[2] . ' ' . $month . ' ' . $date[0];
  }

}