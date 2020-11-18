
 <div class="container-fluid">
     <div class="text-center mb-5">
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Aggiungi Cliente
</button>
</div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Informazioni Clienti</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Data</th>
                      <th>Nome</th>
                      <th>Cognome</th>
                      <th>Telefono</th>
                      <th>Email</th>
                      <th>CF</th>
                      <th>Città</th>
                      <th>Indirizzo</th>
                      <th>Cap</th>
                      <th>NamePets</th>
                      <th>Add/View Pets</th>
                      <th>Delete</th>
                      <th>Update</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Data</th>
                      <th>Nome</th>
                      <th>Cognome</th>
                      <th>Telefono</th>
                      <th>Email</th>
                      <th>CF</th>
                      <th>Città</th>
                      <th>Indirizzo</th>
                      <th>Cap</th>
                      <th>NamePets</th>
                      <th>Add/View Pets</th>
                      <th>Delete</th>
                      <th>Update</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php

if (!empty($events)) : ?>
				            <?php foreach ($events as $event) : ?>
                    <tr>
                      <td><?php $data = strtotime('+120 minutes', strtotime($event->data)); echo date('d/m/Y H:i:s', $data ); ?> </td>
                      <td><?php echo $event->Nome ?> </td>
                      <td><?php echo $event->Cognome ?> </td>
                      <td><?php echo '<a href="tel:'.$event->Telefono.'">'.$event->Telefono.'</a>'?> </td>
                      <td><?php echo '<a href="mailto:'.$event->Email.'">'.$event->Email.'</a>'?> </td>
                      <td><?php echo $event->CF ?> </td>
                      <td><?php echo $event->Citta ?> </td>
                      <td><?php echo $event->Indirizzo ?> </td>
                      <td><?php echo $event->Cap ?> </td>
                      <td><?php echo $event->NamePets ?> </td>
                      <td><?php echo $this->Html->link('Add/View', ['action' => 'detail', $event->id],['class' => 'btn btn-secondary']) ?>  </td>
                      <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#deleteCustomer">Delete</button></td>
                      <td><button type="button" class="btn btn-warning" data-toggle="modal" data-id="<?=$event?>" data-target="#UpdateModal">Update</button></td>

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

<!-- Logout Modal-->
<div class="modal fade" id="deleteCustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sei sicuro di voler cancellare il cliente?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Premi il tasto cancella ed eliminerai defitivamente il cliente</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Chiudi</button>
          
          <?php echo $this->Html->link('Delete', ['action' => 'deleteCustomer', $event->id],['class' => 'btn btn-primary']) ?> 

        </div>
      </div>
    </div>
  </div>

   <!-- Modal -->
   <div class="modal fade" id="UpdateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="UpdateModalLabel">Aggiorna Cliente</h5>
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
                            <?= $this->Form->hidden('id_user', ['class' => 'form-control', 'value' => $this->request->session()->read('Auth.User.id')]) ?>
                            <?= $this->Form->hidden('id', ['class' => 'form-control', 'value' => $event->id]) ?>
                            <div class="form-group">
                              <?= $this->Form->control('Nome', ['class' => 'form-control','value' => $event->Nome]) ?>
                            </div>
                            <div class="form-group">
                              <?= $this->Form->control('Cognome', ['class' => 'form-control','value' => $event->Cognome]) ?>
                            </div>
                            <div class="form-group">
                              <?= $this->Form->control('Telefono', ['class' => 'form-control','value' => $event->Telefono]) ?>
                            </div>
                            <div class="form-group">
                              <?= $this->Form->control('CF', ['class' => 'form-control','value' => $event->CF]) ?>
                            </div>
                            <div class="form-group">
                              <?= $this->Form->control('Citta', ['class' => 'form-control','value' => $event->Citta]) ?>
                            </div>
                            <div class="form-group">
                              <?= $this->Form->control('Indirizzo', ['class' => 'form-control','value' => $event->Indirizzo]) ?>
                            </div>
                            <div class="form-group">
                              <?= $this->Form->control('Cap', ['class' => 'form-control','value' => $event->Cap]) ?>
                            </div>
                            <div class="form-group">
                              <?= $this->Form->control('Email', ['class' => 'form-control','value' => $event->Email]) ?>
                            </div>
                            <div class="form-group">
                              <?= $this->Form->control('NamePets', ['class' => 'form-control','value' => $event->NamePets]) ?>
                            </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi</button>
                <?= $this->Form->button(__('Salva'), array('class' => 'btn btn-info')); ?>
                </form>
              </div>
            </div>
          </div>
        </div>


