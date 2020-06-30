<?php

//namespace Models;

class Konekta{

  //will hold our connection resource
  public $konn;

  //the configuration string
  private $config;

  public function __construct(){
    //get our configuration and save it in $config
    $this->getConfig();

    //new mysqli connection : OOP
    $this->konn = new mysqli($this->config->host,
    $this->config->username,
    $this->config->password,
    $this->config->db);

    if ($this->konn->connect_errno) {
      echo "Failed to connect to MySQL: " . $this->konn->connect_error;
      exit();
    }

  }

  public function getConfig(){

<<<<<<< HEAD
    var_dump(__DIR__.'config.json');die();

    $config_string = file_get_contents('config.json');
=======
    $config_relative_path ='config.json';
    $config_absolute_path = __DIR__.'/config.json';

    $config_string = file_get_contents($config_absolute_path);
>>>>>>> b757b72b917bbdfe69457a5970bfc1c298be9122

    $config_object = json_decode($config_string);

    $this->config = $config_object;
  }

}
