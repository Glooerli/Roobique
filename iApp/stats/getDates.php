<?php

  namespace roobique\stats;

  use DateTime;

  class getDates {
    function getWeek(){
      $weekDay = date('w');
      $weekDay -= 1;
      $week_start = date('d', strtotime('-'.$weekDay.' days'));

      for($i = 7; $i > 0; $i--){
        $week[] = sprintf("%02d", $week_start++);
      }

      return $week;
    }

    function getMondays(){
      $month = date('Y-m');
      $month = $month . '-01';
      $month = new DateTime($month);
      $monday = $month->modify('first monday')->format('d');
      $lastday = date('t');

      do {
          $mondays[] = $monday;
          $monday = sprintf("%02d", $monday += 7);
      } while ($monday < $lastday);

      return $mondays;
    }
  }
