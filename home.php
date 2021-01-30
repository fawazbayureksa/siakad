<?php
include 'database.php';
?>
<style>
    th {
        text-align: center;
    }

    td {
        text-align: center;
    }

    .card-header {
        background-color: #117c6f;
        color: white;
    }

    .card {
        margin-top: 20px;
    }
</style>

<body>
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <img src="dist/img/tutwuri.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" width="40" style="opacity: .8"> SELAMAT DATANG
                        </div>
                        <div class="card-body">
                            <p><?php
                                echo "Tanggal Hari ini";
                                echo "<br/>";
                                echo date('l, d-m-Y');
                                ?></p>
                        </div>
                        <div class="card-footer">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>


</body>