<div class="container-fluid">
    <div class="block-header">
        <h2>
            Tambah Transaksi
        </h2>
    </div>
    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <?php 
                        $notifikasi = $this->session->flashdata('notif');
                        if($notifikasi != null){
                            echo '<div class="alert alert-danger">'.$notifikasi.'</div>';
                        }
                    ?>
                </div>
                <div class="body">
                    <form id="form_validation" method="POST" action="<?php echo base_url('index.php/transaksi/SendDataTransaksi')?>">
                        <br><div class="form-group form-float">
                        <p>Id Barang</p>
                            <div class="form-line">
                                <input type="text" class="form-control" name="IdBarang">
                            </div>
                        </div>
                        <div class="form-group form-float">
                        <p>Nama Barang</p>
                            <div class="form-line">
                                <input type="text" class="form-control" name="NamaBarang">
                            </div>
                        </div>
                        <div class="form-group form-float">
                        <p>Jumlah</p>
                            <div class="form-line">
                                <input type="text" class="form-control" name="Jumlah">
                            </div>
                        </div>
                        <div class="form-group form-float">
                        <p>Tanggal Masuk</p>
                            <div class="form-line">
                                <input type="date" class="form-control" name="TglMasuk">
                            </div>
                        </div>
                        <div class="form-group form-float">
                        <p>Tanggal Keluar</p>
                            <div class="form-line">
                                <input type="date" class="form-control" name="TglKeluar">
                            </div>
                        </div>
                        <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                    </form>
                </div>


            </div>
        </div>
    </div>
    <!-- #END# Basic Validation -->
</div>