<?php
  $file = file_get_contents(__DIR__."/../graph.log");

  $parsed = explode("\n", $file);
  $total = array();
  foreach($parsed as $line){
    $breaked = explode(" ",$line);
    $items = array();
    foreach($breaked as $item){
      $exploded = explode("=",$item);
      $items[$exploded[0]] = $exploded[1];
    }
    $total[$items['time']] = $items;
    
  }
  echo json_encode($total);

?>