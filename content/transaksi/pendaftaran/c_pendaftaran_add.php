
<div class="card mb-4">
    <div class="card-header py-3 bg-transparent border-bottom-0">
        <h4 class="card-title mb-0"><strong>Tambah Data Santri</strong></h4>
    </div>
    <div class="card-body card-main-two">
        <form role="form" action="" method="post">
            <div class="row">  
                <div class="mb-3 col-md-3 col-12">
                    <label class="col-form-label">Nama Santri</label>
                    <fieldset class="form-icon-group left-icon position-relative"> 
                        <input type="text" name="NAMA_ANGGOTA" class="form-control" value="" required>
                    </fieldset>
                </div>
                <div class="mb-3 col-md-3 col-12">
                    <label class="col-form-label">Pendidikan</label>
                    <fieldset class="form-icon-group left-icon position-relative"> 
                        <select class="form-select array-select form-control" aria-label="example" name="ID_TINGKATAN" required>
                            <option value="">Pilih Jenis Pendidikan...</option>
                            <?php
                            foreach ($rowTingkatan as $dataTingkatan) {
                                extract($dataTingkatan);
                                ?>
                                <option value="<?= $ID_TINGKATAN; ?>"><?= $NAMA_TINGKATAN; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </fieldset>
                </div>
                <div class="mb-3 col-md-3 col-12">
                    <label class="col-form-label">Jenis Kelamin</label>
                    <select class="form-select array-select form-control" aria-label="example" name="JK" required>
                        <option value="">Pilih Jenis Kelamin...</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="row">  
                <div class="mb-3 col-md-3 col-12">
                    <label class="col-form-label">Tempat Lahir</label>
                    <fieldset class="form-icon-group left-icon position-relative"> 
                        <input type="text" name="TEMPAT_LAHIR" class="form-control" value="" required>
                    </fieldset>
                </div>
                <div class="mb-1 col-md-3 col-12">
                    <label class="col-form-label">Tanggal Lahir</label>
                    <fieldset class="form-icon-group left-icon position-relative">
                        <input type="text" name="TANGGAL_LAHIR" class="form-control f-basic flatpickr-input" placeholder="Pilih Tanggal.." value="" required>
                    </fieldset>
                </div>
                <div class="mb-3 col-md-3 col-12">
                    <label class="col-form-label">Orang Tua</label>
                    <fieldset class="form-icon-group left-icon position-relative"> 
                        <input type="text" name="ORANG_TUA" class="form-control" value="" required>
                    </fieldset>
                </div>
                <div class="mb-3 col-md-3 col-12">
                    <label class="col-form-label">Pekerjaan</label>
                    <fieldset class="form-icon-group left-icon position-relative"> 
                        <input type="text" name="PEKERJAAN" class="form-control" value="">
                    </fieldset>
                </div>
            </div>
            <div class="row">
                <div class="mb-1 col-md-3 col-12">
                    <label class="col-form-label">Departemen</label>
                    <fieldset class="form-icon-group left-icon position-relative">
                        <input type="text" name="DEPARTEMEN" class="form-control" value="">
                    </fieldset>
                </div>
                <div class="mb-1 col-md-3 col-12">
                    <label class="col-form-label">Handphone</label>
                    <fieldset class="form-icon-group left-icon position-relative">
                        <input type="text" name="HANDPHONE" id="phoneInput" class="form-control" value="" required>
                    </fieldset>
                </div>
                <div class="mb-3 col-md-6 col-12">
                    <label class="col-form-label">Alamat</label>
                    <fieldset class="form-icon-group left-icon position-relative"> 
                        <textarea class="form-control" name="ALAMAT" rows="5" cols="30" required></textarea>
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

<script>
  document.getElementById("phoneInput").addEventListener("input", function (e) {
    this.value = this.value.replace(/[^0-9]/g, ""); // Remove non-numeric characters
  });
</script>

