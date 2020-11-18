<!-- START BANNER -->
<section id="banner" class="intro-bg parallex-bg section-padding">
	<div class="container">
		<div class="intro_text white-text div_zindex">
			<h1>Scegli il viaggio adatto per te</h1>
			<h5>Cerca i migliori Hotel, ristoranti ed attrazioni</h5>
			<div class="search_form style3">
			<?= $this->Form->create($filter, ['url' => ['controller'=>'Filters','action' => 'filter']]); ?>
				<form action="" method="">
					<div class="form-group">
						<input type="text" name="nome" class="form-control" placeholder="Cerca per nome">
					</div>
					<div class="form-group select">
						<select name="city" class="form-control">
							<option value="">Scegli per Città</option>
							<?php foreach ($events as $event) : ?>
							<option value="<?=$event->city?>"><?=$event->city?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group select">
						<select name="price" class="form-control">
							<option value="">Scegli per range di prezzo</option>
							<option value="1-50">1-50</option>
							<option value="51-100">51-100</option>
							<option value="101-200">101-200</option>
							<option value="201-300">201-300</option>
							<option value="301-400">301-400</option>
						</select>
					</div>

					<div class="form-group search_btn">
					<?= $this->Form->submit(__('Cerca'), array('class'=>'btn btn-block')) ?>
					<?= $this->Form->end() ?>
					</div>
				</form>
			</div>
		</div>
		
	</div>
	<div class="dark-overlay"></div>
</section>
<!-- /Banner -->
<section id="listing" class="section-padding gray_bg">
	<div class="container">
		<div class="section-header text-center">
			<h2>Scegli la tua struttura preferita</h2>
		</div>
		<div class="row">
			<?php if (!empty($events)) : ?>
				<?php foreach ($events as $event) : ?>
					<div class="col-md-4">
						<div class="listing-wp">
							<div class="listing-thumb">
								<a href="../detail/<?php echo $event->id; ?>"> 
								<?php
									echo '<img class="img-fluid" src="' . $event->img . '">' ?>
								</a>
							</div>
							<div class="listing-info-wp">
								<h5> <?php echo $this->Html->link($event->title, ['action' => 'detail', $event->id]) ?></h5>
								<p> <?php echo substr($event->description, 0, 85); ?></p>
								<div class="listing-categories">
									<a href="#"><?php echo $event->type; ?></a>
								</div>
							</div>
							<div class="listing-footer">
								<i class="fa fa-map-marker"></i> <?php echo $event->position; ?>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			<?php else : ?>
				<td>Nessun evento disponibile!</td>
			<?php endif; ?>
		</div>
	</div>
</section>
<!-- Listings -->