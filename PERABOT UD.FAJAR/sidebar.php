<style>
    .nav-link.active{
        background-color: black !important;
        color: white !important;
    }
</style>
<div class="col-lg-3">
    <nav class="navbar navbar-expand-lg bg-light rounded border mt-2">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width:250px;">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo ((isset($_GET['x']) && $_GET['x']=='home') || !isset($_GET['x'])) ? 
                            'active link-light' : 'link-dark' ; ?>" aria-current="page" href="home"><i class="bi bi-houses"></i>
                            </i> Dashboard</a>
                        </li>

                        <?php if($hasil['level']==1 || $hasil['level']==3){ ?>
                        <li class="nav-item"> 
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'katalog') ? 
                            'active link-light' : 'link-dark' ; ?>" href="katalog"><i class="bi bi-images"></i></i> Katalog</a>
                        </li>
                        <?php } ?>

                        <?php if($hasil['level']==1){ ?>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'katproduk') ? 
                            'active link-light' : 'link-dark' ; ?>" href="katproduk"><i class="bi bi-tags"></i> Kategori Produk</a>
                        </li>
                        <?php } ?>

                        <?php if($hasil['level']==1 || $hasil['level']==4){?>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'order') ?
                            'active link-light' : 'link-dark' ; ?>" href="order"><i class="bi bi-cart-check"></i> Pesan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'user') ? 
                            'active link-light' : 'link-dark' ; ?>" href="user"><i class="bi bi-person-bounding-box"></i> User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'report') ?
                            'active link-light' : 'link-dark' ; ?>" href="report"><i class="bi bi-calendar-range"></i> Report</a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>


