<?php
  require('./connectionHandler.php');

  $timeSpan = $_GET['time'];

  if($timeSpan == "week"){
    $labels = json_encode(array('Mon', 'Tue', 'Wen', 'Thu', 'Fri', 'Sat', 'Sun'));
    $week = $getDates->getWeek();

    foreach ($week as $day) {
      $likes[] = $countLikes->fromDay($day);
      $dislikes[] = $countDislikes->fromDay($day);
    }

    $likes = json_encode($likes); echo $likes;
    $dislikes = json_encode($dislikes);
  }else if($timeSpan == "month"){
    $labels = json_encode(array('Week 1', 'Week 2', 'Week 3', 'Week 4'));

    $mondays = $getDates->getMondays();

    foreach ($mondays as $monday) {
      $likes[] = $countLikes->fromWeek($monday);
      $dislikes[] = $countDislikes->fromWeek($monday);
    }

    $likes = json_encode($likes);
    $dislikes = json_encode($dislikes);
  }else if($timeSpan == "year"){
    $labels = json_encode(array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'));

    for($month = 1; $month <= 12; $month++){
      $month = sprintf("%02d", $month);
      $likes[] = $countLikes->fromMonth($month);
      $dislikes[] = $countDislikes->fromMonth($month);
    }

    $likes = json_encode($likes); echo $likes;
    $dislikes = json_encode($dislikes);
  }

$_SESSION['labels'] = $labels;
$_SESSION['likes'] = $likes;
$_SESSION['dislikes'] = $dislikes;
header("Location: ./statsChart.php");
