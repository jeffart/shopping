<?php $this->set('title_for_layout', 'Ajouter un client'); ?>
<h1>Ajouter un client</h1>
<?php echo $this->Form->create('User');?>
<div class="widget">
    <div class="widget-title">
        <h2>Information de base</h2>
        <ul>
            <li><?php echo $this->Html->link('Retour', array('action'=>'index', 'admin'=>true)) ?></li>
        </ul>
    </div>
    <div class="widget-content">
        <?php
		echo $this->Form->input('role',array('type'=>'hidden', 'value'=>'customer'));
		echo $this->Form->input('firstname', array('label'=>'Prénom:'));
		echo $this->Form->input('lastname', array('label'=>'Nom:'));
		echo $this->Form->input('email', array('label'=>'Email:'));
		echo $this->Form->input('date_birth', array('label'=>'Date de naissance:', 'type'=>'text'));
	?>
        <div class="submit">
            <input type="submit" value="Enregister" />
        </div>
    </div>
</div>
<div class="widget">
    <div class="widget-title">
        <h2>Information de facturation</h2>
    </div>
    <div class="widget-content">
    	<?php
        echo $this->Form->input('billing_firstname', array('label'=>'Prénom:'));
        echo $this->Form->input('billing_lastname', array('label'=>'Nom:'));
        echo $this->Form->input('billing_address', array('label'=>'Adresse:'));
        echo $this->Form->input('billing_zipcode', array('label'=>'Code postal:'));
        echo $this->Form->input('billing_city', array('label'=>'ville'));
        ?>
        <div class="submit">
            <input type="submit" value="Enregister" />
        </div>
    </div>
</div>
<?php echo $this->Form->end() ?>