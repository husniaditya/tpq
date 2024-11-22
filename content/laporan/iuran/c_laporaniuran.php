

<div class="card mb-4">
    <div class="card-header py-3 bg-transparent border-bottom-0">
        <h4 class="card-title mb-0"><strong>Laporan Santri</strong></h4>
    </div>
    <div class="card-body card-main-two">
        <form role="form" action="" method="post">
            <div class="row">  
                <div class="mb-4 col-md-3 col-12">
                    <label class="col-form-label">ID Iuran</label>
                    <fieldset class="form-icon-group left-icon position-relative"> 
                        <input type="text" name="ID_IURAN" class="form-control" value="<?= $ID_IURAN; ?>">
                    </fieldset>
                </div>
                <div class="mb-4 col-md-3 col-12">
                    <label class="col-form-label">Nama Santri</label>
                    <fieldset class="form-icon-group left-icon position-relative"> 
                        <input type="text" name="NAMA_ANGGOTA" class="form-control" value="<?= $NAMA_ANGGOTA; ?>">
                    </fieldset>
                </div>
                <div class="mb-4 col-md-3 col-12">
                    <label class="col-form-label">Jenis Iuran</label>
                    <select class="form-select array-select form-control" aria-label="example" name="DK">
                        <option value="">Pilih Jenis Iuran...</option>
                        <option value="D" <?php if ($DK == 'D') echo 'selected'; ?>>Debit</option>
                        <option value="K" <?php if ($DK == 'K') echo 'selected'; ?>>Kredit</option>
                    </select>
                </div>
                <div class="mb-4 col-md-3 col-12">
                    <label class="col-form-label">Tanggal Iuran</label>
                    <fieldset class="form-icon-group left-icon position-relative">
                        <input type="text" name="TGL_IURAN" class="form-control f-basic flatpickr-input" placeholder="Pilih Tanggal.." value="<?= $TGL_IURAN; ?>">
                    </fieldset>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <button type="submit" name="cari" class="btn btn-success"><i class="fa fa-search"></i> Cari</button>&nbsp;&nbsp;&nbsp;
                    <a href="laporaniuran.php" class="btn btn-outline-secondary" role="button"><i class="fa fa-rotate-left"></i> Reset</a>
                </div>
            </div>
        </form>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="iuran-table">
                <thead>
                    <tr>
                        <th>ID Iuran</th>
                        <th>Tanggal</th>
                        <th>Nama Santri</th>
                        <th>Tingkatan</th>
                        <th>D/K</th>
                        <th>Jumlah (Rp)</th>
                        <th>Saldo (Rp)</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($rowIuran as $dataIuran) {
                        extract($dataIuran);
                        ?>
                        <tr>
                            <td><?= $ID_IURAN; ?></td>
                            <td><?= $TGL_IURAN; ?></td>
                            <td><?= $NAMA_ANGGOTA; ?></td>
                            <td><?= $NAMA_TINGKATAN; ?></td>
                            <td><?= $IURAN_DK; ?></td>
                            <td align="right" style="<?= $IURAN_COLOR; ?>"><?= $FJUMLAH; ?></td>
                            <td align="right"><?= $FSALDO; ?></td>
                            <td><?= $KETERANGAN; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
