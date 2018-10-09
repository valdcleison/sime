<?php if(!class_exists('Rain\Tpl')){exit;}?>  <section id="main-content">
      <section class="wrapper">

        <div class="row mt">
          <div class="col-lg-12">
            <br><h3><i class="fa fa-angle-right"></i> Alterar senha do Usuario</h3></b>
            <div class="form-panel">
              <div class="row">
                    <div class="col-sm-12">
                        <?php if( $error != '' ){ ?>
                        <br>
                        <div class="alert alert-danger"><b>Algo deu errado!</b> <?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>.</div>
                        <?php } ?>
                    </div>
                </div>
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="/admin/users/<?php echo htmlspecialchars( $id, ENT_COMPAT, 'UTF-8', FALSE ); ?>/password/">
                  <div class="form-group ">
                    <label for="csenha" class="control-label col-lg-2">Senha Atual</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="cpass" type="password" name="actualpass" minlength="8" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="csenha" class="control-label col-lg-2">Nova Senha</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="cpass" type="password" name="newpass" minlength="8"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="csenha" class="control-label col-lg-2">Repita a Senha</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="crepass" type="password" name="repass" minlength="8"/>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <input class="btn btn-theme" type="submit" value="Salvar"></input>
                      <a class="btn btn-theme04" type="button" href="/admin/users/">Cancelar</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        
      </section>
      <!-- /wrapper -->
    </section>