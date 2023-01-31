<?php include("header.php")?>


<div class="page-body">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>Add New Vendor
                                <small>Enter information below</small>
                            </h3>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item">Dashboard </li>
                                <li class="breadcrumb-item">Vendors </li>
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
                                                <label for="vendorname" class="col-form-label pt-0">Vendor Name</label>
                                                <input type="text" class="form-control" id="vendorname" name="vendorname" aria-describedby="name" placeholder="Vendor Name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="vendoremail" class="col-form-label pt-0">Vendor Email</label>
                                                <input type="email" class="form-control" id="vendoremail" name="vendoremail" placeholder="Vendor Email">
                                            </div>
                                            <div class="mb-3">
                                                <label for="vendorphone" class="col-form-label pt-0">Vendor Phone</label>
                                                <input type="text" class="form-control" id="vendorphone" name="vendorphone" placeholder="Vendor phone">
                                            </div>
                                            <div class="mb-3">
                                                <label for="vendorcompanyname" class="col-form-label pt-0">Company Name</label>
                                                <input type="text" class="form-control" id="vendorcompanyname" name="vendorcompanyname" placeholder="Company name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="vendorcompanyemail" class="col-form-label pt-0">Company Email</label>
                                                <input type="email" class="form-control" id="vendorcompanyemail" name="vendorcompanyemail" placeholder="Company email">
                                            </div>
                                            <div class="mb-3">
                                                <label for="vendorcompanyaddress" class="col-form-label pt-0">Company Address</label>
                                                <textarea class="form-control" id="vendorcompanyaddress" name="vendorcompanyaddress" placeholder="Company address"></textarea>
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
    $vendorname = stripslashes($_REQUEST['vendorname']);
    //escapes special characters in a string
    $vendorname = mysqli_real_escape_string($link, $vendorname);

    $vendoremail = stripslashes($_REQUEST['vendoremail']);
    $vendoremail = mysqli_real_escape_string($link, $vendoremail);

    $vendorphone = stripslashes($_REQUEST['vendorphone']);
    $vendorphone = mysqli_real_escape_string($link, $vendorphone);

    $vendorcompanyname = stripslashes($_REQUEST['vendorcompanyname']);
    $vendorcompanyname = mysqli_real_escape_string($link, $vendorcompanyname);

    $vendorcompanyemail = stripslashes($_REQUEST['vendorcompanyemail']);
    $vendorcompanyemail = mysqli_real_escape_string($link, $vendorcompanyemail);

    $vendorcompanyaddress = stripslashes($_REQUEST['vendorcompanyaddress']);
    $vendorcompanyaddress = mysqli_real_escape_string($link, $vendorcompanyaddress);


    if(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i', trim($vendoremail))){
        $errors[] = "Please enter a valid vendor email.";
    }
    if(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i', trim($vendorcompanyemail))){
        $errors[] = "Please enter a valid vendor company email.";
    }


    if(empty($errors) == true){

        $query    = "INSERT INTO `vendors`(`vendorname`, `vendoremail`, `vendorphone`, `vendorcompanyname`, `vendorcompanyemail`, `vendorcompanyaddress`) VALUES ('$vendorname','$vendoremail','$vendorphone','$vendorcompanyname','$vendorcompanyemail','$vendorcompanyaddress')";
        $result   = mysqli_query($link, $query);
        echo '<span></span>';
        echo "<script type='text/javascript'>";
        echo "swal('Success!', 'Vendor added successfully!', 'success');";

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