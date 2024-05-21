<?php 
class service_model
{
    private $cin;
    private $hebergement;
    private $transport;
    private $guide;
    private $visaetdoc;
    private $santeetsecurite;

    public function __construct($cin, $hebergement, $transport, $guide,$visaetdoc,$santeetsecurite)
    {
        $this->cin = $cin;
        $this->hebergement = $hebergement;
        $this->transport = $transport;
        $this->guide = $guide;
        $this->visaetdoc = $visaetdoc;
        $this->santeetsecurite = $santeetsecurite;

}
public function getcin()
    {
        return $this->cin;
    }

    public function setcin($cin)
    {
        $this->cin = $cin;
    }
    public function gethebergement()
    {
        return $this->hebergement;
    }

    public function sethebergement($hebergement)
    {
        $this->hebergement = $hebergement;
    }
    public function gettransport()
    {
        return $this->transport;
    }

    public function settransport($transport)
    {
        $this->transport = $transport;
    }
    public function getguide()
    {
        return $this->guide;
    }

    public function setguide($guide)
    {
        $this->guide = $guide;
    }
    public function getvisaetdoc()
    {
        return $this->visaetdoc;
    }

    public function setvisaetdoc($visaetdoc)
    {
        $this->visaetdoc = $visaetdoc;
    }
    public function getsanteetsecurite()
    {
        return $this->santeetsecurite;
    }

    public function setsanteetsecurite($santeetsecurite)
    {
        $this->santeetsecurite = $santeetsecurite;
    }
}
?>