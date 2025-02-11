<?= $this->extend('layouts\main') ?>

<?= $this->section('content') ?>

<!-- Modal Tambah Barang-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/" method="post">
                    <div class="row g-3">
                        <!-- First Column -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="isi_barang" class="form-label">Isi Barang</label>
                                <input type="text" class="form-control" id="isi_barang" name="isi_barang" placeholder="Masukkan Ket Isi Barang">
                            </div>
                            <div class="mb-3">
                                <label for="nama_penerima" class="form-label">Nama Penerima</label>
                                <input type="text" class="form-control" id="nama_penerima" name="nama_penerima" placeholder="Masukkan Nama Penerima">
                            </div>
                            <div class="mb-3">
                                <label for="alamat_penerima" class="form-label">Alamat Penerima</label>
                                <input type="text" class="form-control" id="alamat_penerima" name="alamat_penerima" placeholder="Masukkan Alamat Penerima">
                            </div>
                            <div class="mb-3">
                                <label for="no_tlp_penerima" class="form-label">Nomor Telepon Penerima</label>
                                <input type="text" class="form-control" id="no_tlp_penerima" name="no_tlp_penerima" placeholder="Masukan No Telepon Penerima">
                            </div>
                            <!-- Hidden -->
                            <input type="hidden" id="lokasi_id" name="lokasi_id" value="<?= session()->get('lokasi_id'); ?>">
                            <input type="hidden" id="status_id" name="status_id" value="1">

                        </div>

                        <!-- Second Column -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="kota_tujuan" class="form-label">Kota Tujuan</label>
                                <div class="input-group">
                                    <select class="form-control" id="kota_tujuan" name="kota_tujuan">
                                        <option value="">Pilih Kota Tujuan</option>
                                        <option value="Parepare">Parepare</option>
                                        <option value="Barru">Barru</option>
                                        <option value="Pinrang">Pinrang</option>
                                        <option value="Sidrap">Sidrap</option>
                                        <option value="Pangkep">Pangkep</option>
                                        <option value="Sengkang">Sengkang</option>
                                    </select>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="nama_pengirim" class="form-label">Nama Pengirim</label>
                                <input type="text" class="form-control" id="nama_pengirim" name="nama_pengirim" placeholder="Masukkan Nama Pengirim">
                            </div>
                            <div class="mb-3">
                                <label for="alamat_pengirim" class="form-label">Alamat Pengirim</label>
                                <input type="text" class="form-control" id="alamat_pengirim" name="alamat_pengirim" placeholder="Masukan Nama Pengirim">
                            </div>
                            <div class="mb-3">
                                <label for="no_tlp_pengirim" class="form-label">Nomor Telepon Pengirim</label>
                                <input type="text" class="form-control" id="no_tlp_pengirim" name="no_tlp_pengirim" placeholder="Masukan No Telepon Pengirim">
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <?php if (session()->get('logged_in')): ?>

        <div class="alert alert-success" role="alert" id="login-alert">
            You are logged in!
        </div>
    <?php endif; ?>

</div>
<!-- End Modal Tambah Barang -->

<!-- Modal Navbar Tracking Barang-->
<div class="modal fade" id="trackingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-fullscreen-xxl-down" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center w-100" id="exampleModalLabel">Tracking Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body position-relative">
                <form action="/" method="post">
                    <div class="mb-3">
                        <input type="text" class="form-control text-center" id="no_resi" name="no_resi" placeholder="Masukkan Nomor Resi">
                    </div>

                    <div class="modal-footer position-absolute bottom-0 end-0 w-100">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <?php if (session()->get('logged_in')): ?>

        <div class="alert alert-success" role="alert" id="login-alert">
            You are logged in!
        </div>
    <?php endif; ?>

</div>
<!-- End Modal Tracking Barang -->

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success position-sticky" id="success-alert">
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

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold">Daftar Barang</h3>
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
                            if ($item['lokasi_name'] == session()->get('lokasi_name')): ?>
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
                                    <td><?= $item['status_name'] ?></td>
                                    <td><?= $item['created_at'] ?></td>
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