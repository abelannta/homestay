<?= $this->extend('layout/templateuser'); ?>

<?= $this->section('content'); ?>

<center>
    <h2 class="mb-4">Guest House Candi Panggung</h2>
</center>
<section class="projects-section bg-light" id="project">
    <div class="container">
        <!-- Featured Project Row-->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
            <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="\img\suhat\halaman.jpg" alt="" /></div>
            <div class="col-xl-4 col-lg-5">
                <div class="featured-text text-center text-lg-left">
                    <h4>Area Lingkungan yang Senyap</h4>
                    <p class="text-black-50 mb-0">Kami melakukan berbagai riset dalam pemilihan letak homestay.Tempat yang senyap dan jauh dari
                        keramaian merupakan pilihan yang cocok agar customer dapat beristirahat dengan tenang.</p>
                </div>
            </div>
        </div>
        <!-- Project One Row-->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
            <div class="col-lg-6"><img class="img-fluid" src="\img\suhat\tv.jpg" alt="" /></div>
            <div class="col-lg-6">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4 class="text-white">Ruang TV Bersama</h4>
                            <p class="mb-0 text-white-50"> Terdapat ruang TV bersama yang dapat
                                digunakan. Dilengkapi dengan ratusan TV channel yang bisa anda
                                nikmati
                            </p>
                            <hr class="d-none d-lg-block mb-0 ml-0" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project Two Row-->
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-6"><img class="img-fluid" src="\img\suhat\kolam.jpg" alt="" /></div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4 class="text-white">Kolam Renang</h4>
                            <p class="mb-0 text-white-50"> Anda bisa menggunakan kolam renang yang
                                dapat anda nikmati dari pukul 06.00 - 20.00
                            </p>
                            <hr class="d-none d-lg-block mb-0 ml-0" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row 3-->
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-6"><img class="img-fluid" src="\img\suhat\dapur.jpg" alt="" /></div>
            <div class="col-lg-6 ">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4 class="text-white">Dapur Bersama</h4>
                            <p class="mb-0 text-white-50">Anda dapat menggunakan dapur untuk memenuhi
                                kebutuhan pangan anda. Terdapat berbagai macam perlatan masak yang
                                dapat digunakan
                            </p>
                            <hr class="d-none d-lg-block mb-0 ml-0" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <center>
            <a href="candi/kamar">
                <button type="button" class="btn btn-primary btn-lg">Booking Now</button>
            </a>
        </center>
</section>
</div>
</div>

<?= $this->endSection(); ?>