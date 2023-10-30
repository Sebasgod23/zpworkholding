<nav class="navbar">
    <script>
        var appData = {
            uri_app: "<?= base_url() ?>",
            uri_ws: "<?= base_url() ?>../webservice/",
            idUsu : "<?= $this->session->id_usuario ?>",
            Urlimg: "<?= base_url() ?>../webservice/images/",
        };
    </script>
    <div class="container-fluid">
        <a class="navbar-brand text-dark "href="<?= base_url() ?>backend/login/<?= $this->session->id_usuario ?>/<?= $this->session->token ?>">
            <h5>ZPWORKADMIN</h5>
        </a>
    </div>
</nav>