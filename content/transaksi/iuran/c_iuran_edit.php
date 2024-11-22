
<div class="card mb-4">
    <div class="card-header py-3 bg-transparent border-bottom-0">
        <h4 class="card-title mb-0"><strong>Ubah Iuran Santri</strong></h4>
    </div>
    <div class="card-body card-main-two">
        <form role="form" action="" method="post">
            <div class="row">  
                <div class="mb-3 col-md-6 col-12">
                    <label class="col-form-label">Nama Santri</label>
                    <fieldset class="form-icon-group left-icon position-relative"> 
                        <select class="form-select array-select form-control" aria-label="example" name="ID_ANGGOTA" required>
                            <option value="">Pilih Nama Santri...</option>
                            <?php
                            foreach ($rowAnggota as $dataAnggota) {
                                extract($dataAnggota);
                                ?>
                                <option value="<?= $ID_ANGGOTA; ?>" <?php if ($EDIT_ANGGOTA == $ID_ANGGOTA) echo 'selected'; ?>><?= $ID_ANGGOTA; ?> - <?= $NAMA_ANGGOTA; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </fieldset>
                </div>
            </div>
            <div class="row">
            <div class="mb-1 col-md-3 col-12">
                    <label class="col-form-label">Tanggal Iuran</label>
                    <fieldset class="form-icon-group left-icon position-relative">
                        <input type="text" name="TGL_IURAN" class="form-control f-basic flatpickr-input" placeholder="Pilih Tanggal.." value="<?= $TGL_IURAN; ?>" required>
                    </fieldset>
                </div>
                <div class="mb-3 col-md-3 col-12">
                    <label class="col-form-label">Jenis Iuran</label>
                    <select class="form-select array-select form-control" aria-label="example" name="DK" required>
                        <option value="">Pilih Jenis Iuran...</option>
                        <option value="D" <?php if ($DK == 'D') echo 'selected'; ?>>Debet</option>
                        <option value="K" <?php if ($DK == 'K') echo 'selected'; ?>>Kredit</option>
                    </select>
                </div>
                <div class="mb-1 col-md-3 col-12">
                    <label class="col-form-label">Jumlah</label>
                    <fieldset class="form-icon-group left-icon position-relative">
                        <input type="number" name="JUMLAH" class="form-control" value="<?= $JUMLAH; ?>" required>
                    </fieldset>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-6 col-12">
                    <label class="col-form-label">Keterangan</label>
                    <fieldset class="form-icon-group left-icon position-relative"> 
                        <textarea class="form-control" name="KETERANGAN" rows="5" cols="30"> <?= $KETERANGAN; ?></textarea>
                    </fieldset>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                    <a href="iuran.php" class="btn btn-outline-secondary" role="button"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>

