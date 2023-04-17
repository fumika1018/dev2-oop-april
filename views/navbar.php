<nav class=" navbar navbar-expand navbar-dark bg-dark" style="margin-bottom:80px">
    <div class="container">
        <a href="" class="navbar-brand">
            <h1>Welcome, <?= $_SESSION['fullname'] ?></h1>
        </a>
    </div>
    <div class="navbar-nav">
        <span class="navbar-text text-danger">
        <form action="../actions/logout.php" method="post" class="d-flex ms-2">
            <button type="submit" class="btn text-danger bg-transparent border-0 fs-1"><i class="fa-solid fa-right-from-bracket"></i></button>
        </form>
        
        </span>
    </div>
</nav>