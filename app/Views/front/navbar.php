<?php
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
?>




<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <nav class="navbar">
        <div class="container">
          <a class="navbar-brand" href="principal">
            <img src="assets\img\d.png" alt="Bootstrap" width="30" height="24">
          </a>
        </div>
    </nav>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php if(session()->perfil_id == 1): ?>
      <div class="btn btn-secondary active btnUser btn-sm">
        <a href="">ADMIN: <?php echo session('nombre'); ?> </a>
      </div>






      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
          <li class="nav-item">
           <a class="nav-link" href="quiene_somos">Quiénes Somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="acerca">Acerca de</a>
          </li>
          <li class="nav-item">
           <a class="nav-link" href="registro">Registrarse</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login">Login</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled=true>Cerrar Sesion</a>
          </li>
        
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    <?php elseif(session()->perfil_id == 2): ?>
      <div class="btn btn-info active btnUser btn-sm">
        <a href="">CLIENTE: <?php echo session('nombre'); ?> </a>
      </div>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
          <li class="nav-item">
           <a class="nav-link" href="quiene_somos">Quiénes Somos</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled=true>Cerrar Sesion</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    <?php else:?>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
          <li class="nav-item">
           <a class="nav-link" href="quiene_somos">Quiénes Somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="acerca">Acerca de</a>
          </li>
          <li class="nav-item">
           <a class="nav-link" href="registro">Registrarse</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login">Login</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    <?php endif;?>
  </div>
</nav>
