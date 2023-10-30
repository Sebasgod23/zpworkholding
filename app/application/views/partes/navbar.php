<header class="custom-header">
    <script>
        var appData = {
            uri_app: "<?= base_url() ?>",
            uri_ws: "<?= base_url() ?>../webservice/",
            Urlimg: "<?= base_url() ?>../webservice/images/",
        };
    </script>
    <div class="custom-container">
        <div class="custom-row align-center">
            <div class="custom-col-4 text-center">
                <p><i class="bi bi-telephone-fill  me-2 text-primary"></i><strong>Teléfono</strong> +52 442 348 1185 o 722 305 1811</p>
            </div>
            <div class="custom-col-4 text-center">
                <p><i class="custom-icon bi-inbox-fill me-2 text-primary"></i><strong>Email</strong> <a class="link-var1 a-nav-2" href="https://mail.google.com/" target="_blank">ventas@zpworkholding.com.mx</a></p>
            </div>
            <div class="custom-col-4 text-center">
                <ul class="custom-social-icon ">
                    <li><span><strong>Encuéntranos en</strong></span></li>
                    <li><a href="https://www.facebook.com/zpworkholding" target="_blank" class="custom-icon bi-facebook"></a></li>
                    <li><a href="https://twitter.com/zp_workholding" target="_blank" class="custom-icon bi-twitter-x"></a></li>
                    <li><a href="https://www.linkedin.com/in/zp-workholding-62a2a1149/" target="_blank" class="custom-icon bi-linkedin"></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<!-- barra 2 -->
<!-- start navigation -->
<nav class="nav-2 navbar navbar-expand-lg navbar-gray bg-white">
    <div class="container-fluid">
        <a class="navbar-brand a-nav-2" href="<?= base_url() ?>backend/index/">
            <img src="<?= base_url() ?>static/images/logo.png" alt="Logo" width="180" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-2">
                    <a class="a-nav-2" href="<?= base_url() ?>backend/index/"><i class="bi bi-house-gear me-2"></i>INICIO</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="a-nav-2" href="<?= base_url() ?>backend/filosofia/"><i class="bi bi-journal-check me-2"></i>FILOSOFÍA</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="a-nav-2" href="<?= base_url() ?>backend/conocenos/"><i class="bi bi-people-fill me-2"></i>CONÓCENOS</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="a-nav-2" href="<?= base_url() ?>backend/servicios/"><i class="bi bi-wrench-adjustable me-2"></i>SERVICIOS</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="a-nav-2" href="<?= base_url() ?>backend/portafolio/"><i class="bi bi-journals me-2"></i>PORTAFOLIO</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="a-nav-2" href="<?= base_url() ?>backend/contactos/"><i class="bi bi-headset me-2"></i>CONTACTO</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- end navigation -->