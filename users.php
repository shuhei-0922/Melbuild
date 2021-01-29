<?php
    include_once 'header.php';
    require_once "dbConnect.php";

    //delete data
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];

        $sql ="DELETE FROM distributor WHERE id = $id";

        if(mysqli_query($conn, $sql)){
            echo "Record has been deleted!";
        } else {
            echo "Error deleting record: " .mysqli_error($conn);
        }
    }
?>


        <div class="jumbotron my-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>email</th>
                    <th>Country</th>
                    <th>Company Name</th>
                    <th>Role</th>
                    <?php 
                                    if ($_SESSION["role"] == 1){
                            ?>
                    <td>Action</td>
                    <?php
                            } 
                             ?>  
                </tr>
            </thead>
            <tbody>
                <?php
                    //Read Data
                    $sql = "SELECT * FROM distributor";
                    $result = mysqli_query($conn, $sql);
                
                    if (mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                            <td><?php echo $row['first_name'] ?></td>
                            <td><?php echo $row['last_name'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['country'] ?></td>
                            <td><?php echo $row['company_name'] ?></td>
                            <td>
                                <?php 
                                    if ($row['role'] == 1){
                                        echo "Administrator";
                                    } else {
                                        echo "Distributor";
                                    }
                                
                                
                                ?>
                            </td>
                            <?php 
                                    if ($_SESSION["role"] == 1){
                            ?>
                            <td>
                            
                                <a href="users.php?edit=<?php echo $row['id'] ?>" class="btn btn-warning">UPDATE</a>
                                <a href="users.php?delete=<?php echo $row['id'] ?>" class="btn btn-danger">DELETE</a>
                                                                
                            </td>
                            <?php
                            } 
                             ?>    
                    </tr>

                <?php            
                        }
                    } else {
                        echo "0 results";
                    }
                ?>
                <tr>
                    <?php
                        if(isset($_SESSION["role"])){
                            if($_SESSION["role"] == 1){
                    ?>
                            <td><a href="signup.php"><button class="btn btn-info">Add User</button></a></td>

                    <?php
                            }
                        }
                    ?>
                    </tr>
            </tbody>
        </table>
        </div>

    
<?php
    include_once 'footer.php'
?>
