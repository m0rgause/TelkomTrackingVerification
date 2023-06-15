<nav class="navbar navbar-expand-lg bg-dark navbar-dark b-top">
    <div class="container-fluid">
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ADMIN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">DASHBOARD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">QUALITY CHECK</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">DOKUMENTASI PROJECT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">MITRA</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        TRACKING VERIFICATION
                    </a>
                    <ul class="dropdown-menu">
                        <!-- Admin Area -->
                        <?php if (isset($_POST['role'])) : ?>
                        <?php if ($_POST['role'] == '1') : ?>
                        <li><a class="dropdown-item" href="/pengajuan-tim-ut">PENGAJUAN TIM UT</a></li>
                        <li><a class="dropdown-item" href="/actual-uat">ACTUAL UAT</a></li>
                        <?php elseif ($_POST['role'] == '2') : ?>
                        <li><a class="dropdown-item" href="/approval">APPROVAL</a></li>
                        <?php elseif ($_POST['role'] == '3') : ?>
                        <li><a class="dropdown-item" href="/assign-verificator">ASSIGN VERIFCATOR</a></li>
                        <?php elseif ($_POST['role'] == '5') : ?>
                        <li><a class="dropdown-item" href="/users">MANAGE ROLE ADMIN</a></li>
                        <?php endif ?>
                        <?php endif ?>
                    </ul>
                </li>
            </ul>
            <div class="navbar-nav ml-auto mb-2 mb-lg-0">
                <a class="nav-link" href="#"><i class="fa fa-exclamation"></i> 0</a>
                <a class="nav-link" href="#"><i class="fa fa-check"></i> 0</a>
                <a class="nav-link" href="#"><i class="fa fa-times"></i> 0</a>
                <a class="nav-link" href="#">|</a>
                <a class="nav-link" href="#"><i class="fa fa-user"></i> VIEWER</a>
                <a class="nav-link" href="#">|</a>
                <a class="nav-link" href="/login"><i class="fa fa-power-off"></i> LOGOUT</a>
            </div>
        </div>
    </div>
</nav>