<!-- Asegúrate de incluir los enlaces a Bootstrap 5 y tu archivo CSS personalizado en el encabezado de tu documento HTML -->

<!-- CSS personalizado -->
<link rel="stylesheet" href="styles.css">

<!-- Contenido HTML -->
<section id="portfolio" class="portfolio">
    <div class="container">
        <h2 class="text-center mb-5">PORTAFOLIO</h2>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="portfolio-item">
                    <a href="images/1.png" data-lightbox="roadtrip" title="Dispositivo para monobloc">
                        <img class="img-fluid grayscale" src="<?= base_url() ?>static/images/DISPO1.png" alt="Dispositivo para monobloc">
                        <div class="overlay">
                            <div class="text-center">Ver imagen</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="portfolio-item">
                    <a href="images/2.png" data-lightbox="roadtrip" title="Dispositivo para monobloc">
                        <img class="img-fluid grayscale" src="<?= base_url() ?>static/images/DISPO2.png" alt="Dispositivo para monobloc">
                        <div class="overlay">
                            <div class="text-center">Ver imagen</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="portfolio-item">
                    <a href="images/3.png" data-lightbox="roadtrip" title="Dispositivo para monobloc">
                        <img class="img-fluid grayscale" src="<?= base_url() ?>static/images/DISPO3.png" alt="Dispositivo para monobloc">
                        <div class="overlay">
                            <div class="text-center">Ver imagen</div>
                        </div>
                    </a>
                </div>
            </div>
        </div><!--/row-->
    </div>
</section>
