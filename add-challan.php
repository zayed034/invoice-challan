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
                                        <div class="row">
                                        <div class="mb-3 col-md-6">
                                                <label for="clientcompanyname" class="col-form-label pt-0">To M/S</label>
                                                <select  class="form-control" id="clientcompanyname" name="clientcompanyname" aria-describedby="company name">
                                                <?php
                                                        $query ="SELECT `clientcompanyname` FROM `clients`";
                                                        $result = $link->query($query);
                                                        if($result->num_rows> 0){
                                                            $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
                                                            foreach ($options as $option){
                                                                echo '<option value="'.$option['clientcompanyname'].'">'.$option['clientcompanyname'].'</option>';
                                                            }
                                                        }
                                                        ?>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="clientname" class="col-form-label pt-0">Buyer</label>
                                                <?php
                                                        $query ="SELECT `clientname` FROM `clients` LIMIT 1";
                                                        $result = $link->query($query);
                                                        if($result->num_rows> 0){
                                                            $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
                                                            foreach ($options as $option){
                                                                echo '<input type="text" class="form-control" id="clientname" name="clientname" value="'.$option['clientname'].'" disabled>';
                                                            }
                                                        }
                                                        ?>
                                                
                                            </div>
                                        </div>
                                            
                                            <div class="mb-3 col-md-12">
                                                <label for="clientcompanyaddress" class="col-form-label pt-0">Address</label>
                                                <?php
                                                        $query ="SELECT `clientcompanyaddress` FROM `clients` LIMIT 1";
                                                        $result = $link->query($query);
                                                        if($result->num_rows> 0){
                                                            $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
                                                            foreach ($options as $option){
                                                                echo '<textarea  class="form-control" id="clientcompanyaddress" name="clientcompanyaddress" placeholder="Client Company Address" cols="3" rows="3" disabled>'.$option['clientcompanyaddress'].'</textarea>';
                                                            }
                                                        }
                                                        ?>
                                                
                                            </div>
                                            
                                            <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="styleno" class="col-form-label pt-0">Style No.</label>
                                                <input type="text" class="form-control" id="styleno" name="styleno" placeholder="Style Number">
                                            </div>
                                             <div class="mb-3 col-md-6">
                                                <label for="jobno" class="col-form-label pt-0">Job No.</label>
                                                <input type="text" class="form-control" id="jobno" name="jobno" placeholder="Job Number">
                                            </div>
                                            </div>
                                            <div id="productcontainer">
                                                <div class="row">
                                                    <div class="mb-3 col-md-3">
                                                        <label for="product" class="col-form-label pt-0">Select Product</label>
                                                        
                                                        <select name="desofgood" id="desofgood" class="form-control">
                                                        <?php
                                                        $query ="SELECT `name` FROM `products`";
                                                        $result = $link->query($query);
                                                        if($result->num_rows> 0){
                                                            $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
                                                            foreach ($options as $option){
                                                                echo '<option value="'.$option['name'].'">'.$option['name'].'</option>';
                                                            }
                                                        }
                                                        ?>
                                                            
                                                        </select>
                                                    </div>
                                                    <div class="mb-3 col-md-2">
                                                        <label for="color" class="col-form-label pt-0">Select Color</label>
                                                        <select name="color" id="color" class="form-control">
                                                        <?php
                                                        $query ="SELECT `colorname` FROM `colors`";
                                                        $result = $link->query($query);
                                                        if($result->num_rows> 0){
                                                            $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
                                                            foreach ($options as $option){
                                                                echo '<option value="'.$option['colorname'].'">'.$option['colorname'].'</option>';
                                                            }
                                                        }
                                                        ?>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3 col-md-2">
                                                        <label for="size" class="col-form-label pt-0">Select Size</label>
                                                        <select name="size" id="size" class="form-control">
                                                        <?php
                                                        $query ="SELECT `sizename` FROM `sizes`";
                                                        $result = $link->query($query);
                                                        if($result->num_rows> 0){
                                                            $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
                                                            foreach ($options as $option){
                                                                echo '<option value="'.$option['sizename'].'">'.$option['sizename'].'</option>';
                                                            }
                                                        }
                                                        ?>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3 col-md-3">
                                                        <label for="quantity" class="col-form-label pt-0">Quantity</label>
                                                        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Put your Quantity">
                                                    </div>
                                                    <div class="col-md-2">
                                                    <button type="button" id="save" class="btn btn-primary btn-small mt-4">Save</button>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            
                                            
                                            
                                            
                                           </div>
                                    <div class="card-footer">
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-block row">
                                        <div class="col-sm-12 col-lg-12 col-xl-12">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead class="table-primary">
                                                        <tr>
                                                            <th scope="col">Product</th>
                                                            <th scope="col">Color</th>
                                                            <th scope="col">Size</th>
                                                            <th scope="col">Quantity</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="addrow">
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                           
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>


<?php include("footer.php")?>

<script type="text/javascript">
$('document').ready(function() {
  $('#save').click(function() {
    var desofgood = $('#desofgood').val();
    var color = $('#color').val();
    var size = $('#size').val();
    var quantity = $('#quantity').val();
    if(quantity !== ''){
        //console.log('Looking good');
        $("#addrow").append('<tr><th scope="row">'+desofgood+'</th><td>'+color+'</td><td>'+size+'</td><td>'+quantity+'</td></tr>');
    }
    else{
        //console.log('empty');
        swal('Error!', 'Please add quantity', 'error');
    }
   });

   //on client change button
   $("#clientcompanyname").change(function() {    
		var clientcompanyname = $(this).find(":selected").val();
		var dataString = 'id='+ clientcompanyname;    
		$.ajax({
			url: 'getClientData.php',
			dataType: "json",
			data: dataString,
			cache: false,
			success: function(resultData) {
			   if(resultData) {
                $("#clientname").val(resultData.clientname);
                $("#clientcompanyaddress").val(resultData.clientcompanyaddress);
               } 
               else {
				swal('Error!', 'Not getting any data, Check from Clients!', 'error');
			   }   	
			} 
		});
 	}); 
})
</script>