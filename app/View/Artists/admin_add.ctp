<?php $this->set('title_for_layout', 'Ajouter un artiste'); ?>
<h1>Ajouter un artiste</h1>
<div class="widget">
    <div class="widget-title">
        <h2>Informations</h2>
        <ul>
            <li><?php echo $this->Html->link('Retour', array('action'=>'index', 'admin'=>true)) ?></li>
        </ul>
    </div>
    <div class="widget-content">
        <?php echo $this->Form->create('Artist');?>
        <?php
		echo $this->Form->input('lastname', array('label'=>'Nom de famille:'));
		echo $this->Form->input('firstname', array('label'=>'Prénom:'));
	?>
        <?php echo $this->Form->end('Enregistrer') ?>
    </div>
</div>