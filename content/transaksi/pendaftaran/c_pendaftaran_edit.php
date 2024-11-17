
<div class="card mb-4">
    <div class="card-header py-3 bg-transparent border-bottom-0">
        <h4 class="card-title mb-0"><strong>Ubah Data Santri</strong></h4>
    </div>
    <div class="card-body card-main-two">
        <form role="form" action="" method="post">
            <div class="row">
                <div class="mb-3 col-md-3 col-12">
                    <label class="col-form-label">Tingkatan</label>
                    <fieldset class="form-icon-group left-icon position-relative"> 
                        <select class="form-select array-select form-control" aria-label="example" name="ID_TINGKATAN" required>
                            <option value="">Pilih Jenis Tingkatan...</option>
                            <?php
                            foreach ($rowTingkatan as $dataTingkatan) {
                                extract($dataTingkatan);
                                ?>
                                <option value="<?= $ID_TINGKATAN; ?>" <?php if ($EDIT_TINGKATAN == $ID_TINGKATAN) echo 'selected'; ?>><?= $NAMA_TINGKATAN; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </fieldset>
                </div>
                <div class="mb-1 col-md-3 col-12">
                    <label class="col-form-label">Tanggal Bergabung</label>
                    <fieldset class="form-icon-group left-icon position-relative">
                        <input type="text" name="TANGGAL_BERGABUNG" class="form-control f-basic flatpickr-input" placeholder="Pilih Tanggal.." value="<?= $TANGGAL_BERGABUNG; ?>" required>
                    </fieldset>
                </div>
                <div class="mb-3 col-md-3 col-12">
                    <label class="col-form-label">Status Santri</label>
                    <select class="form-select array-select form-control" aria-label="example" name="STATUS_ANGGOTA" required>
                        <option value="">Pilih Jenis Kelamin...</option>
                        <option value="1" <?php if ($STATUS_ANGGOTA == '1') echo 'selected'; ?>>Aktif</option>
                        <option value="0" <?php if ($STATUS_ANGGOTA == '0') echo 'selected'; ?>>Tidak Aktif</option>
                    </select>
                </div>
                <div class="mb-1 col-md-3 col-12">
                    <label class="col-form-label">Tanggal Keluar</label>
                    <fieldset class="form-icon-group left-icon position-relative">
                        <input type="text" name="TANGGAL_KELUAR" class="form-control f-basic flatpickr-input" placeholder="Pilih Tanggal.." value="<?= $TANGGAL_KELUAR; ?>">
                    </fieldset>
                </div>
            </div>
            <div class="row">  
                <div class="mb-3 col-md-3 col-12">
                    <label class="col-form-label">Nama Santri</label>
                    <fieldset class="form-icon-group left-icon position-relative"> 
                        <input type="text" name="NAMA_ANGGOTA" class="form-control" value="<?= $NAMA_ANGGOTA; ?>" required>
                    </fieldset>
                </div>
                <div class="mb-3 col-md-3 col-12">
                    <label class="col-form-label">Jenis Kelamin</label>
                    <select class="form-select array-select form-control" aria-label="example" name="JK" required>
                        <option value="">Pilih Jenis Kelamin...</option>
                        <option value="L" <?php if ($JK == 'L') echo 'selected'; ?>>Laki-laki</option>
                        <option value="P" <?php if ($JK == 'P') echo 'selected'; ?>>Perempuan</option>
                    </select>
                </div>
                <div class="mb-3 col-md-3 col-12">
                    <label class="col-form-label">Tempat Lahir</label>
                    <fieldset class="form-icon-group left-icon position-relative"> 
                        <input type="text" name="TEMPAT_LAHIR" class="form-control" value="<?= $TEMPAT_LAHIR; ?>" required>
                    </fieldset>
                </div>
                <div class="mb-1 col-md-3 col-12">
                    <label class="col-form-label">Tanggal Lahir</label>
                    <fieldset class="form-icon-group left-icon position-relative">
                        <input type="text" name="TANGGAL_LAHIR" class="form-control f-basic flatpickr-input" placeholder="Pilih Tanggal.." value="<?= $TANGGAL_LAHIR; ?>" required>
                    </fieldset>
                </div>
            </div>
            <div class="row">  
                <div class="mb-3 col-md-3 col-12">
                    <label class="col-form-label">Orang Tua</label>
                    <fieldset class="form-icon-group left-icon position-relative"> 
                        <input type="text" name="ORANG_TUA" class="form-control" value="<?= $ORANG_TUA; ?>" required>
                    </fieldset>
                </div>
                <div class="mb-3 col-md-3 col-12">
                    <label class="col-form-label">Pekerjaan</label>
                    <fieldset class="form-icon-group left-icon position-relative"> 
                        <input type="text" name="PEKERJAAN" class="form-control" value="<?= $PEKERJAAN; ?>">
                    </fieldset>
                </div>
                <div class="mb-1 col-md-3 col-12">
                    <label class="col-form-label">Departemen</label>
                    <fieldset class="form-icon-group left-icon position-relative">
                        <input type="text" name="DEPARTEMEN" class="form-control" value="<?= $DEPARTEMEN; ?>">
                    </fieldset>
                </div>
                <div class="mb-1 col-md-3 col-12">
                    <label class="col-form-label">Handphone</label>
                    <fieldset class="form-icon-group left-icon position-relative">
                        <input type="text" name="HANDPHONE" class="form-control" value="<?= $HANDPHONE; ?>" required>
                    </fieldset>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-6 col-12">
                    <label class="col-form-label">Alamat</label>
                    <fieldset class="form-icon-group left-icon position-relative"> 
                        <textarea class="form-control" name="ALAMAT" rows="5" cols="30" required><?= $ALAMAT; ?></textarea>
                    </fieldset>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                    <a href="pendaftaran.php" class="btn btn-outline-secondary" role="button"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>

