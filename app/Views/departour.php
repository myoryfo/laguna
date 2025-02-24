<?= $this->extend('layouts\main') ?>

<?= $this->section('content') ?>

<div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmModalLabel">Confirm Status Update</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to update the status?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="confirmUpdate">Yes, Update</button>
                </div>
            </div>
        </div>
    </div>

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
            <h3 class="m-0 font-weight-bold">Daftar Barang Keberangkatan (Departour)</h3>
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
                                    <span class="mr-1">Action</span>
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
                        foreach ($barang as $item): ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td>
                                        <button class="btn btn-<?= $item['status_id'] == 1 ? 'primary' : 'secondary' ?> btn-update" <?= $item['status_id'] == 1 ? '' : 'disabled' ?> data-bs-toggle="modal" data-bs-target="#confirmModal" data-id="<?= $item['id']; ?>" ><?= $item['status_id'] == 1 ? 'Pending' : 'Approved' ?></button>
                                    </td>
                                    <td><?= $item['noresi'] ?></td>
                                    <td><?= $item['isi_barang'] ?></td>
                                    <td><?= $item['penerima'] ?></td>
                                    <td><?= $item['alamat_penerima'] ?></td>
                                    <td><?= $item['kota_tujuan'] ?></td>
                                    <td><?= $item['pengirim'] ?></td>
                                    <td><?= $item['alamat_pengirim'] ?></td>
                                    <td><?= $item['lokasi_name'] ?></td>
                                    <td><?= $item['status_name'] ?> <?= $item['kota_tujuan'] ?></td>
                                    <td><?= $item['created_at'] ?></td>
                                </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
       $(document).ready(function() {
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        var csrfHeader = "<?= csrf_header() ?>";   
        let selectedPostId;
     
        $(document).on("click", ".btn-update", function () {
            selectedPostId = $(this).data("id");
            console.log(selectedPostId);
        });
    // Ambil CSRF token dan header dari meta tag
        $("#confirmUpdate").click(function () {
            if (selectedPostId) {
                $.ajax({
                    url: 'api/departour/update-status/' + selectedPostId,
                    method: 'POST',
                    headers: {
                        [csrfHeader]: csrfToken // Sertakan CSRF token di header
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            $("#confirmModal").modal("hide");
                            sessionStorage.setItem('success', 'Entry added successfully.');
                            window.location.href = '/departour';
                        }
                    },
                    error: function(xhr, status, error) {
                        alert('Failed to approved');
                    }
                });
            }
        });
    });
    </script>

<?= $this->endSection() ?>