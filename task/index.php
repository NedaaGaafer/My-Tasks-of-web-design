<?php
        
$username = $_GET['username'];
$password = $_GET['password'];
$test = 0;
$new_name =  0;
$new_pass = 0;
$data = fopen('information.text', 'w+');

$the_information = array
    (
        "nedaa" => 1234,
        "mohamed" => 24567,
        "nour" => 7778
    );
    
   foreach( $the_information as $name => $pass )
   {
       if($name == $username &&  $pass == $password  )
       {
           $test = 1;
       }
       
   }


if ($test == 1)
{
      fwrite($data,$username);
      fwrite($data,$password);
}
            
else
{
    
    $new_name = $username;
    $new_pass = $password;
    
}

$the_information[$new_name] = $new_pass;
         
print_r($the_information );