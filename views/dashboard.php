<?php include 'html/head.html';
include '../classes/Products.php';
session_start();
$product = new Products;
$all_products = $product->getAllProducts();
?>

<?php include 'navbar.php';  ?>

<main class="row justify-content-center">
    <div class="col-6">
        <h2 class="text-center">
            PRODUCT LIST
        </h2>
        <table class="table table-bordered table-hover align-middle">
            <thead>
                <th>ID</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                <?php foreach ($all_products as $product) : ?>
                    <tr>
                      
                        <td><?= $product['id']  ?></td>
                        <td><?= $product['product_name']  ?></td>
                        <td><?= $product['price']  ?></td>
                        <td><?= $product['quantity']  ?></td>
                        <td>
                                <a href="edit-product.php?id=<?= $product['id']; ?>" class="btn btn-warning">
                                <i class="fa-solid fa-pencil"></i>
                                </a>
                                <a href="delete-product.php?id=<?= $product['id']; ?>" class="btn btn-outline-warning">
                                <i class="fa-solid fa-trash"></i>
                                </a>
                        </td>
                        <td>
                            <?php if($product['quantity'] >= 1 ): ?>
                                <a href="buy-product.php?id=<?= $product['id']; ?>" class="btn btn-outline-warning">
                                <i class="fa-sharp fa-solid fa-cash-register"></i>
                                </a>
                            <?php endif; ?>
                        </td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</main>




<?php include 'html/foot.html'; ?>