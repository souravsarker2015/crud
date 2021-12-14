    <?php 
        include "config.php"; 

        $sql="select * from users";
        $result=$conn->query($sql);

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <h2>users</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Gender</th>
                    <th>Action</th>

                </tr>
            </thead>

            <tbody>
                <?php 
                    if($result->num_rows>0){
                        while($row = $result->fetch_assoc()){
                ?>
                    
                

                <tr>
                    <td><?php echo $row['id'] ; ?></td>
                    <td><?php echo $row['first_name'] ; ?></td>
                    <td><?php echo $row['last_name'] ; ?></td>
                    <td><?php echo $row['email'] ; ?></td>
                    <td><?php echo $row['password'] ; ?></td>
                    <td><?php echo $row['gender'] ; ?></td>
                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id'] ; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'] ; ?>">Delete</a></td>
                </tr>
                <?php }
            }
            ?>
            </tbody>

        </table>
        </div>
    </body>
    </html>