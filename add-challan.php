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
                                                <label for="clientcompanyname" class="col-form-label pt-0">To M/S</label>
                                                <select  class="form-control" id="clientcompanyname" name="clientcompanyname" aria-describedby="company name">
                                                    <option value="sabbir">sabbir</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="clientcompanyaddress" class="col-form-label pt-0">Address</label>
                                                <textarea  class="form-control" id="clientcompanyaddress" name="clientcompanyaddress" placeholder="Client Company Address" cols="5" rows="5" disabled></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="clientname" class="col-form-label pt-0">Buyer</label>
                                                <input type="text" class="form-control" id="clientname" name="clientname" placeholder="Enter Buyer Name" disabled>
                                            </div>
                                            <div class="mb-3">
                                                <label for="styleno" class="col-form-label pt-0">Style No.</label>
                                                <input type="text" class="form-control" id="styleno" name="styleno" placeholder="Style Number">
                                            </div>
                                             <div class="mb-3">
                                                <label for="jobno" class="col-form-label pt-0">Job No.</label>
                                                <input type="text" class="form-control" id="jobno" name="jobno" placeholder="Job Number">
                                            </div>
                                            <div class="mb-3">
                                                <label for="desofgood" class="col-form-label pt-0">Description of Goods</label>
                                                <select name="desofgood" id="desofgood" class="form-control">
                                                    <option value="shirt">shirt</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                            <label for="color" class="col-form-label pt-0">Colors</label>
                                                <select name="color" id="color" class="form-control">
                                                    <option value="red">Red</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                            <label for="size" class="col-form-label pt-0">Size</label>
                                                <select name="size" id="size" class="form-control">
                                                    <option value="xl">XL</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="quantity" class="col-form-label pt-0">Quantity</label>
                                                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Put your Quantity">
                                            </div>
                                            <div class="mb-3">
                                            <label for="unit" class="col-form-label pt-0">unit</label>
                                                <select name="unit" id="unit" class="form-control">
                                                    <option value="box">box</option>
                                                </select>
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