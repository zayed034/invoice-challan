<?php include("header.php")?>


<div class="page-body">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>Add New Clients
                                <small>Enter information below</small>
                            </h3>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item">Dashboard </li>
                                <li class="breadcrumb-item">Clients</li>
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
                                                <label for="clientcontactname" class="col-form-label pt-0">Cient Name</label>
                                                <input type="text" class="form-control" id="clientcontactname" name="clientcontactname" aria-describedby="contact name" placeholder="contact name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="clientcontactemail" class="col-form-label pt-0">Client Email</label>
                                                <input type="email" class="form-control" id="clientcontactemail" name="clientcontactemail" placeholder="contact email">
                                            </div>
                                            <div class="mb-3">
                                                <label for="clientphone" class="col-form-label pt-0">Client Phone</label>
                                                <input type="text" class="form-control" id="clientphone" name="clientphone" placeholder="client phone">
                                            </div>
                                            <div class="mb-3">
                                                <label for="clientcompanyname" class="col-form-label pt-0">Company Name</label>
                                                <input type="text" class="form-control" id="clientcompanyname" name="clientcompanyname" placeholder="company name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="clientcompanyemail" class="col-form-label pt-0">Company Email</label>
                                                <input type="email" class="form-control" id="clientcompanyemail" name="clientcompanyemail" placeholder="company email">
                                            </div>
                                            <div class="mb-3">
                                                <label for="clientcompanyaddress" class="col-form-label pt-0">Company Address</label>
                                                <textarea class="form-control" id="clientcompanyaddress" name="clientcompanyaddress" placeholder="company address"></textarea>
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
    $clientcontactname = stripslashes($_REQUEST['clientcontactname']);
    //escapes special characters in a string
    $clientcontactname = mysqli_real_escape_string($link, $clientcontactname);

    $clientcontactemail = stripslashes($_REQUEST['clientcontactemail']);
    $clientcontactemail = mysqli_real_escape_string($link, $clientcontactemail);

    $clientphone = stripslashes($_REQUEST['clientphone']);
    $clientphone = mysqli_real_escape_string($link, $clientphone);

    $clientcompanyname = stripslashes($_REQUEST['clientcompanyname']);
    $clientcompanyname = mysqli_real_escape_string($link, $clientcompanyname);

    $clientcompanyemail = stripslashes($_REQUEST['clientcompanyemail']);
    $clientcompanyemail = mysqli_real_escape_string($link, $clientcompanyemail);

    $clientcompanyaddress = stripslashes($_REQUEST['clientcompanyaddress']);
    $clientcompanyaddress = mysqli_real_escape_string($link, $clientcompanyaddress);


    if(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i', trim($clientcontactemail))){
        $errors[] = "Please enter a valid client's email.";
    }
    if(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i', trim($clientcompanyemail))){
        $errors[] = "Please enter a valid client's company email.";
    }


    if(empty($errors) == true){

        $query    = "INSERT INTO `clients`(`clientname`, `clientemail`, `clientphone`, `clientcompanyname`, `clientcompanyemail`, `clientcompanyaddress`) VALUES ('$clientcontactname','$clientcontactemail','$clientphone','$clientcompanyname','$clientcompanyemail','$clientcompanyaddress')";
        $result   = mysqli_query($link, $query);
        echo '<span></span>';
        echo "<script type='text/javascript'>";
        echo "swal('Success!', 'Client added successfully!', 'success');";

        echo "</script>";
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