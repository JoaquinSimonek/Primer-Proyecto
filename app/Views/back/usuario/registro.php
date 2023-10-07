<div class="d-flex align-items-center justify-content-center" style="height: 80vh;">
  <div class="row justify-content-center">

    <?php $validation = \Config\Services::validation(); ?>
    <form method="post" action="<?php echo base_url('/enviar-form') ?>">


      <?= csrf_field(); ?>
      <?= csrf_field(); ?>

      <?php if (!empty(session()->getFlashdata('fail'))) : ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?> </div>

      <?php endif ?>

      <?php if (!empty(session()->getFlashdata('success'))) : ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('success'); ?> </div>
      <?php endif ?>



      <div class="mb-3">
        <label for="exampleInputNombre" class="form-label">Nombre</label>
        <input name="nombre" type="text" class="form-control" id="exampleInputNombre">

        <?php if ($validation->getError('nombre')) { ?>
          <div class='alert alert-danger mt-2'>
            <?= $error = $validation->getError('nombre'); ?>
          </div>
        <?php } ?>
      </div>

      <div class="mb-3">
        <label for="exampleInputApellido" class="form-label">Apellido</label>
        <input name="apellido" type="text" class="form-control" id="exampleInputApellido">

        <?php if ($validation->getError('apellido')) { ?>
          <div class='alert alert-danger mt-2'>
            <?= $error = $validation->getError('apellido'); ?>
          </div>
        <?php } ?>
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail" class="form-label">Email</label>
        <input name="email" type="text" class="form-control" id="exampleInputEmail1">

        <?php if ($validation->getError('email')) { ?>
          <div class='alert alert-danger mt-2'>
            <?= $error = $validation->getError('email'); ?>
          </div>
        <?php } ?>
      </div>

      <div class="mb-3">
        <label for="exampleInputUser" class="form-label">Usuario</label>
        <input name="usuario" type="text" class="form-control" id="exampleInputUser">

        <?php if ($validation->getError('usuario')) { ?>
          <div class='alert alert-danger mt-2'>
            <?= $error = $validation->getError('usuario'); ?>
          </div>
        <?php } ?>
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input name="pass" type="password" class="form-control" id="exampleInputPassword1" aria-describedby="ContraHelp">
        <div id="ContraHelp" class="form-text">Crea una contraseña segura con letras, números y símbolos combinados.</div>

        <?php if ($validation->getError('pass')) { ?>
          <div class='alert alert-danger mt-2'>
            <?= $error = $validation->getError('pass'); ?>
          </div>
        <?php } ?>
      </div>


      <button type="submit" value="Guardar" class="btn btn-success">Registrarse</button>
      <button type="reset" value="Cancelar" class="btn btn-danger">Cancelar</button>


    </form>
  </div>
</div>