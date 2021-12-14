    <?php 
        include "config.php";

        if (isset($_POST["update"])){
            $user_id=$_POST['user_id'];
            $first_name=$_POST['first_name'];
            $last_name=$_POST['last_name'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $gender=$_POST['gender'];
        
        $sql="UPDATE users set first_name='$first_name',last_name='$last_name',email='$email',password='$password',gender='$gender' WHERE id='$user_id'";
        $result=$conn->query($sql);
        
        if ($result==true){
            
            echo "Record Updated Successfully";
            header('Location: view.php');
        }
        else{
            echo "Error".$conn.'<br>'.$conn->error;
        }


        }

        if (isset($_GET['id'])){
            $user_id=$_GET['id'];

            $sql="SELECT * FROM users WHERE id='$user_id'";
            $result=$conn->query($sql);

            if ($result->num_rows>0){
                while ($row=$result->fetch_assoc()){
                    $first_name=$row['first_name'];
                    $last_name=$row['last_name'];
                    $email=$row['email'];
                    $password=$row['password'];
                    $gender=$row['gender'];
                    $id = $row['id'];
                }
                ?>
         
            <h2>User Update Form</h2>
            <form action="" method="post">
            
                <legend>Personal Information</legend>
                First Name:<br>
                <input type="text" name="first_name" value="<?php echo $first_name;?>"><br>
                <input type="hidden" name="user_id" value="<?php echo $id;?>">
                Last Name:<br>
                <input type="text" name="last_name" value="<?php echo $last_name;?>"><br>
                Email:<br>
                <input type="text" name="email" value="<?php echo $email;?>"><br>
                Password:<br>
                <input type="password" name="password" value="<?php echo $password;?>"><br>
                Gender:<br>
                <input type="radio" name="gender" value="Male" <?php if($gender=='Male'){ echo 'Checked';} ?> >Male</input><br>
                <input type="radio" name="gender" value="Female" <?php if($gender=='Male'){ echo 'Checked';} ?>>Female</input><br>

                <br><br>
                <input type="submit" value="Update" name="update">
            
            </form>
    </body>
    </html>    
            

    <?php

} else{ 

    header('Location: view.php');

} 

}

?> 