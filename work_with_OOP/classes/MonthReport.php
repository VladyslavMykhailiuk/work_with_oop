<?php

namespace classes;

class MonthReport extends Report
{
    public function getMonth() :int
    {
        return explode('.',$this->reportDate)[1];
    }
}