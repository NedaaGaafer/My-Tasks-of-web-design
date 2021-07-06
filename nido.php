<!DOCTYPE html>

<html>
    <head>
        
    </head>
    
    <body style="background:#099; padding:10px">
        
        <header style="background: #072a6f; height: 50px; position: fixed; width: 100%; margin-left:-20px; margin-top:-20px">
            <a href="#" style="text-decoration: none; color: white;display: inline-block; padding:10px; background:#333; height:30px">PHP</a>
        </header>
        
        
        <div style="color:#000; background:#666; border: 1px solid #333; padding:5px; width: 400px; margin: 70px auto " >
            
            <?php
       for($x=1; $x <= 12; $x++){
           
           
            for($i=0; $i <= 12; $i++)
            {
                $z = $x * $i;
                echo $x . "x" . $i . " = " . $z . "<br>";
            }
           
           echo "<hr>";
            
        }
      ?>
        
        </div>
    </body>
</html>