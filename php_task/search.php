<?php 
    $res = $_GET['res'];

    require 'head.php';

    $flowers = array( 'ahmed' , 'ali' , 'alaa' );

    $result = "danger";

for($i=0; $i<=3; $i++)
    
{
    if($res == $flowers[$i])
    {
        
      $result = "success" ;
        
        break;
    }
    

}
?>
            <div class="alert alert-<?php echo $result ?>" role="alert">
              
                <?php
                    if($result == "success")
                    {
                        echo "this name is in array";
                    }
                 else 
                 {
                     echo "this name is not  in array";
                 }
                ?>
            </div>

<?php require './footer.php';?>

