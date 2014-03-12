<?php $this->set('title_for_layout', 'Editer une catégorie'); ?>
<h1>Editer une catégorie</h1>
<div class="widget">
    <div class="widget-title">
        <h2>Informations</h2>
        <ul>
            <li><?php echo $this->Html->link('Retour', array('action'=>'index', 'admin'=>true)) ?></li>
        </ul>
    </div>
    <div class="widget-content">
        <?php echo $this->Form->create('Category');?>
        <?php
		echo $this->Form->input('id');
		echo $this->Form->input('name', array('label'=>'Nom:'));
		echo $this->Form->input('meta_title', array('label'=>'Meta Title:'));
		echo $this->Form->input('meta_description', array('label'=>'Meta description:'));
	?>
        <?php echo $this->Form->end('Enregistrer') ?>
    </div>
</div>