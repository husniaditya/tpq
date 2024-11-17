
<div class="card mb-4">
    <div class="card-header py-3 bg-transparent border-bottom-0">
        <h4 class="card-title mb-0"><strong>Ubah Data User</strong></h4>
    </div>
    <div class="card-body card-main-two">
        <form role="form" action="" method="post">
            <div class="row">  
                <div class="mb-3 col-md-4 col-12">
                    <label class="col-form-label">Username</label>
                    <fieldset class="form-icon-group left-icon position-relative"> 
                        <input type="text" name="USERNAME" class="form-control" value="<?= $USERNAME; ?>" required>
                    </fieldset>
                </div>
                <div class="mb-3 col-md-4 col-12">
                    <label class="col-form-label">Password</label>
                    <fieldset class="form-icon-group left-icon position-relative"> 
                        <input type="password" name="PASSWORD" class="form-control" value="">
                    </fieldset>
                </div>
                <div class="mb-3 col-md-3 col-12">
                    <label class="col-form-label">Status</label>
                    <select class="form-select array-select form-control" aria-label="example" name="STATUS" required>
                        <option value="">Pilih Status...</option>
                        <option value="1" <?php if ($STATUS == '1') echo 'selected'; ?>>Aktif</option>
                        <option value="0" <?php if ($STATUS == '0') echo 'selected'; ?>>Tidak Aktif</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-4 col-12">
                    <label class="col-form-label">Nama</label>
                    <fieldset class="form-icon-group left-icon position-relative"> 
                        <input type="text" name="NAMA" class="form-control" value="<?= $NAMA; ?>" required>
                    </fieldset>
                </div>
                <div class="mb-3 col-md-4 col-12">
                    <label class="col-form-label">Email</label>
                    <fieldset class="form-icon-group left-icon position-relative"> 
                        <input type="email" name="EMAIL" class="form-control" value="<?= $EMAIL; ?>">
                    </fieldset>
                </div>
                <div class="mb-3 col-md-3 col-12">
                    <label class="col-form-label">Akses</label>
                    <select class="form-select array-select form-control" aria-label="example" name="AKSES" required>
                        <option value="">Pilih Akses...</option>
                        <option value="Admin" <?php if ($AKSES == 'Admin') echo 'selected'; ?>>Admin</option>
                        <option value="Ustadz/Asatidz" <?php if ($AKSES == 'Ustadz/Asatidz') echo 'selected'; ?>>Ustadz/Asatidz</option>
                        <option value="Ketua DKM" <?php if ($AKSES == 'Ketua DKM') echo 'selected'; ?>>Ketua DKM</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                    <a href="pengguna.php" class="btn btn-outline-secondary" role="button"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>

