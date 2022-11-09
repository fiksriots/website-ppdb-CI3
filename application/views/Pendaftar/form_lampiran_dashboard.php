

        <?php echo $this->session->flashdata('pesan') ?>
        
         <!-- Begin Page Content -->
        <div class="container-fluid">
            
            
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Lampiran</h6>

                </div>
                <div class="card-body">
                      <div class="col-md-6 justify-content-center">
                        
                          
                       <?php 
                            $id =$this->session->userdata('id_lampiran');
                            $st =$this->session->userdata('status');
                            if(empty($st)){?>
                                <a href="" class="btn  btn-sm btn-danger mr-6 mb-3 disabled">upload bukti pembayaran formulir dulu </a>
                                <a href="<?php echo base_url('pendaftar/Pembayaran') ?>" style="float: right;" class="btn btn-success btn-sm"><i class="far fa-money-bill-alt"></i> Bayar</a>
                            <?php } 
                             elseif(empty($id) && isset($st)) { ?>
                                <!-- Button trigger modal -->
                                <a href="<?php echo base_url('pendaftar/form_lampiran/tambah_lampiran')?>" class="btn  btn-success mr-6 mb-3 ">Isi Lampiran</a>
                            <?php } else{?>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="" class="btn  btn-danger mr-6 mb-3 disabled">Anda Sudah Mengisi Lampiran</a>
                                   
                                 </div>
                            <?php }?>
                    
                </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

      

 