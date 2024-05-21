<?php 
class pay_model
{
    private $card_holder;
    private $card_number;
    private $expiry_date;
    private $cvc;
    private $service;
    public function __construct($card_holder, $card_number, $expiry_date, $cvc ,$service)
    {
        $this->card_holder = $card_holder;
        $this->card_number = $card_number;
        $this->expiry_date = $expiry_date;
        $this->cvc = $cvc;
        $this->service = $service;
}
public function getcard_holder()
    {
        return $this->card_holder;
    }

    public function setcard_holder($card_holder)
    {
        $this->card_holder = $card_holder;
    }
    public function getcard_number()
    {
        return $this->card_number;
    }

    public function setcard_number($card_number)
    {
        $this->card_number = $card_number;
    }
    public function getexpiry_date()
    {
        return $this->expiry_date;
    }

    public function setexpiry_date($expiry_date)
    {
        $this->expiry_date = $expiry_date;
    }
    public function getcvc()
    {
        return $this->cvc;
    }

    public function setcvc($cvc)
    {
        $this->cvc = $cvc;
    }
    public function getservice()
    {
        return $this->service;
    }

    public function setservice($service)
    {
        $this->service = $service;
    }


}
?>