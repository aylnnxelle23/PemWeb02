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
                        <li class="breadcrumb-item active">Produk</li>
                    </ol>
                    <a class="btn btn-success" href="form_produk.php" role="button">Create Produk</a>
                    <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
                        <thead>
                            <tr class='table-active'>
                                <th>Id</th>
                                <th>Nama Produk</th>
                                <th>Merk Id</th>
                                <th>Stok</th>
                                <th>Harga</th>
                                <th>Berat</th>
                                <th>Jenis Produk Id</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $nomor  = 1;
                            foreach ($rs as $row) {
                            ?>
                                <tr>
                                    <td class='table-success'><?= $nomor ?></td>
                                    <td><?= $row['nama_produk'] ?></td>
                                    <td class='table-success'><?= $row['merk_id'] ?></td>
                                    <td><?= $row['stok'] ?></td>
                                    <td class='table-success'><?= $row['harga'] ?></td>
                                    <td><?= $row['berat'] ?></td>
                                    <td class='table-success'><?= $row['jenis_produk_id'] ?></td>
                                    <td>
                                        <button type="button" class="btn btn-circle btn-outline-success m-2"><a href="view_produk.php?id=<?= $row['id'] ?>"><i class="fa fa-eye" aria-hidden="true"></i></a></button>
                                        <button type="button" class="btn btn-circle btn-outline-secondary m-2"><a href="edit_produk.php?idedit=<?= $row['id'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></button>
                                        <button type="button" class="btn btn-circle btn-outline-danger m-2"><a href="delete_produk.php?iddel=<?= $row['id'] ?>"><i class="fa fa-trash" aria-hidden="true" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['nama_produk'] ?>?'))
                                        {return false}"></i></a></button>
                                    </td>
                                </tr>
                            <?php
                                $nomor++;
                            }
                            ?>
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