

<div class="card mb-4">
    <div class="card-header py-3 bg-transparent border-bottom-0">
        <h4 class="card-title mb-0"><strong>Transaksi Iuran Santri</strong></h4>
    </div>
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <a data-toggle="modal" title="Add this item" class="btn btn-outline-primary" href="iuran_add.php?method=add"><i class="fa fa-plus"></i> Tambah Data Iuran</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="iuran-table">
                <thead>
                    <tr>
                        <th></th>
                        <th>ID Iuran</th>
                        <th>Periode</th>
                        <th>Nama Santri</th>
                        <th>Pendidikan</th>
                        <th>Jumlah (Rp)</th>
                        <th>Saldo (Rp)</th>
                        <th>Keterangan</th>
                        <th>Input Oleh</th>
                        <th>Input Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($rowIuran as $dataIuran) {
                        extract($dataIuran);
                        ?>
                        <tr>
                            <td align="center">
                                <form id="<?= uniqid(); ?>" method="post" class="form">
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button"  data-bs-toggle="dropdown" aria-expanded="false">
									Opsi
								</button>
								<ul class="dropdown-menu border-0 shadow p-3">
                                    <li><a class="dropdown-item py-2 rounded" href="iuran_view.php?method=view&id=<?=$ID_IURAN; ?>"><i class="fa fa-folder-open-o"></i> Lihat</a></li>
                                    <li><a class="dropdown-item py-2 rounded" href="iuran_edit.php?method=edit&id=<?=$ID_IURAN; ?>"><i class="fa fa-edit"></i> Edit</a></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item py-2 rounded" href="backend/transaksi/iuran/t_iuran_hapus.php?method=delete&id=<?php echo $ID_IURAN; ?>" onclick="return confirm('Hapus data ini ?')" style="color:firebrick;"><i class="fa fa-trash-o"></i> Hapus</a></li>
                                </ul>
                                </form>
                            </td>
                            <td><?= $ID_IURAN; ?></td>
                            <td><?= $TGL_IURAN; ?></td>
                            <td><?= $NAMA_ANGGOTA; ?></td>
                            <td><?= $NAMA_TINGKATAN; ?></td>
                            <td align="right" style="<?= $IURAN_COLOR; ?>"><?= $FJUMLAH; ?></td>
                            <td align="right"><?= $FSALDO; ?></td>
                            <td><?= $KETERANGAN; ?></td>
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
