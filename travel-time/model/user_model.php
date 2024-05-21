<?php 
class user_model
{
    private $name;
    private $password;
    private $mail;
    public function __construct($name, $password, $mail)
    {
        $this->name = $name;
        $this->password = $password;
        $this->mail = $mail;
}
public function getname()
    {
        return $this->name;
    }

    public function setname($name)
    {
        $this->name = $name;
    }
    public function getpassword()
    {
        return $this->password;
    }

    public function setpassword($password)
    {
        $this->password = $password;
    }
    public function getmail()
    {
        return $this->mail;
    }

    public function setmail($mail)
    {
        $this->mail = $mail;
    }


}
?>