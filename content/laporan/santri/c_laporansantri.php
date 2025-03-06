

<div class="card mb-4">
    <div class="card-header py-3 bg-transparent border-bottom-0">
        <h4 class="card-title mb-0"><strong>Laporan Santri</strong></h4>
    </div>
    <div class="card-body card-main-two">
        <form role="form" action="" method="post">
            <div class="row">  
                <div class="mb-4 col-md-4 col-12">
                    <label class="col-form-label">Nama Santri</label>
                    <fieldset class="form-icon-group left-icon position-relative"> 
                        <input type="text" name="NAMA_ANGGOTA" class="form-control" value="<?= $NAMA_ANGGOTA; ?>">
                    </fieldset>
                </div>
                <div class="mb-4 col-md-4 col-12">
                    <label class="col-form-label">Pendidikan</label>
                    <fieldset class="form-icon-group left-icon position-relative"> 
                        <select class="form-select array-select form-control" aria-label="example" name="ID_TINGKATAN">
                            <option value="">Pilih Jenis Pendidikan...</option>
                            <?php
                            foreach ($rowTingkatan as $dataTingkatan) {
                                extract($dataTingkatan);
                                ?>
                                <option value="<?= $ID_TINGKATAN; ?>" <?php if ($ID_TINGKATAN == $ID_TINGKATAN_CARI) echo 'selected'; ?>><?= $NAMA_TINGKATAN; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </fieldset>
                </div>
                <div class="mb-4 col-md-4 col-12">
                    <label class="col-form-label">Jenis Kelamin</label>
                    <select class="form-select array-select form-control" aria-label="example" name="JK">
                        <option value="">Pilih Jenis Kelamin...</option>
                        <option value="L" <?php if ($JK == 'L') echo 'selected'; ?>>Laki-laki</option>
                        <option value="P" <?php if ($JK == 'P') echo 'selected'; ?>>Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="mb-4 col-md-4 col-12">
                    <label class="col-form-label">Orang Tua</label>
                    <fieldset class="form-icon-group left-icon position-relative"> 
                        <input type="text" name="ORANG_TUA" class="form-control" value="<?= $ORANG_TUA; ?>">
                    </fieldset>
                </div>
                <div class="mb-4 col-md-4 col-12">
                    <label class="col-form-label">Handphone</label>
                    <fieldset class="form-icon-group left-icon position-relative">
                        <input type="text" name="HANDPHONE" class="form-control" value="<?= $HANDPHONE; ?>">
                    </fieldset>
                </div>
                <div class="mb-4 col-md-4 col-12">
                    <label class="col-form-label">Alamat</label>
                    <fieldset class="form-icon-group left-icon position-relative"> 
                        <input type="text" name="ALAMAT" class="form-control" value="<?= $ALAMAT; ?>">
                    </fieldset>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <button type="submit" name="cari" class="btn btn-success"><i class="fa fa-search"></i> Cari</button>&nbsp;&nbsp;&nbsp;
                    <a href="laporansantri.php" class="btn btn-outline-secondary" role="button"><i class="fa fa-rotate-left"></i> Reset</a>
                </div>
            </div>
        </form>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="santri-table">
                <thead>
                    <tr>
                        <th>Pendidikan</th>
                        <th>Nama Santri</th>
                        <th>TTL</th>
                        <th>Jenis Kelamin</th>
                        <th>Orang Tua</th>
                        <th>Tanggal Pendaftaran</th>
                        <th>Tanggal Keluar</th>
                        <th>Tanggal Pendidikan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($rowAnggota as $dataAnggota) {
                        extract($dataAnggota);
                        ?>
                        <tr>
                            <td><?= $NAMA_TINGKATAN; ?></td>
                            <td><?= $NAMA_ANGGOTA; ?></td>
                            <td><?= $TTL; ?></td>
                            <td><?= $JK; ?></td>
                            <td><?= $ORANG_TUA; ?></td>
                            <td><?= $TANGGAL_BERGABUNG; ?></td>
                            <td><?= $TANGGAL_KELUAR; ?></td>
                            <td><?= $TANGGAL_TINGKATAN; ?></td>
                            <td><?= $STATUS_ANGGOTA_DESK; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
