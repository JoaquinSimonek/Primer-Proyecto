<div class="d-flex align-items-center justify-content-center" style="height: 50vh;">
<div class="row justify-content-center">
            <section class="container">

                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                        <?= session()->getFlashdata('msg')?>
                    </div>
                <?php endif;?>

                <form method="post" action="<?php echo base_url('/enviarlogin') ?>">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                        <input name="pass" type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Recordarme</label>
                    </div>


                        <button type="submit" value="Ingresar" class="btn btn-success">Ingresar</button>
                        <button type="reset" value="Cancelar" class="btn btn-danger">Cancelar</button>
                        <br><span> ¿Aun no se registro? <a href="<?php echo base_url('registro'); ?>">Registrarse aqui</a></span>
                </form>
            </section>
</div>
</div>