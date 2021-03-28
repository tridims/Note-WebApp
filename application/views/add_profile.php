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
            <form action="<?=base_url();?>Note/updateProfile" method="post">
                <input type="hidden" id="id_profile" name="id_profile">
                <div class="row">
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="first_name">Username</label>
                                <input class="form-control" id="username" name="username" type="text" required="" placeholder="Enter your new username">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="last_name">Full Name</label>
                                <input class="form-control" id="nama" name="nama" type="text" required="" placeholder="Enter your new Full name">
                            </div>
                        </div>
                </div>
                    <div class="row align-items-center">
                      <div class="col-md-6 mb-3">
                        <label for="birthday">Your Birthday</label>
                        <div class="input-group">
                            <span class="input-group-text"><span class="far fa-calendar-alt"></span></span>
                            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" required="" placeholder="your new birthday : dd/mm/yyyy">
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="gender">Your Gender</label>
                        <select class="form-select mb-0" id="gender" name="gender" aria-label="Gender">
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
                          <input class="form-control" id="email" name="email" type="email" required="" placeholder="Your new Email : name@company.com">
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <div class="form-group">
                          <label for="phone">Your Phone Number</label>
                          <input class="form-control" id="noHp" name="noHp" type="number" required="" placeholder="New Number : +62 345 6789 01112">
                        </div>
                      </div>
                    </div>
                    <h2 class="h5 my-4">Adress</h2>
                    <div class="row">
                      <div class="col-sm-9 mb-3">
                        <div class="form-group">
                          <label for="address">Full Address</label>
                          <input class="form-control" id="alamat" name="alamat" type="text" required="" placeholder="Enter your new home address">
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