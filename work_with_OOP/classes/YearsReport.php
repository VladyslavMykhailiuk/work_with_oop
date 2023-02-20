<?php

namespace classes;

class YearsReport extends Report
{
public function getYear() :int
{
return explode('.',$this->reportDate)[2];
}
}