<li>
    <?php
    echo $this->Html->link('Ventes', array('controller'=>'orders','action'=>'index','admin'=>true))
    ?>
</li>
<li>
    <?php
    echo $this->Html->link('Produits', array('controller'=>'products','action'=>'index','admin'=>true))
    ?>
</li>
<li>
    <?php
    echo $this->Html->link('Catégories', '/admin/categories/')
    ?>
</li>
<li>
    <?php
    echo $this->Html->link('Artistes', array('controller'=>'artists','action'=>'index','admin'=>true))
    ?>
</li>
<li>
    <?php
    echo $this->Html->link('Carrousel', array('controller'=>'sliders','action'=>'index','admin'=>true))
    ?>
</li>
<li>
    <?php
    echo $this->Html->link('Clients', array('controller'=>'users','action'=>'index','admin'=>true))
    ?>
</li>
<li>
    <?php
    echo $this->Html->link('Contact', array('controller'=>'contacts','action'=>'index','admin'=>true))
    ?>
</li>
<li>
    <?php
    echo $this->Html->link('Newsletters', array('controller'=>'newsletters','action'=>'index','admin'=>true))
    ?>
</li>