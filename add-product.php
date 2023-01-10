<?php include("header.php")?>

<div class="page-body">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>Add New Product
                                <small>Enter information below</small>
                            </h3>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item">Dashboard </li>
                                <li class="breadcrumb-item">Products  </li>
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
                                <form class="theme-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                                    <div class="card-body">
                                            <div class="mb-3">
                                                <label for="productname" class="col-form-label pt-0">Product Name</label>
                                                <input type="text" class="form-control" id="productname" name="productname" aria-describedby="product name" placeholder="Product name" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="productcategory" class="col-form-label pt-0">Category</label>
                                                <select name="productcategory" id="productcategory" class="form-control">
                                                    <option value="Shirt">Undefined</option>
                                                    <option value="Shirt">Shirt</option>
                                                    <option value="Pant">Pant</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="productimage" class="col-form-label pt-0">Product Image</label>
                                                <input type="file" class="form-control" id="productimage" name="productimage">
                                            </div>
                                            <div class="mb-3">
                                                <label for="productdescription" class="col-form-label pt-0">Description</label>
                                                <textarea name="productdescription" rows="5" class="form-control" id="productdescription" placeholder="Write Product Description"></textarea>
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
    $productname = stripslashes($_REQUEST['productname']);
    //escapes special characters in a string
    $productname = mysqli_real_escape_string($link, $productname);

    $productcategory = stripslashes($_REQUEST['productcategory']);
    $productcategory = mysqli_real_escape_string($link, $productcategory);

    $productdescription = stripslashes($_REQUEST['productdescription']);
    $productdescription = mysqli_real_escape_string($link, $productdescription);

    $file_name = $_FILES['productimage']['name'];
    $file_size =$_FILES['productimage']['size'];
    $file_tmp  =$_FILES['productimage']['tmp_name'];
    $file_type =$_FILES['productimage']['type'];
    $file_ext  =strtolower(end(explode('.',$_FILES['productimage']['name'])));
    $extensions= array("jpeg","jpg","png");

    if($productname == ""){
        $errors[]="Please give a product name.";
    }

    if(in_array($file_ext,$extensions)=== false){
        $errors[]="Please choose a valid image.";
    }

    if($file_size > 2097152){
        $errors[]='File size should not exceed 2 MB';
    }


    if(empty($errors)== true){

        $query    = "INSERT into `products` (name, category, image, description)
                     VALUES ('$productname', '$productcategory', '$file_name', '$productdescription')";
        $result   = mysqli_query($link, $query);

        move_uploaded_file($file_tmp,"images/".$file_name);
        echo '<span></span>';
        echo "<script type='text/javascript'>";
        echo "swal('Success!', 'Product added successfully!', 'success');";

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