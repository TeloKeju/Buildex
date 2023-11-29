<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section id="jumbotron">
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://upload.wikimedia.org/wikipedia/id/9/91/Bob_the_Builder.jpg" class="d-block w-100 img-fluid" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="https://m.media-amazon.com/images/S/pv-target-images/ca6b0bcd7670b83e20fde3555cdf05b5de62805a453e2e4f5cff0316f51eefb3._AC_SX720_FMjpg_.jpg" class="d-block w-100 img-fluid" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1zsh6bKpMY7DoG_ZDPzm0sumWO3_6sCIagw&usqp=CAU" class="d-block w-100 img-fluid" alt="..." />
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<main class="p-3">
    <article class="mt-3">
        <section class="card p-3">
            <h1 class="text-center fs-5" id="about">About Us</h1>
            <section class="left-picture">
                <img src="https://placehold.co/300x300" class="rounded mx-auto d-block img-fluid" alt="pict" />
                <p class="mt-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus
                    consequatur, atque voluptas tempora blanditiis doloremque enim ad
                    culpa corrupti ea quam repudiandae vero, excepturi ratione. Officia
                    doloremque ratione optio earum. Quaerat neque sequi doloremque
                    temporibus debitis, nostrum eos optio accusamus voluptate voluptatum
                    iste expedita earum nam ut at sint ex molestiae repellat excepturi
                </p>
            </section>
        </section>
        <section class="card p-3 mt-3">
            <h1 class="text-center mt-3 fs-5">Desain Rumah</h1>
            <section class="right-picture">
                <section class="pict-wrap btn-wrap">
                    <p class="mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus
                        consequatur, atque voluptas tempora blanditiis doloremque enim ad
                        culpa corrupti ea quam repudiandae vero, excepturi ratione. Officia
                        doloremque ratione optio earum. Quaerat neque sequi doloremque
                        temporibus debitis, nostrum eos optio accusamus voluptate voluptatum
                        iste expedita earum nam ut at sint ex molestiae repellat excepturi
                    </p>
                    <a href="pages/desain" class="btn btn-light m-auto w-auto">Selengkapnya</a>
                </section>
                <img src="https://placehold.co/300x300" class="rounded mx-auto d-block img-fluid" alt="pict" />
            </section>
        </section>
        <section class="card p-3 mt-3">
            <h1 class="text-center fs-5">Detail Contractor</h1>
            <section class="left-picture">
                <img src="https://placehold.co/300x300" class="rounded mx-auto d-block img-fluid" alt="pict" />
                <section class="btn-wrap">
                    <p class="mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus
                        consequatur, atque voluptas tempora blanditiis doloremque enim ad
                        culpa corrupti ea quam repudiandae vero, excepturi ratione. Officia
                        doloremque ratione optio earum. Quaerat neque sequi doloremque
                        temporibus debitis, nostrum eos optio accusamus voluptate voluptatum
                        iste expedita earum nam ut at sint ex molestiae repellat excepturi
                    </p>
                    <a href="pages/contractor" class="btn btn-light m-auto w-auto">Selengkapnya</a>
                </section>
            </section>
        </section>
        <section class="card p-3 mt-3">
            <h1 class="text-center mt-3 fs-5">Contact Person</h1>
            <section class="right-picture">
                <p class="mt-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus
                    consequatur, atque voluptas tempora blanditiis doloremque enim ad
                    culpa corrupti ea quam repudiandae vero, excepturi ratione. Officia
                    doloremque ratione optio earum. Quaerat neque sequi doloremque
                    temporibus debitis, nostrum eos optio accusamus voluptate voluptatum
                    iste expedita earum nam ut at sint ex molestiae repellat excepturi
                </p>
                <img src="https://placehold.co/300x300" class="rounded mx-auto d-block img-fluid" alt="pict" />
            </section>
        </section>
    </article>
</main>
<?= $this->endSection(); ?>
