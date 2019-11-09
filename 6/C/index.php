<?php
    // require("config.php");
    require("fungsi.php");

    $data = getData( ) ;
    $products = array();

    foreach( getData( )  as $product )
    {
        $products[ $product["id"] ] = $product;
    }
    $cashiers = getCashier(  );
    $categories = getCategory(  );
    // var_dump( $data );
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="FIXL base core for creating Information System base on Codeigniter" />
    <meta name="author" content="FIXL Labs">

    <title>COFFE SHOP</title>
    <link rel="shortcut icon" type="image/png" href="./assets/logo/favicon.ico" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="./assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="./assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./assets/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition layout-top-nav layout-footer-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-light navbar-white">
            <div class="container">
                <a href="./" class="navbar-brand">
                    <img src="./assets/logo/coreigniter.png" alt="Coreigniter Logo" class="brand-image" style="opacity: .8">
                    <span class="brand-text font-weight-light">Arkademy <b>COFFE SHOP<b></b></span>
                </a>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    </li>
                    <!-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="./auth/register" class="nav-link">Register</a>
                </li> -->
                    <li class="nav-item d-none d-sm-inline-block">
                        <button type="button" class="btn btn-primary btn-sm bg-pink" data-toggle="modal" style="margin-left: 5px;" data-target="#add_group_">
                            ADD</button>

                    </li>
                </ul>
            </div>
        </nav>
        <!-- Promo Block -->
        <div class="row">
            <div class="col-12 p-5">
                <div class="card">
                    <div class="card-body">
                        <!--  -->
                        <div class="table-responsive">
                            <table class="table table-striped  table-hover ">
                                <thead class="bg-pink ">
                                    <tr>
                                        <th style="width:50px">No</th>
                                        <th>Cashier</th>
                                        <th>Product</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no = 0;
                                        foreach( $data as $item ):
                                    ?>
                                         <tr>
                                            <td> <?= ++$no?> </td>
                                            <td> <?= $item["cashier_name"] ?> </td>
                                            <td> <?= $item["product_name"] ?> </td>
                                            <td> <?= $item["category_name"] ?> </td>
                                            <td> <?= $item["price"] ?> </td>
                                            <td>
                                                <!--  -->
                                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" style="margin-left: 5px;" data-target="#edit_<?= $item["product_id"]?>">
                                                        Edit</button>
                                                    <!-- Modal Delete-->
                                                    <div class="modal fade" id="edit_<?= $item["product_id"]?>" role="dialog">
                                                        <div class="modal-dialog">
                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <form action="#/admin/group/edit/" method="post" accept-charset="utf-8">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Edit</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body" class="edit_product" >
                                                                        <!--  -->

                                                                        <!-- - -->
                                                                        <input type="hidden" name="id" value="<?= $item["id"] ?>" placeholder="id">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <select name="cahier_id" id="cahier_id" type="select" placeholder="Cashier" class="form-control">
                                                                                    <?= getCashierSelect( $cashiers, $item["id"]  )?>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                    <select name="product_id" id="product_id" type="select" placeholder="Cashier" class="form-control">
                                                                                        <?= getProductSelect( $products, $item["id"] )?>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <input type="text" name="category" value="<?= $item["category_name"] ?>" id="category" placeholder="Drink" class="form-control" readonly="">
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <input type="text" name="price" value="<?= $item["price"] ?>" id="price" placeholder="Price" class="form-control" readonly="">
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <br>

                                                                        <!--  -->
                                                                        <!--  -->
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn  btn-success  bg-pink">Edit</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <!--  -->
                                                <!--  -->
                                                <button type="button" class="btn btn-danger btn-sm" style="margin-left: 5px;" data-toggle="modal" data-target="#delete_<?= $item["product_id"]?>">
                                                    X</button>
                                                <!-- Modal Delete-->
                                                <div class="modal fade in" id="delete_<?= $item["product_id"]?>" role="dialog" style="display: none;" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <form action="#/admin/group/delete/" method="post" accept-charset="utf-8">
                                                                <div class="modal-header">
                                                                    <h6 class="modal-title">Delete Success</h6>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="./assets/img/image.jpg" alt="">
                                                                    <!--  -->

                                                                    <!-- - -->
                                                                    <input type="hidden" name="id" value="1" placeholder="id">
                                                                    <br>

                                                                    <!--  -->
                                                                    <!--  -->
                                                                </div>
                                                                <div class="modal-footer ">

                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--  -->

                                            </td>
                                        </tr>
                                    <?php
                                        endforeach;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!--  -->
                        <!--  -->
                        <!--  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Promo Block -->
    </div>
    <!-- ./wrapper -->

    <div class="modal fade" id="add_group_" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog"  >
            <!-- Modal content-->
            <div class="modal-content">
                <form action="#" method="post" accept-charset="utf-8">
                    <div class="modal-header">
                        <h5 class="modal-title">Add</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body" id="add_product" >
                        <!--  -->

                        <!-- - -->
                        <input type="hidden" name="id" value="" placeholder="id">
                        <div class="row">
                            <div class="col-md-12">
                                <select name="cahier_id" id="cahier_id" type="select" placeholder="Cashier" class="form-control">
                                    <?= getCashierSelect( $cashiers  )?>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <select name="product_id" id="product_id" type="select" placeholder="Cashier" class="form-control">
                                    <?= getProductSelect( $products )?>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" name="category" value="" id="category" placeholder="Drink" class="form-control" readonly="">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" name="price" value="" id="price" placeholder="Price" class="form-control" readonly="">
                            </div>
                        </div>
                        <br>
                        <br>

                        <!--  -->
                        <!--  -->
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn  btn-success  bg-pink">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="./assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="./assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="./assets/dist/js/adminlte.min.js"></script>
</body>

</html>
<script type="text/javascript">
$(document).ready(function(){
  var products = <?= json_encode( $products ) ?>;

  $("#add_product").on('change','select[name="product_id"]',function(){
        // console.log( products );
        // changeMonthTreshold( $(this).val() );
        setCategory( $("#add_product") , $(this).val() );
  });
  $(".edit_product").on('change','select[name="product_id"]',function(){
        // console.log( products );
        // changeMonthTreshold( $(this).val() );
        setCategory( $(".edit_product") , $(this).val() );
  });
  function setCategory( element, productId )
  {
    // console.log( products[ productId ].category_name );
    element.find( 'input[name="category"]' ).val( products[ productId ].category_name ) ;
    element.find( 'input[name="price"]' ).val( products[ productId ].price ) ;
  }
  
        // console.log( $("#add_product").html() );
  
});
</script>
