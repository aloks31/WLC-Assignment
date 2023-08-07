<?php
// Your code here!
/* 

Burgerking sells three items: 
VegBurger which needs 2 breads & 1 veg pattice
NonVegBurger which needs 2 breads & 1 non-veg pattice
TikkiBurger which needs 2 breads & 1 tikki pattice

Given bread quantity, veg pattice quantity, non-veg pattice quantity, tikki pattice quantity & price of all 3 items

Print the total maximum possible profit by making all possible items based on bread availability 

Also, test for all inputs, we would change all the values while testing, the quantity values as well as price

And program has to be optimal with respect to time & space complexity

*/

$breads = 15;
$vegPattice = 3;
$nonVegPattice = 2;
$TikkiPattice = 1;
$priceVegBurger = 100;
$priceNonVegBurger = 125;
$priceTikkiBurger = 112;

$maxProfit = 0;

     // first we divided bread into half by 
    //  that we can know maximum number of burger we can make
     $breads = floor($breads/2);
     
    // if we have breads then we are first going to make as many as non-veg Burger
    // if we dont have sufficient bread then we can make equal no of breads
    
     if($breads > 0){
         
       if($nonVegPattice > 0 && $nonVegPattice <= $breads){
           
         $breads = $breads - $nonVegPattice; 
         $maxProfit += $priceNonVegBurger * $nonVegPattice; 
       
       }else{
       
         $maxProfit += $priceNonVegBurger * $breads; 
        $breads = 0;
       
      }
    }
    
    // in this condition we are counting no of TikkiBurger can be made
    // if we dont have sufficient bread then we can make equal no of breads
    
    if($breads > 0){
        
      if($TikkiPattice > 0 && $TikkiPattice <= $breads){
          
        $breads = $breads - $TikkiPattice;
        $maxProfit += $priceTikkiBurger * $TikkiPattice; 
       
      }else{
   
        $maxProfit +=$priceNonVegBurger * $breads;
        $breads = 0;
       
      }

    }
    
    // in this condition we are counting no of VegBurger can be made
     // if we dont have sufficient bread then we can make equal no of breads
     
    if($breads > 0){

      if($vegPattice > 0 && $vegPattice <= $breads){
        $breads = $breads - $vegPattice;
        $maxProfit += $priceVegBurger * $vegPattice; 
      
      }else{
       
         $maxProfit += $priceNonVegBurger * $breads; 
        $breads = 0;
     
      }
    }
    
    echo $maxProfit

?>

