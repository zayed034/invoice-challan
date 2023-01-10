<?php include("header.php")?>


<div class="page-body">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>Add New Size
                                <small>Enter information below</small>
                            </h3>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item">Dashboard </li>
                                <li class="breadcrumb-item">Sizes  </li>
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
                                                <label for="sizename" class="col-form-label pt-0">Size Name</label>
                                                <input type="text" class="form-control" id="sizename" name="sizename" aria-describedby="size name" placeholder="Size name">
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
    $sizename = stripslashes($_REQUEST['sizename']);
    //escapes special characters in a string
    $sizename = mysqli_real_escape_string($link, $sizename);

    if($sizename == ""){
        $errors[]="Please give a size name.";
    }


    if(empty($errors) == true){

        $query    = "INSERT into `sizes` (sizename)
                     VALUES ('$sizename')";
        $result   = mysqli_query($link, $query);
        echo '<span></span>';
        echo "<script type='text/javascript'>";
        echo "swal('Success!', 'Size added successfully!', 'success');";

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