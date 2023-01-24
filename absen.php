<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="absen.scss">
    <link rel="stylesheet" href="css/absen.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/DataTables/Buttons-1.5.6/css/buttons.bootstrap4.min.css">

    <title>Absensi </title>
</head>

<body>
    <div class="akses1"></div>
    <div class="akses2"></div>
    <div class="container">
        <div class="card ">
            <div class="card-body">
                <div class="judul">
                    <h1 class="display-4">Daftar Peserta</h1>
                    <p class="display-3">"Sharing Session"</p>
                    <h1 class="display-2">FORUM STUDI INFORMATIKA</h1>
                </div>
                <table id="table" class="table table-striped ">
                    <thead>
                        <tr>
                            <th>nomor</th>
                            <th>nama</th>
                            <th>nobp</th>
                            <th>jurusan</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'config.php';
                        $sql = "SELECT * FROM peserta";
                        $query = mysqli_query($db, $sql);
                        $no = 0;
                        while($data = mysqli_fetch_array($query)){
                            $no++;
                            echo "<tr>";
                            echo "<td scope='row'>".$no ."</td>";
                            echo "<td>".$data['nama']."</td>";
                            echo "<td>".$data['nobp']."</td>";
                            echo "<td>".$data['jurusan']."</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Datatables -->
    <script src="assets/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="assets/DataTables/DataTables-1.10.18/js/dataTables.bootstrap4.min.js"></script>

    <script src="assets/DataTables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="assets/DataTables/Buttons-1.5.6/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/DataTables/JSZip-2.5.0/jszip.min.js"></script>
    <script src="assets/DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="assets/DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="assets/DataTables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
    <script src="assets/DataTables/Buttons-1.5.6/js/buttons.print.min.js"></script>
    <script src="assets/DataTables/Buttons-1.5.6/js/buttons.colVis.min.js"></script>

    <script>
    $(document).ready(function() {
        var table = $('#table').DataTable({
            buttons: ['copy', 'csv', 'print', 'excel', 'pdf', 'colvis'],
            dom: "<'row'<'col-md-3'l><'col-md-5'B><'col-md-4'f>>" +
                "<'row'<'col-md-12'tr>>" +
                "<'row'<'col-md-5'i><'col-md-7'p>>",
            lengthMenu: [
                [5, 10, 25, 50, 100, -1],
                [5, 10, 25, 50, 100, "All"]
            ]
        });

        table.buttons().container()
            .appendTo('#table_wrapper .col-md-5:eq(0)');
    });
    </script>
</body>

</html>