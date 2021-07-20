<?php require 'head.php'?>
    

    <div class="container pt-5">
        <div class="row align-items-center p-2">
            <div class="col-4">
                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">this is contact form</div>
                    <div class="card-body">
                        <h5 class="card-title">fill in the info</h5>
                        <p class="card-text">we will call you back.</p>
                    </div>
                </div>
            </div>
            <div class="col-8">
            <form class="form-style p-4 text-white" method="GET" action="form.php">
                <div class="form-group">
                    <label class="text-center d-block" for="exampleInputName">Name</label>
                    <input name="name" type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter name">
                    <small id="nameHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
                </div>

                <div class="form-group">
                    <label class="text-center d-block" for="exampleInputEmail1">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                <div class="form-group">
                    <label class="text-center d-block" for="exampleInputEmail1">Date</label>
                    <input name="date" type="datetime-local" class="form-control" id="exampleInputdate" aria-describedby="dateHelp" placeholder="Enter date">
                    <small id="dateHelp" class="form-text text-muted">type here date ...</small>
                </div>

                <button type="submit" class="btn btn-block btn-lg btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>

<?php require 'footer.php' ?>