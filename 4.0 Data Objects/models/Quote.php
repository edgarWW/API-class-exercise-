<?php

namespace Models;

require_once '..our_outoloader.php'

class Quote{

  private $db;

  public $qid;
  public $quote;
  public $author;
  public $dob;
  public $dod;
  public $category;

  public funcction __construct(){
    //connect to the database
    $this->db= new  \Konekta();

  }
  public function getQuote($id){
    $id = $this->konn->real_escape_string($id);
    $sql = "SELECT * FROM quote WHERE qid=$id";

    //execute
    $result = $this->db->query($sql);
    var_dump($result->fetch_row());

    echo $sql;
  }

$first_quote =new Quote();
//SQL Injection
$bad_id = "12 OR '1 = 1'";
$first_quote->getQuote($bad_id);
