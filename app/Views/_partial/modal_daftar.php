<div class="modal fade" id="modal-daftar" tabindex="-1" role="dialog" aria-labelledby="modal-daftar" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="card card-row">
                <div class="row gx-0">
                    <div class="col-12 col-md-6 bg-cover card-img-start">
                        <img src="<?= base_url("img/tekanid-favicon.png") ?>" alt="..." class="img-fluid d-md-none invisible">

                        <div class="shape shape-end shape-fluid-y text-white d-none d-md-block">
                            <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M116 0H51v172C76 384 0 517 0 517v173h116V0z" fill="currentColor"/></svg>            </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                            <h2 class="mb-0 fw-bold text-center">
                                Buat Akun
                            </h2>

                            <p class="mb-6 text-center text-muted">
                                Masukkan isian berikut untuk melanjutkan
                            </p>

                            <form class="mb-6" id="modal-daftar" method="post" action="<?= base_url("/masuk") ?>">
                                <div class="form-group">
                                    <label class="visually-hidden" for="modal-daftar-posel">
                                        Alamat Posel
                                    </label>
                                    <input type="email" class="form-control" id="modal-daftar-posel" placeholder="Masukkan alamat poselmu">
                                </div>

                                <div class="form-group mb-5">
                                    <label class="visually-hidden" for="modal-daftar-sandi">
                                        Kata Sandi
                                    </label>
                                    <input type="password" class="form-control" id="modal-daftar-sandi" placeholder="Buatlah kata sandi">
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