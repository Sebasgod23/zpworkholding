<nav class="navbar navbar-expand-lg bg-body-tertiary ">
  <div class="container-fluid">
   <img src="<?= base_url() ?>../webservice/images/logo.png"  alt="Logo" width="110" height="35" class="d-inline-block align-text-top">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url() ?>backend/index_admin/<?= $this->session->id_usuario ?>/<?= $this->session->token ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>backend/conocenos_admin/<?= $this->session->id_usuario ?>/<?= $this->session->token ?>">Conócenos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>backend/portafolio_admin/<?= $this->session->id_usuario ?>/<?= $this->session->token ?>">portafolio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Más
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item"  href="<?= base_url() ?>backend/cambio_password/<?= $this->session->id_usuario ?>/<?= $this->session->token ?>">Cambiar Contraseña</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="<?= base_url() ?>backend/cierrasesion/<?= $this->session->id_usuario ?>/<?= $this->session->token ?>">Salir</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>