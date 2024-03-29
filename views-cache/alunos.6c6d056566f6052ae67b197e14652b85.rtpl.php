<?php if(!class_exists('Rain\Tpl')){exit;}?>


     <section id="main-content">
      <section class="wrapper site-min-height">
        
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> Lista de Alunos</h4>
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
                      <th ><i class="fa fa-user"> </i> Nome</th>
                      <th><i class="fa fa-creditcard"> </i> CPF</th>
                      <th><b>#</b> Matrícula</th>
                      <th><i class="fa fa-envelope-o"> </i> Responsavel</th>
                      <th><i class="fa fa-envelope-o"> </i> Endereco</th>
                      <th><i class="fa fa-envelope-o"> </i> Usuário</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $counter1=-1;  if( isset($alunos) && ( is_array($alunos) || $alunos instanceof Traversable ) && sizeof($alunos) ) foreach( $alunos as $key1 => $value1 ){ $counter1++; ?>

                      <tr>
                        
                        <?php $cpf = $value1["cpfpessoa"]; ?>

                        <td valign="middle" data-title="Nome" class="hidden-phone"><?php echo htmlspecialchars( $value1["nomepessoa"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <?php if( $cpf == null ){ ?>

                          <td  valign="middle" data-title="CPF" class="hidden-phone">Aluno sem CPF</td>
                        <?php }else{ ?>


                          <td  valign="middle" data-title="CPF" class="hidden-phone"><?php echo mascara($cpf, '###.###.###-##'); ?></td>
                        <?php } ?>

                        <td  valign="middle" data-title="Matrícula" class="hidden-phone"><?php echo htmlspecialchars( $value1["numeromatricula"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td  valign="middle" data-title="Responsavel"><?php echo htmlspecialchars( $value1["nomeresponsavel"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td  valign="middle" data-title="Endereco"><?php echo htmlspecialchars( $value1["rua"], ENT_COMPAT, 'UTF-8', FALSE ); ?>, <?php echo htmlspecialchars( $value1["numero"], ENT_COMPAT, 'UTF-8', FALSE ); ?> - <?php echo htmlspecialchars( $value1["cidade"], ENT_COMPAT, 'UTF-8', FALSE ); ?> - <?php echo htmlspecialchars( $value1["estado"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td  valign="middle" data-title="Usuário"><?php echo htmlspecialchars( $value1["usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td valign="middle" >
                          <a class="btn btn-primary btn-xs" href="/portal/alunos/<?php echo htmlspecialchars( $value1["idaluno"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/senha/"><i class="fa fa-pencil"></i> Nova Senha</a>
                          <a class="btn btn-success btn-xs" href="/portal/alunos/<?php echo htmlspecialchars( $value1["idaluno"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/carteirinha/"><i class="fa fa-pencil"></i> Gerar Carteirinha</a>
                          <a class="btn btn-primary btn-xs" href="/portal/alunos/<?php echo htmlspecialchars( $value1["idaluno"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><i class="fa fa-pencil"></i> Editar</a>
                          <a class="btn btn-danger btn-xs" onclick="return confirm('Deseja excluir o Aluno: <?php echo htmlspecialchars( $value1["idaluno"], ENT_COMPAT, 'UTF-8', FALSE ); ?>?')" href="/portal/alunos/<?php echo htmlspecialchars( $value1["idaluno"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete"><i class="fa fa-trash-o "></i> Deletar</a>
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
