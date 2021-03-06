<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white border-bottom">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url("/") ?>">
            <img src="<?= base_url("img/tekanid-logo.png") ?>" style="max-height:2rem" class="navbar-brand-img" alt="tekanid logo">
        </a>
    </div>
</nav>

<nav class="d-lg-none bg-gray-800 pt-10">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <span class="text-white">
                            <?php
                            switch((current_url(true)->getSegment(3)))
                            {
                                case("beranda"):
                                    echo "Beranda"; break;
                                case("tautan"):
                                    echo "Peringkas Tautan"; break;
                                case("zoom"):
                                    echo "Zoom Meeting"; break;
                            }
                            ?>
                        </span>
                    </li>

                    <li class="breadcrumb-item active" aria-current="page">
                        <span class="text-white">
                            <?php
                            switch((current_url(true)->getSegment(4)))
                            {
                                case("dasbor"):
                                    echo "Dasbor " . (current_url(true)->getSegment(3)); break;
                                case("buat"):
                                    echo "Buat " . (current_url(true)->getSegment(3)); break;
                                case("beli"):
                                    echo "Beli Paket"; break;
                            }
                            ?>
                        </span>
                    </li>
                </ol>
            </div>

            <div class="col-auto">
                <div class="navbar-dark">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidenavCollapse" aria-controls="sidenavCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>
