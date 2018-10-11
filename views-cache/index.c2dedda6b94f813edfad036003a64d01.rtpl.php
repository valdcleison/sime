<?php if(!class_exists('Rain\Tpl')){exit;}?>


     <section id="main-content">
      <section class="wrapper">
        <br>
        <a type="submit" class="btn btn-success" id="btnEscola" ><i class="fa fa-plus-circle"></i> Nova Frequencia</a>
        <a type="submit" class="btn btn-warning" id="btnEscola" ><i class="fa fa-minus-square"></i> Finalizar Frequencia</a>
        <a type="submit" class="btn btn-primary" id="btnEscola" ><i class="fa fa-check"></i> Justificar Frequencia</a>

        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> Lista de Frequencia</h4>
              <div class="row">
                
                <div class="col-md-6">
                  <?php if( $error != '' ){ ?>

                  <br>

                  <div class="alert alert-danger"><b>Algo deu errado!</b> <?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>.</div>
                  <?php } ?>

                  <?php if( $succes != '' ){ ?>

                  <br>

                  <div class="alert alert-success"><b><?php echo htmlspecialchars( $succes, ENT_COMPAT, 'UTF-8', FALSE ); ?></b></div>
                  <?php } ?>

                </div>
                                             
                
                 
              </div>
              <section id="no-more-tables">
                <table class="table table-bordered table-striped cf">
                  <thead class="cf">
                    <tr>
                      <th>#</th>
                      <th ><i class="fa fa-user"> </i> Escola</th>
                      <th><i class="fa fa-envelope-o"> </i> Inicio</th>
                      <th><i class=" fa fa-user"> </i> Final</th>
                      <th><i class=" fa fa-flag"> </i> Alunos Presentes</th>
                      <th><i class=" fa fa-flag"> </i> Alunos Ausentes</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $counter1=-1;  if( isset($users) && ( is_array($users) || $users instanceof Traversable ) && sizeof($users) ) foreach( $users as $key1 => $value1 ){ $counter1++; ?>

                      <tr>
                        <td data-title="#">
                          <?php echo htmlspecialchars( $value1["idusuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>

                        </td>
                        <td data-title="Nome" class="hidden-phone"><?php echo htmlspecialchars( $value1["nomepessoa"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td data-title="Email"><?php echo htmlspecialchars( $value1["emailpessoa"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td data-title="Nome de Usuario"><?php echo htmlspecialchars( $value1["usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td data-title="Nivel"><span class="label label-primary label-mini"><?php if( $value1["niveladmin"] == 0 ){ ?>Aluno/Responsavel<?php }elseif( $value1["niveladmin"] == 1 ){ ?>Funcionario Escola<?php }else{ ?>Administrador do Sistema<?php } ?></span></td>
                        <td>
                          <?php if( $value1["statususuario"] == 0 ){ ?>

                          <a class="btn btn-info btn-xs" onclick="return confirm('Deseja desbloquear o acesso ao usuario: <?php echo htmlspecialchars( $value1["nomepessoa"], ENT_COMPAT, 'UTF-8', FALSE ); ?>?')" href="/admin/usuario/<?php echo htmlspecialchars( $value1["idusuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/status/<?php echo htmlspecialchars( $value1["statususuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                            
                              <i class="fa fa-lock"></i> Bloqueado</a>
                            <?php }else{ ?>

                             <a class="btn btn-info btn-xs" onclick="return confirm('Deseja bloquear o acesso ao usuario: <?php echo htmlspecialchars( $value1["nomepessoa"], ENT_COMPAT, 'UTF-8', FALSE ); ?>?')" href="/admin/usuario/<?php echo htmlspecialchars( $value1["idusuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/status/<?php echo htmlspecialchars( $value1["statususuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                              <i class="fa fa-unlock"></i> Desbloqueado</a>
                            <?php } ?>

                          <a class="btn btn-info btn-xs" href="/admin/users/<?php echo htmlspecialchars( $value1["idusuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/password"><i class="fa fa-lock"></i> Alterar Senha</a>
                          <a class="btn btn-primary btn-xs" href="/admin/users/<?php echo htmlspecialchars( $value1["idusuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><i class="fa fa-pencil"></i> Editar</a>
                          <a class="btn btn-danger btn-xs" onclick="return confirm('Deseja excluir o usuario: <?php echo htmlspecialchars( $value1["usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>?')" href="/admin/users/<?php echo htmlspecialchars( $value1["idusuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete"><i class="fa fa-trash-o "></i> Deletar</a>
                        </td>
                      </tr>
                   <?php } ?>

                  </tbody>
                </table>
              </section>
              
            </div>

            <!-- /content-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
