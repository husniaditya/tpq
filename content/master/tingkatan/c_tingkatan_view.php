
<div class="card mb-4">
    <div class="card-header py-3 bg-transparent border-bottom-0">
        <h4 class="card-title mb-0"><strong>Lihat Data Pendidikan</strong></h4>
    </div>
    <div class="card-body card-main-two">
        <form role="form" action="" method="post">
            <div class="row">  
                <div class="mb-3 col-md-6 col-12">
                    <label class="col-form-label">Nama Pendidikan</label>
                    <fieldset class="form-icon-group left-icon position-relative"> 
                        <input type="text" name="NAMA_TINGKATAN" class="form-control" value="<?= $NAMA_TINGKATAN; ?>" readonly>
                        <div class="form-icon position-absolute">
                        </div>
                    </fieldset>
                </div>
                <div class="mb-3 col-md-6 col-12">
                    <label class="col-form-label">Deskripsi</label>
                    <fieldset class="form-icon-group left-icon position-relative"> 
                        <input type="text" name="DESKRIPSI" class="form-control" value="<?= $DESKRIPSI; ?>" readonly>
                        <div class="form-icon position-absolute">
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-6 col-12">
                    <label class="col-form-label">Status</label>
                    <fieldset class="form-icon-group left-icon position-relative"> 
                        <input type="text" name="STATUS" class="form-control" value="<?= $STATUS_DETAIL; ?>" readonly>
                        <div class="form-icon position-absolute">
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="tingkatan.php" class="btn btn-outline-secondary" role="button"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>