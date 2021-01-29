<?php
    include_once 'header.php'
?>

    <div class="container">
        <div class="jumbotron my-5 w-50 mx-auto">
            <form action="signup_inc.php" method="POST">
                <div class="form-group">
                    <label >First Name</label>
                    <input type="text" class="form-control" required name="FirstName">
                </div>
                <div class="form-group">
                    <label >Last Name</label>
                    <input type="text" class="form-control" required name="LastName">
                </div>
                <div class="form-group">
                    <label >Email Address</label>
                    <input type="email" class="form-control" required name="Email">
                </div>
                <div class="form-group">
                    <label >Country</label>
                    <input type="text" class="form-control" required name="Country">
                </div>
                <div class="form-group">
                    <label >Company</label>
                    <input type="text" class="form-control" required name="Company">
                </div>
                <div class="form-group">
                    <label >Username</label>
                    <input type="text" class="form-control" required name="Username">
                </div>
                <div class="form-group">
                    <label >Password</label>
                    <input type="password" class="form-control" required name="pwd">
                </div>
                <div class="form-group">
                    <label >Role</label><br>
                    <select name="role" class="btn btn-secondary dropdown-toggle w-100">
                        <option value="1">Admin</option>
                        <option value="2">Distributor</option>                    
                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">SIGNUP</button>
            </form>
        </div>
    </div>

    
<?php
    include_once 'footer.php'
?>