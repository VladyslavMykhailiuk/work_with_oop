<?php

namespace classes;

class WeeksReport extends Report
{
 public function getNumberOfWeek() :int
 {
     $number = strtotime($this->reportDate);
     return date("W",$number);
 }
}