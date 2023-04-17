<?php include 'html/head.html' ?>

<body class="bg-light">
    <div class="" style="height:100vh">
        <div class="row h-100 m-0">
            <div class="card w-25 my-auto mx-auto">
                <div class="card-header bg-white border-0 py-3">
                    <h1 class="text-center">LOGIN</h1>
                </div>
                <div class="card-body">
                    <form action="../actions/login.php" method="post">
                        <div class="mb-3">
                            <input type="text" name="username" id="username" class="form-control" placeholder="USERNAME">
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" id="password" class="form-control" placeholder="PASSWORD">
                        </div>
                        <button type="submit"  class="btn btn-success w-100">login</button>
                    </form>
                    <p class="text-center small mt-3">
                        Create an account <a href="../views/register.php">Here</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>



<?php include 'html/foot.html' ?>