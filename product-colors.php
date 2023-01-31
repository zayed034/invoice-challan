<?php include("header.php")?>


<div class="page-body">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>Product Colors
                                <small>Manage your product colors from here.</small>
                            </h3>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item">Dahsboard</li>
                                <li class="breadcrumb-item">Products</li>
                                <li class="breadcrumb-item active">Colors</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    
                <!--Zero Configuration  Starts -->
                <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-1" class="display">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Color name</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php
                                        $query = "SELECT * FROM colors";
                                        if ($result = $link->query($query)) {
                                            /* fetch associative array */
                                            while ($row = $result->fetch_assoc()) {
                                             echo '<tr>
                                                        <td>'.$row["id"].'</td>
                                                        <td>'.$row["colorname"].'</td>
                                                    </tr>';
                                            }
                                            /* free result set */
                                            $result->free();
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Zero Configuration  Ends -->
                    

                </div>
            </div>
        </div>
    </div>


<?php include("footer.php")?>