
<div class="card mb-4">
    <div class="card-header py-3 bg-transparent border-bottom-0">
        <h4 class="card-title mb-0"><strong>Lihat Data User</strong></h4>
    </div>
    <div class="card-body card-main-two">
        <form role="form" action="" method="post">
            <div class="row">  
                <div class="mb-3 col-md-4 col-12">
                    <label class="col-form-label">Username</label>
                    <fieldset class="form-icon-group left-icon position-relative"> 
                        <input type="text" name="USERNAME" class="form-control" value="<?= $USERNAME; ?>" readonly>
                    </fieldset>
                </div>
                <div class="mb-3 col-md-4 col-12">
                    <label class="col-form-label">Password</label>
                    <fieldset class="form-icon-group left-icon position-relative"> 
                        <input type="password" name="PASSWORD" class="form-control" value="" readonly>
                    </fieldset>
                </div>
                <div class="mb-3 col-md-3 col-12">
                    <label class="col-form-label">Status</label>
                    <input type="text" name="STATUS" class="form-control" value="<?= $STATUS_DETAIL; ?>" readonly>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-4 col-12">
                    <label class="col-form-label">Nama</label>
                    <fieldset class="form-icon-group left-icon position-relative"> 
                        <input type="text" name="NAMA" class="form-control" value="<?= $NAMA; ?>" readonly>
                    </fieldset>
                </div>
                <div class="mb-3 col-md-4 col-12">
                    <label class="col-form-label">Email</label>
                    <fieldset class="form-icon-group left-icon position-relative"> 
                        <input type="email" name="EMAIL" class="form-control" value="<?= $EMAIL; ?>" readonly>
                    </fieldset>
                </div>
                <div class="mb-3 col-md-3 col-12">
                    <label class="col-form-label">Akses</label>
                    <input type="text" name="AKSES" class="form-control" value="<?= $AKSES; ?>" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="pengguna.php" class="btn btn-outline-secondary" role="button"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>

