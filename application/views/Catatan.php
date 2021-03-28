<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
  <div class="btn-toolbar dropdown">
    <button class="btn btn-primary" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#tambah">
      <span class="fas fa-plus mr-2"></span>Create Note
    </button>
  </div>
  <div>
    <button type="button" class="btn btn-primary mr-2" class="form-control datepicker"><span class="fas fa-calendar-alt"  id="tanggal"></span></button>
  </div>
</div>

<div class="card border-light shadow-sm">

                        <div class="py-4">
                            <div class="d-flex justify-content-center w-100 flex-wrap">
                                <div class="mb-3 mb-lg-0">
                                    <h1 class="h2">Your Note</h1>
                                </div>
                            </div>
                        </div>
                        <?php if ($this->session->flashdata('pesan')!=null): ?>
								          <div class="alert" style="background:#fb397d;color:#F8BD7A;"><?= $this->session->flashdata('pesan');?></div>
								        <?php endif?>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-centered table-nowrap mb-0 rounded">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="border-0">No</th>
                                            <th class="border-0">Note</th>
                                            <th class="border-0">Date Created</th>
                                            <th class="border-0">Deadline</th>
                                            <th class="border-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php 
                      $no = 1;
                      foreach($query as $l){ ?>
                        <tr>
                          <td><?= $no?></td>
                          <td><?= $l->isi?></td>
                          <td><?= $l->tgl?></td>
                          <td><?= $l->deadline?></td>
                          <td>
                            <a data-placement="bottom" class="btn aksi" data-toggle="modal" title="edit" data-target="#ubah" onclick="prepare_ubah_catatan(<?=$l->id_catatan?>)"><i class="fa fa-edit"></i></a>
							 	            <a data-placement="bottom" class="btn aksi" onclick="return confirm('Anda yakin ingin menghapus?')" href="<?= base_url();?>Note/deleteCatatan/<?= $l->id_catatan?>" rel="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                      </td>  
                        </tr>
                      <?php $no++;}
                  ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

<!-- Modal Content Tambah Data -->
  <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="h6 modal-title">Tambah Note</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="<?php echo base_url('Note/addCatatan'); ?>" method="post">
        <div class="modal-body">
          <label for="isi">Note</label>
          <input type="text" class="form-control" name="isi" placeholder="Isikan isi deskripsi">
          <label for="deadline">Deadline</label>
          <input type="date" class="form-control" name="deadline" placeholder="Isikan tanggal deadline">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-link text-danger ml-auto" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-sm btn-secondary">Simpan</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<!-- End of Modal Content -->

<!-- Modal Content Update Data -->
  <div class="modal fade" id="ubah" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="h6 modal-title">Update Note</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="<?php echo base_url('Note/updateCatatan'); ?>" method="post">
          <div class="modal-body">
            <input type="hidden" id="id_catatan" name="id_catatan">
            <label for="isi">Note</label>
            <input type="text" class="form-control" name="isi" id="isi" placeholder="Isikan note">
            <label for="deadline">Deadline</label>
            <input type="date" class="form-control" name="deadline" id="deadline" placeholder="Isikan tanggal deadline">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-link text-danger ml-auto" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-sm btn-secondary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<!-- End of Modal Content -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- js -->
<script type="text/javascript">
$( document ).ready(function() {
   $('.data-tables').DataTable();
});
function prepare_ubah_catatan(id) {
      $.getJSON("<?=base_url();?>Note/detailCatatan/"+id, function(data){
        console.log(data);
	  $("#id_catatan").val(data.id_catatan);
      $("#isi").val(data.isi);
      $("#tgl").val(data.tgl);
      $("#deadline").val(data.deadline);
          });
        }
  </script>