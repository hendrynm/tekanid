<div class="modal fade" id="modal-daftar" tabindex="-1" role="dialog" aria-labelledby="modal-daftar" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="card card-row">
                <div class="row">
                    <div class="col-12">
                        <div class="card-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                            <h2 class="mb-0 fw-bold text-center">
                                Buat Akun
                            </h2>

                            <p class="mb-6 text-center text-muted">
                                Isilah formulir berikut untuk melanjutkan pendaftaran akun
                            </p>

                            <form class="mb-6" id="form-modal-daftar" method="post" action="<?= base_url("/daftar") ?>">
                                <div class="form-group">
                                    <label class="visually-hidden" for="modal-daftar-nama">
                                        Nama
                                    </label>
                                    <input type="text" class="form-control" name="nama" id="modal-daftar-nama" placeholder="Masukkan namamu" required>
                                </div>

                                <div class="form-group">
                                    <label class="visually-hidden" for="modal-daftar-posel">
                                        Alamat Posel
                                    </label>
                                    <input type="email" class="form-control" name="posel" id="modal-daftar-posel" placeholder="Masukkan alamat poselmu" required>
                                </div>

                                <div class="form-group mb-5">
                                    <label class="visually-hidden" for="modal-daftar-sandi">
                                        Kata Sandi
                                    </label>
                                    <input type="password" class="form-control" name= "password" id="modal-daftar-sandi" placeholder="Buatlah kata sandi" required>
                                </div>

                                <div class="form-group mb-5">
                                    <label class="visually-hidden" for="modal-daftar-sandi-2">
                                        Ulangi Kata Sandi
                                    </label>
                                    <input type="password" class="form-control" name="password2" id="modal-daftar-sandi-2" placeholder="Ulangi kata sandi" required>
                                </div>

                                <button class="btn w-100 btn-primary" type="submit">Daftarkan akun <i class="fe fe-arrow-right d-none d-md-inline ms-3"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>