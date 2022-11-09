<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Update Data Gelombang</h6>
        </div>
        <div class="card-body">
            <?php foreach ($info_gelombang as $cs) : ?>
                <form method="post" action="<?php echo base_url('info/info_gelombang/update_info_gelombang_aksi') ?>">
                    <div class="row">
                        <input type="hidden" name="id_gelombang" value="<?php echo $cs->id_gelombang ?>">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Gelombang</label>
                                <input type="hidden" name="id_gelombang" value="<?php echo $cs->id_gelombang ?>">
                                <input type="text" name="gelombang" class="form-control" value="<?php echo $cs->gelombang ?>">
                            </div>
                            <div class="form-group">
                                <label>Dari</label>
                                <input type="hidden" name="id_gelombang" value="<?php echo $cs->id_gelombang ?>">
                                <input type="text" name="dari" class="form-control" value="<?php echo $cs->dari ?>">
                            </div>
                            <div class="form-group">
                                <label>Sampai</label>
                                <input type="hidden" name="id_gelombang" value="<?php echo $cs->id_gelombang ?>">
                                <input type="text" name="sampai" class="form-control" value="<?php echo $cs->sampai ?>">
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control" name="status">
                                    <option value="<?php echo $cs->status ?>"><?php echo $cs->status ?></option>
                                    <option value="dibuka">dibuka</option>
                                    <option value="ditutup">ditutup</option>
                                </select>
                                <?php echo form_error('nama', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <button type="submit" class="btn btn-sm btn-primary mt-4">SUBMIT</button>
                            <button type="reset" class="btn btn-sm btn-danger mt-4">RESET</button>
                        </div>
                    </div>
                </form>
            <?php endforeach; ?>
        </div>

    </div>
</div>