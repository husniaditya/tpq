
<div class="card mb-4">
    <div class="card-header py-3 bg-transparent border-bottom-0">
        <h4 class="card-title mb-0"><strong>Lihat Iuran Santri</strong></h4>
    </div>
    <div class="card-body card-main-two">
        <form role="form" action="" method="post">
            <div class="row">  
                <div class="mb-3 col-md-6 col-12">
                    <label class="col-form-label">Nama Santri</label>
                    <input type="text" name="ID_ANGGOTA" class="form-control" value="<?= $ID_ANGGOTA; ?> - <?= $NAMA_ANGGOTA; ?>" readonly>
                </div>
            </div>
            <div class="row">
            <div class="mb-1 col-md-3 col-12">
                    <label class="col-form-label">Tanggal Iuran</label>
                    <input type="text" name="TGL_IURAN" class="form-control" value="<?= $TGL_IURAN; ?>" readonly>
                </div>
                <div class="mb-3 col-md-3 col-12">
                    <label class="col-form-label">Jenis Iuran</label>
                    <input type="text" name="DK" class="form-control" value="<?= $DK_DESK; ?>" readonly>
                </div>
                <div class="mb-1 col-md-3 col-12">
                    <label class="col-form-label">Jumlah</label>
                    <input type="text" name="JUMLAH" class="form-control" value="<?= $JUMLAH; ?>" readonly>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-6 col-12">
                    <label class="col-form-label">Keterangan</label>
                    <fieldset class="form-icon-group left-icon position-relative"> 
                        <textarea class="form-control" name="KETERANGAN" rows="5" cols="30" readonly> <?= $KETERANGAN; ?></textarea>
                    </fieldset>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="iuran.php" class="btn btn-outline-secondary" role="button"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>

