
<div class="card mb-4">
    <div class="card-header py-3 bg-transparent border-bottom-0">
        <h4 class="card-title mb-0"><strong>Lihat Data Santri</strong></h4>
    </div>
    <div class="card-body card-main-two">
        <form role="form" action="" method="post">
            <div class="row">  
                <div class="mb-3 col-md-3 col-12">
                    <label class="col-form-label">Nama Santri</label>
                    <input type="text" name="NAMA_ANGGOTA" class="form-control" value="<?= $NAMA_ANGGOTA; ?>" readonly>
                </div>
                <div class="mb-3 col-md-3 col-12">
                    <label class="col-form-label">Tingkatan</label>
                    <input type="text" name="NAMA_ANGGOTA" class="form-control" value="<?= $NAMA_TINGKATAN; ?>" readonly>
                </div>
                <div class="mb-1 col-md-3 col-12">
                    <label class="col-form-label">Tanggal Bergabung</label>
                    <input type="text" name="TANGGAL_BERGABUNG" class="form-control" value="<?= $TANGGAL_BERGABUNG; ?>" readonly>
                </div>
                <div class="mb-3 col-md-3 col-12">
                    <label class="col-form-label">Jenis Kelamin</label>
                    <input type="text" name="JENIS_KELAMIN" class="form-control" value="<?= $JK; ?>" readonly>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-3 col-12">
                    <label class="col-form-label">Tempat Lahir</label>
                    <input type="text" name="TEMPAT_LAHIR" class="form-control" value="<?= $TEMPAT_LAHIR; ?>" readonly>
                </div>
                <div class="mb-1 col-md-3 col-12">
                    <label class="col-form-label">Tanggal Lahir</label>
                    <input type="text" name="TANGGAL_LAHIR" class="form-control" value="<?= $TANGGAL_LAHIR; ?>" readonly>
                </div>
                <div class="mb-3 col-md-3 col-12">
                    <label class="col-form-label">Orang Tua</label>
                    <input type="text" name="ORANG_TUA" class="form-control" value="<?= $ORANG_TUA; ?>" readonly>
                </div>
                <div class="mb-3 col-md-3 col-12">
                    <label class="col-form-label">Pekerjaan</label>
                    <input type="text" name="PEKERJAAN" class="form-control" value="<?= $PEKERJAAN; ?>" readonly>
                </div>
            </div>
            <div class="row">
                <div class="mb-1 col-md-3 col-12">
                    <label class="col-form-label">Departemen</label>
                    <input type="text" name="DEPARTEMEN" class="form-control" value="<?= $DEPARTEMEN; ?>" readonly>
                </div>
                <div class="mb-1 col-md-3 col-12">
                    <label class="col-form-label">Handphone</label>
                    <input type="text" name="HANDPHONE" class="form-control" value="<?= $HANDPHONE; ?>" readonly>
                </div>
                <div class="mb-3 col-md-6 col-12">
                    <label class="col-form-label">Alamat</label>
                    <textarea class="form-control" name="ALAMAT" rows="5" cols="30" readonly> <?= $ALAMAT; ?></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="pendaftaran.php" class="btn btn-outline-secondary" role="button"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>

