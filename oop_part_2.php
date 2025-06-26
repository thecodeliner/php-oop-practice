<?php
$start = microtime(true);
class Student{
    
    private $name;
    private $marks;
    
    function setName($name){
        $this->name = $name;
        
    }
    
    function setMarks($marks = null){
       if ($marks === null) {
        return "Number not provided";
    }
       
       if($marks >= 0 && $marks <= 100  ){
            $this->marks = $marks;
            
        }else{
            return "Enter a valid number";
        }
        
    }
    
    
    function getName (){
        
        return $this->name;
    }
    
    function getMarks (){
        
        return $this->marks;
    }
    
    function getGrade(){
       //$marks = $this->marks ;
        
        if($this->marks >= 80 && $this->marks <=100){
            return " A+";
        }elseif($this->marks >= 70 && $this->marks <=79){
            return " A";
        }elseif($this->marks >= 60 && $this->marks <=69){
            return " A-";
        }elseif($this->marks >= 50 && $this->marks <=59){
            return " B";
        }elseif($this->marks >= 0 && $this->marks <=49){
            return " F";
        }else{
            return "Not result found";
        }
    }
    
    
}

$result = new Student();

$result->setName("John");
echo $result->setMarks(50). "<br>";
echo "Name is : " . $result->getName() . "<br>";
echo "Total Marks : " . $result->getMarks(). "<br>";
echo "Grade : ". $result->getGrade(). "<br>";

$end = microtime(true);
echo "Execution time: " . round(($end - $start), 5) . " seconds";
?>
