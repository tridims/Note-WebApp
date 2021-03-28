<div class="card border-light shadow-sm">
                        <div class="py-4">
                            <div class="d-flex justify-content-center w-100 flex-wrap">
                                <div class="mb-3 mb-lg-0">
                                    <h1 class="h2">Edit Profile</h1>
                                </div>
                            </div>
                        </div>
    <div style="padding-left: 12px;padding-right: 12px;">
        <h2 class="h5 mb-4">General information</h2>
            <form action="<?=base_url();?>Note/updateProfile/<?= $this->session->userdata('id_user')?>" method="post">
                <input type="hidden" id="id_profile" name="id_profile" value="<?=$profile->id_profile?>">
                <div class="row">
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="first_name">Username</label>
                                <input class="form-control" id="username" name="username" type="text" required="" placeholder="Enter your new username" value="<?=$profile->username;?>">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="last_name">Full Name</label>
                                <input class="form-control" id="nama" name="nama" type="text" required="" placeholder="Enter your new Full name" value="<?=$profile->nama;?>">
                            </div>
                        </div>
                </div>
                    <div class="row align-items-center">
                      <div class="col-md-6 mb-3">
                        <label for="birthday">Your Birthday</label>
                        <div class="input-group">
                            <span class="input-group-text"><span class="far fa-calendar-alt"></span></span>
                            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" required="" placeholder="your new birthday : dd/mm/yyyy" value="<?=$profile->tanggal_lahir;?>">
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="gender">Your Gender</label>
                        <select class="form-select mb-0" id="gender" name="gender" aria-label="Gender" value="<?=$profile->gender;?>">
                          <option selected="">Gender</option>
                          <option value="female">Female</option>
                          <option value="male">Male</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input class="form-control" id="email" name="email" type="email" required="" placeholder="Your new Email : name@company.com" value="<?=$profile->email;?>">
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <div class="form-group">
                          <label for="phone">Your Phone Number</label>
                          <input class="form-control" id="noHp" name="noHp" type="number" required="" placeholder="New Number : +62 345 6789 01112" value="<?=$profile->noHp;?>">
                        </div>
                      </div>
                    </div>
                    <h2 class="h5 my-4">Adress</h2>
                    <div class="row">
                      <div class="col-sm-9 mb-3">
                        <div class="form-group">
                          <label for="address">Full Address</label>
                          <input class="form-control" id="alamat" name="alamat" type="text" required="" placeholder="Enter your new home address" value="<?=$profile->alamat;?>">
                        </div>
                      </div>
                    </div>
                    <div class="mt-3">
                      <button type="submit" class="btn btn-primary">
                        Save
                      </button>
                    </div>
                  </form>
                </div>
            </div>
<script>
function prepare_ubah_profile(id) {
      $.getJSON("<?=base_url();?>Note/detailProfile/"+id, function(data){
	  $("#id_profile").val(data.id_profile);
      $("#username").val(data.username);
      $("#nama").val(data.nama);
      $("#tanggal_lahir").val(data.tanggal_lahir);
      $("#gender").val(data.gender);
      $("#email").val(data.email);
      $("#noHp").val(data.noHp);
      $("#alamat").val(data.alamat);
          });
        }
</script>