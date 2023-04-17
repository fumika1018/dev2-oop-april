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

            <div class="card w-25 my-auto p-1 mx-auto">

                <div class="card-body">
                    <h3 class="text-center mb-2"><i class="fa-sharp fa-solid fa-cash-register"></i>Buy Product</h3>
                    <form action="../actions/edit-product.php" method="post" >
                       
                            <label for="product_name" class="form-label">Product Name</label>
                            <h3 class="text-center mb-2"><?= $products_data['product_name'] ?></h3>
                        </div>
                        <div class="mb-3">
                            <label for="Price" class="form-label">Price</label>
                            <h3 class="text-center mb-2"><?= $products_data['price'] ?></h3>
                        </div>
                        <div class="mb-3">
                            <label for="Stock" class="form-label">Stocks Left</label>
                            <h3 class="text-center mb-2"><?= $products_data['quantity'] ?></h3>
                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="form-label fw-bold">Buy Quantity</label>
                            <input type="number" name="quantity" id="quantity" value="<?= $products_data['quantity'] ?>" class="form-control fw-bold" maxlength="15" required>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-warning w-25">Pay</button>
                            
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</body>

<?php include 'html/foot.html' ?>