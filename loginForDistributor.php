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

            <h1>PLEASE LOGIN</h1>
            <hr>
            <form action="login_inc.php" method="POST">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="userName">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>

                <button type="submit" name="submit" class="btn btn-info">Log-in</button>
            </form>
        </div>

</div>

<?php
    include_once 'footer.php'
?>
