<?php 
    $name = $_GET['name'];
    $email = $_GET['email'];
    $date = $_GET['date']; 
    require 'head.php';
?>


    <div class="container pt-5">
        <div class="card bg-dark text-white">
            <img class="card-img" src="https://avatars.githubusercontent.com/u/68468577?v=4" alt="Card image">

            <div class="card-img-overlay text-center">
                <h5 class="card-title">hello <?php echo $name ?></h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text">Last updated <?php echo $date ?></p>
            </div>
        </div>
    </div>

    <?php require 'footer.php'?>