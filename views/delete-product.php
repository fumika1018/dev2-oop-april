<?php include 'html/head.html';
include '../classes/Products.php';
session_start();
$id = $_GET['id'];
$products = new Products;
$products_data = $products->getProducts($id);
?>

<?php include 'navbar.php' ?>

<body class="bg-light">
    <div class="" style="height:100vh">

        <div class="row h-100 m-0">

           

                <div class="card-body">
                    <h3 class="text-center mb-2"><i class="fa-solid fa-trash"></i>Delete Product</h3>
                    <form action="../actions/delete-product.php" method="post" enctype="multipart/form-data">
                    <p class="fw-bold mb-0 text-center">Are you sure you want to delete "<?= $products_data['product_name'] ?>"?</p>        
                </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-warning w-25">Delete</button>
                        </div>

                    </form>

                </div>
            
        </div>
    </div>

</body>

<?php include 'html/foot.html' ?>