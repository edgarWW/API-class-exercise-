<?php
class student{
  //class body

  //within the class
  private $admission_number;
  private  $name;
  //to all (within the class and outside the class)
  public $name;
  //within the class and to [child classes ];inheritance
  protected $age;

  //special methods
  function  __construct($name){
    echo "Instantintiated";
  }

  fuction __construct(){
    echo "Fake Instantintiated";
  }
  //this is NOT a constructor
  fuction __construct(){


  }
  {
    // code...
  }

  //methods /behaviour
  //see the student
  function getName(){

  }
  function gpa(){

  }
}
//denote inheritance
class StudentOnScholarship extends student{

}

//object creation
//the real thing
$carlton =  new student ();
$carlton ->gpa ();
