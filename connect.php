<?php
class Connect{
    public $server;
    public $dbName;
    public $username;
    public $password;
    public function __construct()
    {
        $this->server   ="z3iruaadbwo0iyfp.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
        $this->username ="f3lywvnjtk1qj39r";
        $this->password ="io9bjwsft55pq8x8";
        $this->dbName   ="x5b6luuu9xt5dpz3";
    }

    // Option 1:mysqli
    function connectToMySQL():mysqli{
    $conn = new mysqli($this->server,
    $this->username, $this->password, $this->dbName);
    
    if($conn->connect_error){
        die("Failed ".$conn->connect_error);
    }else{
        
    }
    return $conn;
    }
    //option2 :PDO
    function connectToPDO():PDO{
        try{
            $conn = new PDO("mysql:host=$this->server;dbname=$this->dbName",$this->username,$this->password);
            
        }catch(PDOException $e){
            die("Falied " .$e);
        }
        return $conn;
    }
}
$c = new Connect();
$c->connectToPDO();
// $c->connectToMySQL();
?>