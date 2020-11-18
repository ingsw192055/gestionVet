<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Gestion Vet - Software For Veterinary 2020';
$url = 'http://gestionvet.altervista.org/';




?>
<!DOCTYPE html>
<html>

<head>
  <?= $this->Html->charset() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?= $cakeDescription ?>
  </title>

  <?= $this->Html->meta('icon') ?>
  <!-- CSS Bootstrap 4 -->
  <link href="<?= $url ?>/webroot/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <?php echo $this->Html->css('sb-admin-2.min') ?>
  <?php echo $this->Html->css('dataTables.bootstrap4.min') ?>
  <?= $this->fetch('meta') ?>
  <?= $this->fetch('css') ?>
  <?= $this->fetch('script') ?>

</head>

<!-- Header -->
<?php if ($this->request->session()->read('Auth.User') || $_SERVER['REQUEST_URI'] == '/users/login' || $_SERVER['REQUEST_URI'] == '/users/register') { ?>
  <?php if ($_SERVER['REQUEST_URI'] != '/users/login' && $_SERVER['REQUEST_URI'] != '/users/register' && $_SERVER['REQUEST_URI'] != '/') { ?>

    <body id="page-top">
      <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/events">
            <div class="sidebar-brand-icon rotate-n-15">
              <i class="fas fa-dog"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Gestion<sup>Vet</sup></div>
          </a>

          <!-- Divider -->
          <hr class="sidebar-divider my-0">

          <!-- Nav Item - Dashboard -->
          <li class="nav-item active">
            <a class="nav-link" href="/events">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Gestion Vet</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">





          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

          <!-- Main Content -->
          <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

              <!-- Sidebar Toggle (Topbar) -->
              <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
              </button>

              <!-- Topbar Search -->
              <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>-->

              <!-- Topbar Navbar -->
              <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) 
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
                 Dropdown - Messages 
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>-->

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="d-lg-inline text-gray-600 small"> <?php
                                                                    if ($this->request->session()->read('Auth.User')) {
                                                                      echo '<span style="color: #17a2b8; font-weight: 800;">Benvenuto/a dott.re/.ssa  ' . $this->request->session()->read('Auth.User.name') . '!&nbsp;&nbsp;&nbsp;</span>';
                                                                    }
                                                                    ?></span>
                    <img class="img-profile rounded-circle" src="<?= $url ?>/webroot/img/cane.jfif">
                  </a>
                  <!-- Dropdown - User Information -->
                  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                      Logout
                    </a>
                  </div>
                </li>

              </ul>

            </nav>
            <!-- End of Topbar -->

          <?php } ?>

          <?php


          echo $this->Flash->render();

          echo  $this->fetch('content');

          ?>


          <?php if ($_SERVER['REQUEST_URI'] != '/users/login' && $_SERVER['REQUEST_URI'] != '/users/register' && $_SERVER['REQUEST_URI'] != '/') { ?>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
              <div class="container my-auto">
                <div class="copyright text-center my-auto">
                  <span>Copyright &copy; Gestion Vet 2020</span>
                </div>
              </div>

            </footer>
            <!-- End of Footer -->
          </div>
          <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Veramente vuoi uscire?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">Seleziona "Logout" di seguito se sei pronto per terminare la sessione corrente.</div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <?php echo $this->Html->link('Logout', ['controller' => 'Users', 'action' => 'logout'], ['class' => 'btn btn-primary']) ?>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <?= $this->Form->hidden('id_user', ['class' => 'form-control', 'value' => $this->request->session()->read('Auth.User.id')]) ?>
                            <div class="form-group">
                              <?= $this->Form->control('Nome', ['class' => 'form-control']) ?>
                            </div>
                            <div class="form-group">
                              <?= $this->Form->control('Cognome', ['class' => 'form-control']) ?>
                            </div>
                            <div class="form-group">
                              <?= $this->Form->control('Telefono', ['class' => 'form-control']) ?>
                            </div>
                            <div class="form-group">
                              <?= $this->Form->control('CF', ['class' => 'form-control']) ?>
                            </div>
                            <div class="form-group">
                              <?= $this->Form->control('Citta', ['class' => 'form-control']) ?>
                            </div>
                            <div class="form-group">
                              <?= $this->Form->control('Indirizzo', ['class' => 'form-control']) ?>
                            </div>
                            <div class="form-group">
                              <?= $this->Form->control('Cap', ['class' => 'form-control']) ?>
                            </div>
                            <div class="form-group">
                              <?= $this->Form->control('Email', ['class' => 'form-control']) ?>
                            </div>
                            <div class="form-group">
                              <?= $this->Form->control('NamePets', ['class' => 'form-control']) ?>
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


      <?php } ?>

    <?php } else {
    echo '<h1> Non hai affettuato alcun Accesso </h1>';
  }   ?>


    <?php echo $this->Html->script('jquery.min') ?>
    <?php echo $this->Html->script('bootstrap.bundle.min') ?>
    <?php echo $this->Html->script('jquery.easing.min') ?>
    <?php echo $this->Html->script('sb-admin-2.min') ?>
    <?php echo $this->Html->script('jquery.dataTables.min') ?>
    <?php echo $this->Html->script('dataTables.bootstrap4.min') ?>
    <?php echo $this->Html->script('datatables-demo') ?>



    </body>

</html>