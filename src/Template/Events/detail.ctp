 <div class="container-fluid">
     <div class="text-center mb-5">
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalPets">
Aggiungi Pets
</button>
</div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Informazioni Pets del sig.re/ra <?=$event->Nome.' '.$event->Cognome?></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Data</th>
                      <th>Nome</th>
                      <th>Età</th>
                      <th>Sesso</th>
                      <th>Razza</th>
                      <th>Microcip</th>
                      <th>Colore Manto</th>
                      <th>Peso</th>
                      <th>Visualizza Dettagli</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Data</th>
                      <th>Nome</th>
                      <th>Età</th>
                      <th>Sesso</th>
                      <th>Razza</th>
                      <th>Microcip</th>
                      <th>Colore Manto</th>
                      <th>Peso</th>
                      <th>Visualizza Dettagli</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php if (!empty($pets)) : ?>
				            <?php foreach ($pets as $pet) : ?>
                    <tr>
                      <td><?php $data = strtotime('+120 minutes', strtotime($pet->data)); echo date('d/m/Y H:i:s', $data ); ?> </td>
                      <td><?php echo $pet->Nome ?> </td>
                      <td><?php echo $pet->Età ?> </td>
                      <td><?php echo $pet->Sesso ?> </td>
                      <td><?php echo $pet->Razza ?> </td>
                      <td><?php echo $pet->Microcip ?> </td>
                      <td><?php echo $pet->Coloremanto ?> </td>
                      <td><?php echo $pet->Peso ?> </td>
                      <td><?php echo $this->Html->link('View', ['action' => 'detailpets', $pet->id],['class' => 'btn btn-secondary']) ?></td>

                    </tr>
                    <?php endforeach; endif; ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


<!-- Modal -->
<div class="modal fade" id="ModalPets" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Aggiungi Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <section class="primary-bg">
	<div class="container">
    	<div id="login_signup">
            <div class="form_wrap_m">
            	<div class="white_box">
                    <?= $this->Form->create($customer) ?>
	                <form action="" method="get">
                  <?= $this->Form->hidden('id_customer', ['class' => 'form-control', 'value'=>$event->id]) ?>
                  <?= $this->Form->hidden('id_user', ['class' => 'form-control', 'value'=>$this->request->session()->read('Auth.User.id')]) ?>
                        <div class="form-group">
                        <?= $this->Form->control('Nome', ['class' => 'form-control']) ?>
                        </div>
                        <div class="form-group">
                        <?= $this->Form->control('Età', ['class' => 'form-control']) ?>
                        </div>
                        <div class="form-group">
                        <?= $this->Form->control('Sesso', ['class' => 'form-control']) ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->control('Razza', ['class' => 'form-control']) ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->control('Microcip', ['class' => 'form-control']) ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->control('Coloremanto', ['class' => 'form-control']) ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->control('Peso', ['class' => 'form-control']) ?>
                        </div>
                        <div class="form-group">
                            <label>Diagnosi</label>
                            <?= $this->Form->textarea('Diagnosi', ['class' => 'form-control']) ?>
                        </div>
                        <div class="form-group">
                            <label>Terapia</label>
                            <?= $this->Form->textarea('Terapia', ['class' => 'form-control']) ?>
                            
                        </div>
                   
                </div>
            </div>
        </div>
    </div>
</section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi</button>
        <?= $this->Form->button(__('Salva'), array('class'=>'btn btn-info')); ?>
        </form>
      </div>
    </div>
  </div>
</div>