<?php

class Book{
    
    private $title;
    private $author;
    private $page;
    
    function __construct($title, $author, $page){
        
        $this->title    = $title;
        $this->author   = $author;
        $this->page     = $page;
        
        
    }
    
    function getTitle(){
        return $this->title;
    }
    
    function getAuthor(){
        
        return $this->author;
    }
    
    function getPage(){
        return $this->page;
    }
    
    function getSummary(){
       return "The book name is {$this->title} The Author is {$this->author} and page is {$this->page}"; 
    }
    
}

$publish = new Book("Harry Poter", "J. K. Rwoling", 150);
echo $publish->getTitle() . "<br>";
echo $publish->getAuthor(). "<br>";
echo $publish->getPage(). "<br>";
echo $publish->getSummary(). "<br>";



