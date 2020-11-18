<section class="primary-bg">
	<div class="container">
    	<div id="login_signup">
            <div class="form_wrap_m">
            	<div class="white_box">
                    <h3>Registrati</h3>
                    <?= $this->Form->create($user) ?>
	                <form action="" method="get">
                        <div class="form-group">
                        <?= $this->Form->control('name', ['class' => 'form-control']) ?>
                        </div>
                        <div class="form-group">
                        <?= $this->Form->control('surname', ['class' => 'form-control']) ?>
                        </div>
                        <div class="form-group">
                        <?= $this->Form->control('username', ['class' => 'form-control']) ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->control('email', ['class' => 'form-control']) ?>
                        </div>
                        <div class="form-group">
                        <?= $this->Form->control('password', ['class' => 'form-control']) ?>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <?= $this->Form->checkbox('visualizza_nome', ['hiddenField' => false, 'class' => 'custom-control-input', 'id' => 'customSwitch1']); ?>
                                <label class="custom-control-label" for="customSwitch1">Visualizzare il tuo nome e cognome?</label>
                            </div>
                        </div>
                        <div class="form-group">
                        <?= $this->Form->button(__('Registrati'), array('class'=>'btn btn-info')); ?>
                        <?= $this->Form->end() ?>
                        </div>
                    </form>
                    <p>Hai già un account?  <?php echo $this->Html->link('Accedi', ['controller' => 'Users', 'action' => 'login']);?></p>
                    <div class="back_home"><a href="<?=$url?>/cakephp" class="btn outline-btn btn-sm"><i class="fa fa-angle-double-left"></i> Back to Home</a></div>
                </div>
            </div>
        </div>
    </div>
</section>