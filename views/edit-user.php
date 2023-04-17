<?php include 'html/head.html';
include '../classes/User.php';
session_start();
$id = $_SESSION['id'];
$user = new User;
$user_data = $user->getUser($id);

print_r($user_data);
?>

<?php include 'navbar.php' ?>

<body class="bg-light">
    <div class="" style="height:100vh">

        <div class="row h-100 m-0">

            <div class="card w-25 my-auto p-1 mx-auto">

                <div class="card-body">
                    <h3 class="text-center mb-2">Edit User</h3>
                    <form action="../actions/edit-user.php" method="post" enctype="multipart/form-data">
                        <?php if ($user_data['photo']) : ?>
                            there is a photo
                        <?php else : ?>
                            <i class="fa-solid fa-user d-block text-center fa-5x mb-3"></i>
                        <?php endif; ?>
                        <input type="file" name="photo" id="" class="form-control">
                        <div class="mb-3">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" name="first_name" id="first_name" class="form-control" value="<?= $user_data['first_name'] ?>" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control" value="<?= $user_data['last_name'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label fw-bold">Username</label>
                            <input type="text" name="username" id="username" value="<?= $user_data['username'] ?>" class="form-control fw-bold" maxlength="15" required>
                        </div>


                        <div class="text-end">
                            <a href="dashboard.php" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-warning w-25">Edit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</body>

<?php include 'html/foot.html' ?>