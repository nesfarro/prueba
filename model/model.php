<?php

class Service {
    
    private $servicio;
    private $db;

    public function __construct() {
        $this->servicio = array();
        $this->db = new PDO('mysql:host=178.128.146.252;dbname=admin_sigmatest', "admin_sigmauser", "pfaDKIJyPF");
    }

    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }


    public function getServicios(){
        self::setNames();
        $sql="select * from contacts";
        foreach ($this->db->query($sql) as $res) {
            $this->servicio[] = $res;
        }
        return $this->servicio;
        $this->db = null;
    }


    public function loadStates()
    {
        $data = file_get_contents("https://sigma-studios.s3-us-west-2.amazonaws.com/test/colombia.json");
        $states = json_decode($data, true);
        $result='';
        $result.='<option>Seleccione departamento</option>';        
        foreach ($states as $clave => $valor) {
          $result .='<option value="'.$clave.'">'.$clave.'</option>';
        }
        return $result;
    }

    public function loadCities($state)
    {
        $data = file_get_contents("https://sigma-studios.s3-us-west-2.amazonaws.com/test/colombia.json");
        $states = json_decode($data, true);

        $result.='';   
        foreach ($states[$state] as $clave => $valor) {
            $result .='<option value="'.$valor.'">'.$valor.'</option>';
        }     
        echo $result;
    }

    public function setContact($name,$email,$state,$city) {

        self::setNames();
        $sql = "INSERT INTO contacts(name, email,state,city) VALUES ('" . $name . "', '" . $email . "', '" . $state . "', '" . $city . "')";
        //$sql="select name, email from contacts";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}