<div class="container-fluid">
        
          
          <!-- DataTales Example -->
         <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Info Data Sekolah</h6>
                                </div>
                                <div class="card-body">

    <?php foreach ($info_sekolah as $dt) : ?>
          <div class="card">
               <div class="card-body">
                    <div class="row">
                         
                         <div class="col-md-7 mb-2">
                            <div class="card bg-light mb-2" >
                                    
                                 <table class="table">
                                  
                                   
                                   <tr>
                                    <td>Nama Sekolah</td>
                                    <td><?php echo $dt->Nama_sekolah ?></td>
                                   </tr>
                                   <tr>
                                     <td>Alamat</td>
                                     <td> <?php echo $dt->alamat ?> </td>
                                   </tr>
                                  
                                     <tr>
                                       <td>Nomor Telepon</td>
                                       <td> <?php echo $dt->no_telp ?> </td>
                                     </tr>
                                     <tr>
                                       <td>Email</td>
                                       <td> <?php echo $dt->email ?> </td>
                                     </tr>
                                  
                                   <tr>
                                     <td>Nomor Rekening / Bank </td>
                                     <td> <?php echo $dt->no_rek ?> </td>
                                   </tr>
                                   <tr>
                                     <td>Motto </td>
                                     <td> <?php echo $dt->motto ?> </td>
                                   </tr>
                                  </table>
                           </div>
                            <a class="btn btn-sm btn-warning ml-4" href="<?php echo base_url('info/info_sekolah/update_info_sekolah') ?>">Update</a>
                         </div>
                         
                    </div>
               </div>
          </div>
    <?php endforeach; ?>
    </div>
</div></div>

