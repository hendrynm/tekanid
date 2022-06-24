<div class="modal fade" id="modal-masuk" tabindex="-1" role="dialog" aria-labelledby="modal-masuk" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="card card-row">
                <div class="row">
                    <div class="col-12">
                        <div class="card-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                            <h2 class="mb-0 fw-bold text-center">
                                Masuk ke Akun
                            </h2>

                            <p class="mb-6 text-center text-muted">
                                Masukkan kredensial akun yang telah terdaftar
                            </p>

                            <form class="mb-6" id="form-modal-masuk" method="post" action="<?= base_url("/masuk") ?>">
                                <div class="form-group">
                                    <label class="visually-hidden" for="modal-masuk-posel">
                                        Alamat Posel
                                    </label>
                                    <input type="email" class="form-control" name="posel" id="modal-masuk-posel" placeholder="Masukkan alamat poselmu">
                                </div>

                                <div class="form-group mb-5">
                                    <label class="visually-hidden" for="modal-masuk-sandi">
                                        Kata Sandi
                                    </label>
                                    <input type="password" class="form-control" name= "password" id="modal-masuk-sandi" placeholder="Buatlah kata sandi">
                                </div>

                                <button class="btn w-100 btn-primary" type="submit">Masuk <i class="fe fe-arrow-right d-none d-md-inline ms-3"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>