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
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Authentication
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                                    data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="login.html">Login</a>
                                        <a class="nav-link" href="register.html">Register</a>
                                        <a class="nav-link" href="password.html">Forgot Password</a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseError" aria-expanded="false"
                                    aria-controls="pagesCollapseError">
                                    Error
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                                    data-bs-parent="#sidenavAccordionPages">
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
                        <li class="breadcrumb-item active">View Produk</li>
                    </ol>

                    <?php
                    $_id = $_GET['id'];
                    // select * from produk where id = $_id;
                    //$sql = "SELECT a.*,b.nama as jenis FROM produk a
                    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
                    $sql = "SELECT * FROM produk WHERE id=?";
                    $st = $dbh->prepare($sql);
                    $st->execute([$_id]);
                    $row = $st->fetch();
                    //echo 'NAMA PRODUK ' . $row['nama'];
                    ?>

                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td>Id</td>
                                <td><?= $row['id'] ?></td>
                            </tr>
                            <tr>
                                <td>Nama Produk</td>
                                <td><?= $row['nama_produk'] ?></td>
                            </tr>
                            <tr>
                                <td>Merk Id</td>
                                <td><?= $row['merk_id'] ?></td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td><?= $row['stok'] ?></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td><?= $row['harga'] ?></td>
                            </tr>
                            <tr>
                                <td>Berat</td>
                                <td><?= $row['berat'] ?></td>
                            </tr>
                            <tr>
                                <td>Jenis Produk Id</td>
                                <td><?= $row['jenis_produk_id'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <?php include_once "components/footer.php" ?>
                </div>
        </div>
        </main>
    </div>
    </div>

</body>

</html>