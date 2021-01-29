<?php
    include_once 'header.php'
?>

​<div class="container">
        <div class="jumbotron my-5">
            
            <?php 
                if(isset($_GET['signup'])){
                    if($_GET['signup'] == 'success'){

            ?>
                <div class="alert alert-success" role="alert">
                    SIGNUP SUCCESS!
                </div>
            <?php
                    }
                }
            ?>

            <?php 
                if(isset($_GET['login'])){
                    if($_GET['login'] == 'fail'){

            ?>
                <div class="alert alert-danger" role="alert">
                    Incorrect Username/Password
                </div>
            
            <?php
                    }
                }
            ?>


            <?php 
                if(isset($_GET['password'])){
                    if($_GET['password'] == 'wrong'){

            ?>
                <div class="alert alert-danger" role="alert">
                    Incorrect Password
                </div>
            
            <?php
                    }
                }
            ?>

            <h1>Request Form</h1>
            <hr>
            <form action="login_inc.php" method="POST">
                <div class="form-group">
                    <label for="">Full Name</label>
                    <input type="text" class="form-control" name="FullName">
                </div>
                <div class="form-group">
                    <label for="">E-mail</label>
                    <input type="Email" class="form-control" name="Email">
                </div>
                <div class="form-group">
                    <label for="">Company Name</label>
                    <input type="text" class="form-control" name="Company">
                </div>
                <div class="form-group">
                    <label for="">Country Name</label>
                    <input type="text" class="form-control" name="Country">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Message</label>
                    <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>    

                <button type="submit" name="submit" class="btn btn-info">SUBMIT</button>
            </form>
        </div>

</div>

<?php
    include_once 'footer.php'
?>