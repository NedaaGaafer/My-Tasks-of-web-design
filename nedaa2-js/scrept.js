/*global document arert*/

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
        
        alert("this is not number");
        
         myPrint.innerHTML = "please enter number";
        
        
    } else if (isNaN(number1) || isNaN(number2)) {
        
       alert("this is not number");
        
        myPrint.innerHTML = "please enter number";
        
        
    } else if (number1 === " " || number2 === " ") {
        
        alert("this is not number");
        
         myPrint.innerHTML = "please enter number";
        
    } else if (number1 === " " || number2 === " ") {
        
        alert("this is not number");
        
        myPrint.innerHTML = "please enter number";
        
        
    } else {
          
        myPrint.innerHTML = myCalc;
        
    } 
    
}
/* ************************************************************* */

function myPro(){
    
    
    
    var pro = prompt("say some thing");
    
     document.getElementById("pro").innerHTML = pro;
    
    
}

var
    myDate = document.getElementById("date");


myDate.onmouseover = function() {
    
    myDate.innerHTML = new Date();
}


var
    myConter = document.getElementById("con"),
    
    myD = document.getElementById("di");

myConter.oninput = function(){
     
   myD.innerHTML =  myConter.value.length; 
    
}

var 
    myColor = document.getElementById("color"),
    
    myBack = document.getElementById("col");
    

myColor.onmouseover = function() {
  
  myColor.style.background = myBack.value;   
    
}

function myArr() {
    
    var
        input = document.getElementById("cho").value,
        
        DIV = document.getElementById("arry"),
        
        myNum = ["one", "two", "three", "four", "five", "six"],
    
        i=0,
            
        myList = [];
        
    for(i=1; i<=input; i++){
        
        myNa = prompt("index" + i);
        
        myList[i] = myNa;
        
        DIV.innerHTML += myNum[i-1] +" " + "is" + " " + myList[i] + "<br>"
    }
        
}


















