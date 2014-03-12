<?php $this->set('title_for_layout', 'Editer un produit'); ?>
<h1>Editer un produit</h1>
<div class="widget">
    <div class="widget-title">
        <h2>Informations</h2>
        <ul>
            <li><?php echo $this->Html->link('Retour', array('action'=>'index', 'admin'=>true)) ?></li>
        </ul>
    </div>
    <div class="widget-content">
        <?php echo $this->Form->create('Product', array('type'=>'file'));?>
        <?php
		echo $this->Form->input('id');
		echo $this->Form->input('name', array('label'=>'Nom:'));
		echo $this->Form->input('artist_id', array('label'=>'Artiste:'));
		echo $this->Form->input('category_id', array('label'=>'Catégorie'));
		echo $this->Form->input('price_size_s', array('label'=>'Prix taille S:'));
		echo $this->Form->input('price_size_m', array('label'=>'Prix taille m:'));
		echo $this->Form->input('price_size_l', array('label'=>'Prix taille L:'));
		echo $this->Form->input('visuel', array('label'=>'Visuel zoom:','type'=>'file'));
		echo $this->Form->input('visuel_fiche', array('label'=>'Visuel fiche produit:','type'=>'file'));
		echo $this->Form->input('visuel_galerie', array('label'=>'Visuel galerie:','type'=>'file'));
		echo $this->Form->input('visuel_panier', array('label'=>'Visuel panier:','type'=>'file'));
		echo $this->Form->input('image', array('label'=>'Visuel existant:','readonly'=>true));
		echo $this->Form->input('description', array('label'=>'Description:'));
		echo $this->Form->input('meta_title', array('label'=>'Meta Title:'));
		echo $this->Form->input('meta_description', array('label'=>'Meta description:'));
	?>
    	<?php echo $this->Form->end('Enregistrer') ?>
    </div>
</div>