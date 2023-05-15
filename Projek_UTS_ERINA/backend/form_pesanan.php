<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "components/head.php" ?>

<body>
    <?php include_once "components/navbar.php";
    require_once '../database/dbkoneksi.php';

    $sql = "SELECT * FROM produk";
    $rs = $dbh->query($sql);
    ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="list_produk.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-shop"></i></div>
                            Produk
                        </a>
                        <a class="nav-link" href="list_jenis_produk.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-receipt"></i></div>
                            Jenis Produk
                        </a>
                        <a class="nav-link" href="list_merk.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-shopping-bag"></i></div>
                            Merk
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    Authentication
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="login.html">Login</a>
                                        <a class="nav-link" href="register.html">Register</a>
                                        <a class="nav-link" href="password.html">Forgot Password</a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                    Error
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="401.html">401 Page</a>
                                        <a class="nav-link" href="404.html">404 Page</a>
                                        <a class="nav-link" href="500.html">500 Page</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>

                        <a class="nav-link" href="list_pesanan.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                            Pesanan
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Masuk sebagai:</div>
                    Ayeleen
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Toko Sembako Ayeleen</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Create Pesanan</li>
                    </ol>
                    <form method="POST" action="proses_pesanan.php">
                        <div class="form-group row">
                            <label for="id" class="col-4 col-form-label">Id</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-edit"></i>
                                        </div>
                                    </div>
                                    <input id="id" name="id" type="text" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-4 col-form-label">Nama</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-id-card"></i>
                                        </div>
                                    </div>
                                    <input id="nama" name="nama" type="text" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="produk_id" class="col-4 col-form-label">Produk Id</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <input id="produk_id" name="produk_id" value="" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                    </div>
                                    <input id="tanggal" name="tanggal" value="" type="date" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="quantity" class="col-4 col-form-label">Quantity</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-weight"></i>
                                        </div>
                                    </div>
                                    <input id="quantity" name="quantity" value="" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
                            </div>
                        </div>
                    </form>
                    <?php include_once "components/footer.php" ?>
                </div>
        </div>
        </main>
    </div>
    </div>

</body>

</html>