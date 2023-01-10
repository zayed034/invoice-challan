<?php include("header.php")?>


<div class="page-body">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>Add New User
                                <small>Enter information below</small>
                            </h3>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item">Dashboard </li>
                                <li class="breadcrumb-item">Users  </li>
                                <li class="breadcrumb-item active">Add New</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                        <div class="col-sm-12 col-xl-6">
                                <div class="card">
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="theme-form">
                                    <div class="card-body">
                                            <div class="mb-3">
                                                <label for="username" class="col-form-label pt-0">Name</label>
                                                <input type="text" class="form-control" id="username" name="username" aria-describedby="name" placeholder="Name" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="userusername" class="col-form-label pt-0">UserName</label>
                                                <input type="text" class="form-control" id="userusername" name="userusername" placeholder="Username" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="useremail" class="col-form-label pt-0">Email</label>
                                                <input type="email" class="form-control" id="useremail" name="useremail" placeholder="User Email" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="userrole" class="col-form-label pt-0">Role</label>
                                                <select class="form-control" id="userrole" name="userrole" required>
                                                    <option value="admin">Admin</option>
                                                    <option value="user">User</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="userpassword" class="col-form-label pt-0">Password</label>
                                                <input type="password" class="form-control" id="userpassword" name="userpassword" placeholder="user password" required>
                                            </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>


<?php include("footer.php")?>


<?php
if(isset($_POST["submit"])){
    $errors= array();
    // removes backslashes
    $name = stripslashes($_REQUEST['username']);
    //escapes special characters in a string
    $name = mysqli_real_escape_string($link, $name);

    $userusername = stripslashes($_REQUEST['userusername']);
    $userusername = mysqli_real_escape_string($link, $userusername);

    $useremail = stripslashes($_REQUEST['useremail']);
    $useremail = mysqli_real_escape_string($link, $useremail);

    $userrole = stripslashes($_REQUEST['userrole']);
    $userrole = mysqli_real_escape_string($link, $userrole);

    $userpassword = stripslashes($_REQUEST['userpassword']);
    $userpassword = mysqli_real_escape_string($link, $userpassword);


    if($name == "" || $userusername == "" || $useremail == "" || $userrole == "" || $userpassword == ""){
        $errors[] = "All fields are required.";
    }

    if(!preg_match('/^[a-zA-Z0-9_]+$/', trim($userusername))){
        $errors[] = "Username can only contain letters, numbers, and underscores.";
    }

    if(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i', trim($useremail))){
        $errors[] = "Please enter a valid email.";
    }

    if(strlen(trim($userpassword)) < 6){
        $errors[] = "Password must have atleast 6 characters.";
    }


    if(empty($errors) == true){

        $userpassword = password_hash($userpassword, PASSWORD_DEFAULT);

        $query    = "INSERT INTO `users`(`name`, `username`, `email`, `role`, `password`) VALUES ('$name','$userusername','$useremail','$userrole','$userpassword')";
        $result   = mysqli_query($link, $query);

        if($result == true){

            echo '<span></span>';
            echo "<script type='text/javascript'>";
            echo "swal('Success!', 'User added successfully!', 'success');";
            echo "</script>";

        }
        else{
            
            $mysqlerror = mysqli_error($link);

            echo '<span></span>';
            echo "<script type='text/javascript'>";
            echo "swal('Error!', 'Duplicate Entry!', 'error');";
            echo "</script>";
        }


        
    }
    else{

        $errors = implode(" ", $errors);
        echo '<span></span>';
        echo "<script type='text/javascript'>";
        echo "swal('Error!', '$errors', 'error');";

        echo "</script>";
    }

}

?>