



        <?php echo $this->session->flashdata('pesan') ?>
        
         <!-- Begin Page Content -->
        <div class="container-fluid">
            
            
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Dashboard Tes Seleksi</h6>

                </div>
                <div class="card-body">
                      <div class="col-md-6 justify-content-center">
                        
                          
                        <?php 
                            $st =$this->session->userdata('status');
                            $id =$this->session->userdata('id_ujian');
                            if(empty($st)){?>
                                <a href="" class="btn  btn-danger mr-6 mb-3 disabled">upload bukti pembayaran formulir dulu </a>
                                <a href="<?php echo base_url('pendaftar/Pembayaran') ?>" style="float: right;" class="btn btn-success btn-sm"><i class="far fa-money-bill-alt"></i> Bayar</a>
                            <?php }  elseif (empty($id) && isset($st)) { ?>
                            <a href="<?php echo base_url('pendaftar/ujian')?>" class="btn  btn-success mr-6 mb-3 ">Mulai Ujian</a>
                            <?php } else{?>
                                <a href="" class="btn  btn-danger mr-6 mb-3 disabled">Anda Sudah Melakukan Tes Seleksi</a>
                                <a href="<?php echo base_url('pendaftar/ujian/nilai')?>" class="btn  btn-danger mr-6 mb-3 ">Lihat Nilai</a>
                            <?php }?>
                    
                </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

      

 