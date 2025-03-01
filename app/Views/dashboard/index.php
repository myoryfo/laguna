<?= $this->extend('layouts\main') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4 position-relative">
<!-- Session Flash Success -->
    <?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success position-absolute top-0 start-50" id="success-alert">
    <?= session()->getFlashdata('success') ?>
    </div>
    <script>
        setTimeout(function() {
            document.getElementById('success-alert').classList.add('fade-out');
        }, 1000);
    </script>
    <style>
        .fade-out {
            opacity: 0;
            transition: opacity 1s ease-out;
        }
    </style>
    <?php endif; ?>
<!-- End Session Flash Success -->
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold">Daftar Semua Barang</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive sortable-table">
                <table class="display table table-bordered" style="font-size: 12px; table-layout: auto; width: 100%;" id="myTable">
                    <thead class=" thead-light text-center">
                        <tr>
                            <th>
                                <div class="d-flex justify-content-center flex-row align-items-center ">
                                    <span class="mr-1">No</span>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex justify-content-center flex-row align-items-center">
                                    <span class="mr-1">No.Resi</span>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex justify-content-center flex-row align-items-center">
                                    <span class="mr-1">Isi</span>
                                    <span class="mr-1">Barang</span>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex justify-content-center flex-row align-items-center">
                                    <span class="mr-1">Penerima</span>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex justify-content-center flex-row align-items-center">
                                    <span class="mr-1">Alamat</span>
                                    <span class="mr-1">Penerima</span>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex justify-content-center flex-row align-items-center">
                                    <span class="mr-1">Kota</span>
                                    <span class="mr-1">Tujuan</span>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex justify-content-center flex-row align-items-center">
                                    <span class="mr-1">Pengirim</span>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex justify-content-center flex-row align-items-center">
                                    <span class="mr-1">Alamat</span>
                                    <span class="mr-1">Pengirim</span>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex justify-content-center flex-row align-items-center">
                                    <span class="mr-1">Kota</span>
                                    <span class="mr-1">Asal</span>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex justify-content-center flex-row align-items-center">
                                    <span class="mr-1">Status</span>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex justify-content-center flex-row align-items-center">
                                    <span class="mr-1">Tanggal</span>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($barang as $item):
                            if ($item['lokasi_name'] == $user['lokasi_name']): ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $item['noresi'] ?></td>
                                    <td><?= $item['isi_barang'] ?></td>
                                    <td><?= $item['penerima'] ?></td>
                                    <td><?= $item['alamat_penerima'] ?></td>
                                    <td><?= $item['kota_tujuan'] ?></td>
                                    <td><?= $item['pengirim'] ?></td>
                                    <td><?= $item['alamat_pengirim'] ?></td>
                                    <td><?= $item['lokasi_name'] ?></td>
                                    <?php if($item['status_name'] == "Entry"): ?>
                                    <td><?= $item['status_name']?></td>
                                    <?php elseif($item['status_name'] == "Departour To"): ?>
                                    <td><?= $item['status_name']?> <?= $item['lokasi_name']; ?></td>
                                    <?php elseif($item['status_name'] == "Arrived In"): ?>
                                    <td><?= $item['status_name']?> <?= $item['lokasi_name']; ?></td>
                                    <?php elseif($item['status_name'] == "Delivered by"): ?>
                                    <td><?= $item['status_name'] . " - " . explode(" ", $item['user_name'])[0]; ?></td>
                                    <?php elseif($item['status_name'] == "Success"): ?>
                                    <td><?= $item['status_name'] . " - " . $item['user_name']; ?></td>
                                    <?php elseif($item['status_name'] == "Return"): ?>
                                    <td><?= $item['status_name'] . " - " . $item['user_name']; ?></td>
                                    <?php endif; ?>
                                    <td><?= $item['updated_at'] ?></td>
                                </tr>
                        <?php
                            endif;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>