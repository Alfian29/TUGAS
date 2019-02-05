<div class="block-header">
    <h2>Data Transaksi</h2>
</div>
<!-- Basic Table -->
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
            <div class="body table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>KODE TRANSAKSI</th>
                            <th>ID BARANG</th>
                            <th>NAMA BARANG</th>
                            <th>JUMLAH</th>
                            <th>TANGGAL MASUK</th>
                            <th>TANGGAL KELUAR</th>
                            <th>OPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i = 0;
                            foreach ($AllDataTransaksi as $transaksi) {
                                $i++;
                                echo "<tr>
                                        <th scope='row'>$i</th>
                                        <td>$transaksi->kode_trans</td>
                                        <td>$transaksi->id_barang</td>
                                        <td>$transaksi->nama_barang</td>
                                        <td>$transaksi->jumlah</td>
                                        <td>$transaksi->tgl_masuk</td>
                                        <td>$transaksi->tgl_keluar</td>
                                        <td>
                                            <button class='btn btn-success waves-effect' type='button' data-toggle='modal' data-target='#defaultModal".$i."'>Edit</button>
                                            <a class='btn btn-danger waves-effect' href='".base_url('index.php/Transaksi/HapusDataTransaksi/'.$transaksi->kode_trans.'')."'>Delete</a>
                                        </td>
                                    </tr>
                                    
                                    <div class='modal fade' id='defaultModal".$i."' tabindex='-1' role='dialog'>
                                        <div class='modal-dialog' role='document'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <h4 class='modal-title' id='defaultModalLabel'>Edit Transaksi</h4>
                                                </div>
                                                <div class='modal-body'>
                                                    <form id='form_validation' method='POST' action='".base_url('index.php/transaksi/SendUpdateDataTransaksi')."'>
                                                        <input type='text' style='display:none' name='KodeTrans' value='".$transaksi->kode_trans."'>
                                                        <div class='form-group form-float'>
                                                            <div class='form-line'>
                                                                <input type='text' class='form-control' name='IdBarang' value='".$transaksi->id_barang."'>
                                                                <label class='form-label'>Id Barang</label>
                                                            </div>
                                                        </div>
                                                        <div class='form-group form-float'>
                                                            <div class='form-line'>
                                                                <input type='text' class='form-control' name='NamaBarang' value='".$transaksi->nama_barang."'>
                                                                <label class='form-label'>Nama Barang</label>
                                                            </div>
                                                        </div>
                                                        <div class='form-group form-float'>
                                                            <div class='form-line'>
                                                                <input type='text' class='form-control' name='Jumlah' value='".$transaksi->jumlah."'>
                                                                <label class='form-label'>Jumlah</label>
                                                            </div>
                                                        </div>
                                                        <div class='form-group form-float'>
                                                            <div class='form-line'>
                                                                <input type='date' class='form-control' name='TanggalMasuk' value='".$transaksi->tgl_masuk."'>
                                                                <label class='form-label'>Tanggal Masuk</label>
                                                            </div>
                                                        </div>
                                                        <div class='form-group form-float'>
                                                            <div class='form-line'>
                                                                <input type='date' class='form-control' name='TanggalKeluar' value='".$transaksi->tgl_keluar."'>
                                                                <label class='form-label'>Tanggal Keluar</label>
                                                            </div>
                                                        </div>
                                                        <button class='btn btn-primary waves-effect' type='submit'>SAVE CHANGES</button>
                                                    </form>
                                                </div>
                                                <div class='modal-footer'>
                                                    <button type='button' class='btn btn-danger waves-effect' data-dismiss='modal'>CLOSE</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    ";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- #END# Basic Table -->