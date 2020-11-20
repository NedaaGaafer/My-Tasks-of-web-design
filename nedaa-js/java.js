/*global document*/

function myFun() {
    
    "use strict";
    
    var
    
        inputOne = document.getElementById("one").value,
        
        inputTwo = document.getElementById("two").value,
     
        number1 = Number(inputOne),
    
        number2 = Number(inputTwo),
    
        myCalc = number1 + number2,
        
        myPrint = document.getElementById("sec");
        
    
    if (isNaN(number1) && isNaN(number2)) {
        
        myPrint.innerHTML = "this is not number";
        
        
    } else if (isNaN(number1) || isNaN(number2)) {
        
        myPrint.innerHTML = "this is not number";
        
        
    } else if (number1 === " " || number2 === " ") {
        
        myPrint.innerHTML = "please enter number";
        
    } else if (number1 === " " || number2 === " ") {
        
        myPrint.innerHTML = "please enter number";
        
    } else {
          
        myPrint.innerHTML = myCalc;
        
    } 
    
}

function myImage() {
    
    var images = document.getElementById('sear').value,
        
        low = document.getElementById('sear').value.toLowerCase();
    
    if(images == "hunter x hunter" || low == "hunter x hunter" ){
        
        document.getElementById('nedaa').innerHTML="<img src ='../nedaa-js/images/Hunter%20.jpg'" + "</img>";
    }
        else if(images == "naruto" || low == "naruto" ){
            
            document.getElementById('nedaa').innerHTML="<img src ='../nedaa-js/images/naruto%20us.jpg'" + "</img>";
        }
    else if (images == "attack on titan" || low == "attack on titan" ){
        document.getElementById('nedaa').innerHTML="<img src ='../nedaa-js/images/aot.jpg'" + "</img>";
    }
    
    else{
        document.getElementById('nedaa').innerHTML= "not exist"
    }
    
}

 
