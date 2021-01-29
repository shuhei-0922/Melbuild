<?php
    include_once 'header.php';
    require_once "dbConnect.php";
?>


        <div class="jumbotron my-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>USERNAME</th>
                    <th>Email Address</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    //Read Data
                    $sql = "SELECT * FROM users";
                    $result = mysqli_query($conn, $sql);
                
                    if (mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                            <th><?php echo $row['id'] ?></th>
                            <td><?php echo $row['usersName'] ?></td>
                            <td><?php echo $row['usersUID'] ?></td>
                            <td><?php echo $row['usersEmail'] ?></td>
                    </tr>

                <?php            
                        }
                    } else {
                        echo "0 results";
                    }
                ?>
            </tbody>
        </table>
        </div>

    
<?php
    include_once 'footer.php'
?>
