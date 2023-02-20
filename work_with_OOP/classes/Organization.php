<?php

namespace classes;

class Organization
{
protected $organizationName;
protected $organizationINN;
protected $organizationKPP;
protected $organizationAdress;
protected $organizationDirector;

    public function __construct($organizationName = null, $organizationINN = null, $organizationKPP = null, $organizationAdress = null, $organizationDirector = null)
    {
        $this->organizationName = $organizationName;
        $this->organizationINN = $organizationINN;
        $this->organizationKPP = $organizationKPP;
        $this->organizationAdress = $organizationAdress;
        $this->organizationDirector = $organizationDirector;
    }

    public function getInformation() :string
    {
        $abbrev = explode(' ',$this->organizationDirector);
        $name = "$abbrev[0] ". mb_strtoupper($abbrev[1][0]) . "." . mb_strtoupper($abbrev[2][0]) . ".";
        return "$this->organizationName" . "<br>" . "(ІПН:$this->organizationINN\КПП:$this->organizationKPP)." . "Директор: $name" ;
    }


}