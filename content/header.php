
<div class="d-flex justify-content-between align-items-center py-2 w-100">
    <ul class="header-menu flex-grow-1">
        <li class="nav-item py-2 py-md-1 col-auto">
            <div class="vr d-none d-sm-flex h-100 mx-sm-2"></div>
        </li>
        <!--[ Start:: user detail ]-->
        <li class="nav-item user ms-3">
            <a class="dropdown-toggle gray-6 d-flex text-decoration-none align-items-center lh-sm p-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="User" data-bs-auto-close="outside">
                <span class="ms-2 fs-6 d-none d-sm-inline-flex"><?= $_SESSION["LOGINNAMA"]; ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-end shadow p-2 p-xl-3 rounded-4">
                <div class="bg-body p-3 rounded-3">
                    <h4 class="mb-1 title-font text-gradient"><?= $_SESSION["LOGINNAMA"]; ?></h4>
                    <p class="small text-muted"><?= $_SESSION["LOGINAKS"]; ?></p>
                </div>
                <a class="btn py-2 btn-primary w-100 mt-3 rounded-pill" href="logout.php" role="button">Logout</a>
            </div>
        </li>
    </ul>
</div>