<?= $this->extend('layouts\main') ?>

<?= $this->section('content') ?>

<div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmModalLabel">Confirm Status Update</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="response" class="modal-body d-flex flex-row justify-content-center w-full h-full">
                <div class="w-50">
                    <p>No. Resi</p>
                    <p>Isi Barang</p>
                    <p>Penerima</p>
                    <p>Alamat Penerima</p>
                    <p>Kota Tujuan</p>
                    <p>No. Tlp Penerima</p>
                </div>
                <div>
                    <p id="modalNoResi"></p>
                    <p id="modalIsiBarang"></p>
                    <p id="modalPenerima"></p>
                    <p id="modalAlamatPenerima"></p>
                    <p id="modalKotaTujuan"></p>
                    <p id="modalNoTlpPenerima"></p>
                </div>
            </div>
            <div class="modal-footer">
                    <input type="text" class="form-control" id="ket" name="ket" placeholder="Masukkan Nama Si Penerima atau Keterangan" value="<?= old('ket')?>">
                    <select class="form-select" id="status" name="status" aria-describedby="status" >
                        <option class="bg-success" value="pod">POD (Success)</option>
                        <option class="bg-danger" value="dex">Dex (Fail)</option>
                    </select>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="confirmUpdate">Confirm</button>
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
            <h3 class="m-0 font-weight-bold">POD / DEX (<?= $user['name']; ?>)</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive sortable-table">
                <table class="display table table-bordered" style="font-size: 12px; table-layout: auto; width: 100%;" id="myTable">
                    <thead class="thead-light text-center">
                        <tr>
                            <th>
                                <div class="d-flex justify-content-center flex-row align-items-center">
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
                                    <span class="mr-1">Isi Barang</span>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex justify-content-center flex-row align-items-center">
                                    <span class="mr-1">Penerima</span>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex justify-content-center flex-row align-items-center">
                                    <span class="mr-1">Alamat Penerima</span>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex justify-content-center flex-row align-items-center">
                                    <span class="mr-1">Kota Tujuan</span>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex justify-content-center flex-row align-items-center">
                                    <span class="mr-1">Pengirim</span>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex justify-content-center flex-row align-items-center">
                                    <span class="mr-1">Alamat Pengirim</span>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex justify-content-center flex-row align-items-center">
                                    <span class="mr-1">Kota Asal</span>
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
                        foreach ($barang as $item):?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td>
                                    <?php 
                                        switch ($item['status_id']) {
                                            case "4": ?>
                                                <button class="btn btn-primary btn-update fs-6"  data-bs-toggle="modal" data-bs-target="#confirmModal" data-id="<?= $item['id']; ?>" data-noresi="<?= $item['noresi']; ?>" data-isibarang="<?= $item['isi_barang']; ?>" data-penerima="<?= $item['penerima']; ?>" data-alamatpenerima="<?= $item['alamat_penerima']; ?>" data-kotatujuan="<?= $item['kota_tujuan']; ?>" data-notlppenerima="<?= $item['no_tlp_penerima']; ?>">Delivered</button>
                                                <?php break;
                                            case "5": ?>
                                                <button class="btn btn-success btn-update" disabled data-bs-toggle="modal" data-bs-target="#confirmModal" data-id="<?= $item['id']; ?>" data-noresi="<?= $item['noresi']; ?>" data-isibarang="<?= $item['isi_barang']; ?>" data-penerima="<?= $item['penerima']; ?>" data-alamatpenerima="<?= $item['alamat_penerima']; ?>" data-kotatujuan="<?= $item['kota_tujuan']; ?>" data-notlppenerima="<?= $item['no_tlp_penerima']; ?>"><?= $item['status_name']; ?></button>
                                                <?php break;
                                            case "6": ?>
                                                <button class="btn btn-danger btn-update" disabled data-bs-toggle="modal" data-bs-target="#confirmModal" data-id="<?= $item['id']; ?>" data-noresi="<?= $item['noresi']; ?>" data-isibarang="<?= $item['isi_barang']; ?>" data-penerima="<?= $item['penerima']; ?>" data-alamatpenerima="<?= $item['alamat_penerima']; ?>" data-kotatujuan="<?= $item['kota_tujuan']; ?>" data-notlppenerima="<?= $item['no_tlp_penerima']; ?>"><?= $item['status_name']; ?></button>
                                                <?php break;
                                            default: ?>
                                                <button class="btn btn-primary btn-update"  data-bs-toggle="modal" data-bs-target="#confirmModal" data-id="<?= $item['id']; ?>" data-noresi="<?= $item['noresi']; ?>" data-isibarang="<?= $item['isi_barang']; ?>" data-penerima="<?= $item['penerima']; ?>" data-alamatpenerima="<?= $item['alamat_penerima']; ?>" data-kotatujuan="<?= $item['kota_tujuan']; ?>" data-notlppenerima="<?= $item['no_tlp_penerima']; ?>"><?= $item['status_name'] . " - " . explode(" ", $item['user_name'])[0]; ?></button>
                                        <?php } ?>
                                    </td>
                                    
                                    <td><?= $item['noresi'] ?></td>
                                    <td><?= $item['isi_barang'] ?></td>
                                    <td><?= $item['penerima'] ?></td>
                                    <td><?= $item['alamat_penerima'] ?></td>
                                    <td><?= $item['kota_tujuan'] ?></td>
                                    <td><?= $item['pengirim'] ?></td>
                                    <td><?= $item['alamat_pengirim'] ?></td>
                                    <td><?= $item['lokasi_name'] ?></td>
                                    <td><?= $item['status_name'] == "Delivered by" ? $item['status_name'] . " - " . explode(" ", $item['user_name'])[0]  : $item['status_name'] . " - " . $item['keterangan'] ?></td>
                                    <td><?= $item['updated_at'] ?></td>
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
        let selectedPostId;
        let select = $("#status").val();
        
     
        $(document).on("click", ".btn-update", function () {
            selectedPostId = $(this).data("id");
            $("#modalNoResi").text(": " + $(this).data("noresi"));
            $("#modalIsiBarang").text(": " + $(this).data("isibarang"));
            $("#modalPenerima").text(": " + $(this).data("penerima"));
            $("#modalAlamatPenerima").text(": " + $(this).data("alamatpenerima"));
            $("#modalKotaTujuan").text(": " + $(this).data("kotatujuan"));
            $("#modalNoTlpPenerima").text(": " + $(this).data("notlppenerima"));
        });

        $("#confirmUpdate").click(function () {
            let select = $("#status").val();
            console.log(select);
            let ket = $("#ket").val();
            if (selectedPostId) {
                $.ajax({
                    url: `api/poddex/update-status/${selectedPostId}/${select}/${ket}`,
                    method: 'POST',
                    success: function(response) {
                        if (response.status === 'success') {
                            $("#confirmModal").modal("hide");
                            sessionStorage.setItem('success', 'Updated successfully.');
                            window.location.href = '/poddex';
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