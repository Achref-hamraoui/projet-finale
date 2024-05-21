<?php 
class reserv_model
{
    private $cin;
    private $nbprsn;
    private $place;
    private $date;
    public function __construct($cin, $nbprsn, $place, $date)
    {
        $this->cin = $cin;
        $this->nbprsn = $nbprsn;
        $this->place = $place;
        $this->date = $date;
}
public function getcin()
    {
        return $this->cin;
    }

    public function setcin($cin)
    {
        $this->cin = $cin;
    }
    public function getnbprsn()
    {
        return $this->nbprsn;
    }

    public function setnbprsn($nbprsn)
    {
        $this->nbprsn = $nbprsn;
    }
    public function getplace()
    {
        return $this->place;
    }

    public function setplace($place)
    {
        $this->place = $place;
    }
    public function getdate()
    {
        return $this->date;
    }

    public function setdate($date)
    {
        $this->date = $date;
    }
    
}
?>