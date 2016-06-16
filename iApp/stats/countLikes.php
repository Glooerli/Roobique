<?php
  namespace roobique\stats;

  class countLikes {
    private $querys;

    function __construct($querys){
      $this->querys = $querys;
    }

    function fromDay($day) {
        $startDay = date('Y') . '-' . date('m') . '-' . $day;
        $startDay = (string)strtotime($startDay);
        $endDay = date('Y') . '-' . date('m') . '-' . sprintf("%02d", $day += 1);
        $endDay = (string)strtotime($endDay);

      return $this->querys->COUNT(array('time_stamp' => array('$gte' => $startDay, '$lte' => $endDay)), 'Likes');
    }

    function fromWeek($monday) {
      $startDay = date('Y') . '-' . date('m') . '-' . $monday;
      $startDay = (string)strtotime($startDay);
      $endDay = date('Y') . '-' . date('m') . '-' . sprintf("%02d", $monday += 7);
      $endDay = (string)strtotime($endDay);

      return $this->querys->COUNT(array('time_stamp' => array('$gte' => $startDay, '$lte' => $endDay)), 'Likes');
    }

    function fromMonth($month) {
        $startMonth = date('Y') . '-' . $month . '-' . '01';
        $startMonth = (string)strtotime($startMonth);
        $endMonth = date('Y') . '-' . sprintf("%02d", $month += 1) . '-' . '01';
        $endMonth = (string)strtotime($endMonth);

      return $this->querys->COUNT(array('time_stamp' => array('$gte' => $startMonth, '$lte' => $endMonth)), 'Likes');
    }
  }
