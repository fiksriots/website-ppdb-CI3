 <?php echo $this->session->flashdata('pesan') ?>

 <!-- Begin Page Content -->
 <div class="container-fluid">


     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Informasi Gelombang</h6>

         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <a href="<?php echo base_url('info/info_gelombang/tambah_info_gelombang') ?>" class="btn btn-primary mb-3">Tambah Info Gelombang</a>
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>No</th>
                             <th>Gelombang</th>
                             <th>Dari</th>
                             <th>Sampai</th>
                             <th>status gelombang</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tfoot>
                         <tr>
                             <th>No</th>
                             <th>Gelombang</th>
                             <th>Dari</th>
                             <th>Sampai</th>
                             <th>status gelombang</th>
                             <th>Action</th>
                         </tr>
                     </tfoot>
                     <tbody>

                         <?php $no = 1;
                            foreach ($info_gelombang as $cs) : ?>
                             <tr>
                                 <td><?php echo $no++; ?></td>
                                 <td><?php echo $cs->gelombang ?></td>
                                 <td><?php echo $cs->dari ?></td>
                                 <td><?php echo $cs->sampai ?></td>
                                 <td><button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal">
                                         <?php echo $cs->status ?>
                                     </button></td>
                                 <td>
                                     <div class="row">
                                         <a href="<?php echo base_url('info/info_gelombang/delete_info_gelombang/') . $cs->id_gelombang ?>" class="btn btn-sm btn-danger btn-circle ml-3 mr-2"><i class="fas fa-trash"></i></a>
                                         <a href="<?php echo base_url('info/info_gelombang/update_info_gelombang/') . $cs->id_gelombang ?>" class="btn btn-sm btn-primary btn-circle "><i class="fas fa-edit"></i></a>
                                     </div>
                                 </td>
                             </tr>

                         <?php endforeach; ?>

                     </tbody>
                 </table>
             </div>
         </div>
     </div>

 </div>


 <!-- Button trigger modal -->


 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">

                 <form method="post" action="<?php echo base_url('info/info_gelombang/update_info_gelombang_aksi') ?>">
                     <div class="form-group">
                         <label>Gender</label>
                         <select class="form-control" name="status">
                             <option value="<?php echo $cs->status ?>"><?php echo $cs->status ?></option>
                             <option value="dibuka">dibuka</option>
                             <option value="ditutup">ditutup</option>
                         </select>
                         <?php echo form_error('nama', '<div class="text-small text-danger">', '</div>') ?>
                     </div>
                 </form>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                 <button type="button" class="btn btn-primary btn-sm">Simpan</button>
             </div>
         </div>
     </div>
 </div>