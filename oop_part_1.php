<?php
class Account{
	private $balance;
    
    function __construct($initialBalance){
    	
        if($initialBalance > 0){
        	$this->balance = $initialBalance;
        }else{
        	echo "Balance is 0";
        }
    	
    }
    
   
    
    function deposit($deposit){
    	$this->deposit=$deposit;
        if ($deposit > 0 ){
        	//$this->balance =$this->balance + $deposit;
        	$this->balance += $deposit;
        }
        
    }
    
    function getBalance(){
    	return $this->balance;
        
    }

}

	$checkBalance = new Account(5000);
    
    //$checkBalance->setBalance(6000);
    $checkBalance->deposit(510);
    echo $checkBalance->getBalance();
