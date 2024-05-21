<?php 
class adm_model
{
    private $job;
    private $username;
    private $password;
    
    public function __construct($job ,$username, $password)
    {
        $this->job = $job;
        $this->username = $username;
        $this->password = $password;
        
}
public function getjob()
    {
        return $this->job;
    }

    public function setjob($job)
    {
        $this->job = $job;
    }
public function getusername()
    {
        return $this->username;
    }

    public function setusername($username)
    {
        $this->username = $username;
    }
    public function getpassword()
    {
        return $this->password;
    }

    public function setpassword($password)
    {
        $this->password = $password;
    }
    


}
?>