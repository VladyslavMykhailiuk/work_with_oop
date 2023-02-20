<?php

namespace classes;

abstract class Report
{
protected $reportNumber;
protected $reportName;
protected $reportText;
protected $reportAuthor;
protected $reportDate;
protected $reportVersionNumber;
protected $reportEditingDate;
    private Organization $organisation;


    public function __construct(Organization $organisation,$reportNumber, $reportName,$reportAuthor = null,$reportText = null, $reportDate = null, $reportVersionNumber = 0, $reportEditingDate = null)
    {
        $this->organisation = $organisation;
        $this->reportNumber = $reportNumber;
        $this->reportName = $reportName;
        $this->reportText = $reportText;
        $this->reportAuthor = $reportAuthor;
        $this->reportDate = $reportDate;
        $this->reportVersionNumber = $reportVersionNumber;
        $this->reportEditingDate = $reportEditingDate;
    }

    public function formAbbrev() :string
    {
      $abbrev = explode(' ',$this->reportAuthor);
      return "$abbrev[0] ". mb_strtoupper($abbrev[1][0]) . "." . mb_strtoupper($abbrev[2][0]) . ".";
//        return preg_replace('#(.*)\s+(.).*\s+(.).*#usi', '$1 $2.$3.', $this->reportAuthor);
    }

    public function formatHeader() :string
    {
        return mb_strtoupper($this->reportName);
    }

    public function setReportText(mixed $reportText): void
    {
        $this->reportText = trim($reportText);
    }

    public function save() :void
    {
      $this->reportVersionNumber++;
       $this->reportDate = date('d.m.Y');
    }

    public function render($search,$replace)
    {
      return str_replace($search,$replace,$this->reportText);
    }

    public function getOrgInfo() :string
    {
        return $this->organisation->getInformation();
    }


}