<?php $this->set('title_for_layout', 'Editer une image'); ?>
<h1>Editer une image</h1>
<div class="widget">
    <div class="widget-title">
        <h2>Information</h2>
        <ul>
            <li><?php echo $this->Html->link('Retour', array('action'=>'index', 'admin'=>true)) ?></li>
        </ul>
    </div>
    <div class="widget-content">
        <?php echo $this->Form->create('Slider', array('type'=>'file'));?>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('title', array('label'=>'Titre:'));
            echo $this->Form->input('subtitle', array('label'=>'Artiste:'));
            echo $this->Form->input('visuel', array('label'=>'Image', 'type'=>'file'));
            echo $this->Form->input('link', array('label'=>'Lien de redirection:'));
            echo $this->Form->input('position', array('label'=>'Position:'));
	?>
    	<?php echo $this->Form->end('Enregistrer') ?>
    </div>
</div>