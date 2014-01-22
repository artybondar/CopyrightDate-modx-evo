<?php

$start_year = (isset($start_year )) ? $start_year : "2010";

print $start_year; 
if (date('Y') != $start_year) {
  echo ' - ' . date('Y'); 
}

?>
