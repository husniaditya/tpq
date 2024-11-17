

<div class="card mb-4">
    <div class="card-header py-3 bg-transparent border-bottom-0">
        <h4 class="card-title mb-0"><strong>Master Pengguna</strong></h4>
    </div>
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <a data-toggle="modal" title="Add this item" class="btn btn-outline-primary" href="pengguna_add.php?method=add"><i class="fa fa-plus"></i> Tambah Data Pengguna</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="pengguna-table">
                <thead>
                    <tr>
                        <th></th>
                        <th>ID Pengguna</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Akses</th>
                        <th>Status</th>
                        <th>Input Oleh</th>
                        <th>Input Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($rowUser as $dataUser) {
                        extract($dataUser);
                        ?>
                        <tr>
                            <td align="center">
                                <form id="<?= uniqid(); ?>" method="post" class="form">
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button"  data-bs-toggle="dropdown" aria-expanded="false">
									Opsi
								</button>
								<ul class="dropdown-menu border-0 shadow p-3">
									<li><a class="dropdown-item py-2 rounded" href="pengguna_view.php?method=view&id=<?= $ID_USER; ?>"><i class="fa fa-folder-open-o"></i> Lihat</a></li>
									<li><a class="dropdown-item py-2 rounded" href="pengguna_edit.php?method=edit&id=<?= $ID_USER; ?>"><i class="fa fa-edit"></i> Edit</a></li>
                                    <li class="divider"></li>
									<li><a class="dropdown-item py-2 rounded" href="backend/master/user/t_user_hapus.php?method=delete&id=<?php echo $ID_USER; ?>" onclick="return confirm('Hapus data ini ?')" style="color:firebrick;"><i class="fa fa-trash-o"></i> Hapus</a></li>
								</ul>

                                </form>
                            </td>
                            <td><?= $ID_USER; ?></td>
                            <td><?= $USERNAME; ?></td>
                            <td><?= $NAMA; ?></td>
                            <td><?= $EMAIL; ?></td>
                            <td><?= $AKSES; ?></td>
                            <td><?= $STATUS; ?></td>
                            <td><?= $INPUT_OLEH; ?></td>
                            <td><?= $INPUT_TANGGAL; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
