<?= $this->extend('layouts\main') ?>

<?= $this->section('content') ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">Daftar Delivery</h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th onclick="sortTable(0)">Column 1</th>
                            <th onclick="sortTable(1)">Column 2</th>
                            <th onclick="sortTable(2)">Column 3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Data 1</td>
                            <td>Data 2</td>
                            <td>Data 3</td>
                        </tr>
                        <tr>
                            <td>Data 4</td>
                            <td>Data 5</td>
                            <td>Data 6</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <script>
                function sortTable(n) {
                    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
                    table = document.querySelector("table");
                    switching = true;
                    dir = "asc";
                    while (switching) {
                        switching = false;
                        rows = table.rows;
                        for (i = 1; i < (rows.length - 1); i++) {
                            shouldSwitch = false;
                            x = rows[i].getElementsByTagName("TD")[n];
                            y = rows[i + 1].getElementsByTagName("TD")[n];
                            if (dir == "asc") {
                                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                                    shouldSwitch = true;
                                    break;
                                }
                            } else if (dir == "desc") {
                                if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                                    shouldSwitch = true;
                                    break;
                                }
                            }
                        }
                        if (shouldSwitch) {
                            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                            switching = true;
                            switchcount++;
                        } else {
                            if (switchcount == 0 && dir == "asc") {
                                dir = "desc";
                                switching = true;
                            }
                        }
                    }
                }
            </script>
        </div>
    </div>

</div>
<?= $this->endSection() ?>