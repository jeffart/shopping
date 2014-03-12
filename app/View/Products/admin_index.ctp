<?php $this->set('title_for_layout', 'Gestion des produits'); ?>
<h1>Gestion des produits</h1>
<?php echo $this->Form->create('Product', array('url'=>array('action'=>'index'), 'class'=>'search')) ?>
<?php echo $this->Form->input('q', array('label'=>false, 'placeholder'=>'Nom ou ID')) ?>
<?php echo $this->Form->end('Trouver') ?>
<div class="widget">
    <div class="widget-title">
        <h2></h2>
        <ul>
            <li>
            	<?php 
                echo $this->Html->link(
                    'Ajouter',
                    array('action'=>'add', 'admin'=>true)
                );
                ?>
            </li>
        </ul>
    </div>
    <div class="widget-content">
        <table>
            <thead>
                <tr>
                    <th class="id">ID</th>
                    <th>Nom</th>
                    <th>Artiste</th>
                    <th>Catégorie</th>
                    <th class="action">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $l): $p = $l['Product']; $a = $l['Artist']; $c = $l['Category'] ?>
                <tr>
                    <td class="centered"><?php echo h($p['id']); ?></td>
                    <td><?php echo $this->Html->link($p['name'], array('action'=>'edit',$p['id'])); ?></td>
                    <td><?php echo h($a['firstname']); ?> <?php echo h($a['lastname']); ?></td>
                    <td><?php echo h($c['name']); ?></td>
                    <td>
                        <?php echo $this->Html->link($this->Html->image('bo/edit.gif'), array('action' => 'edit', $p['id']),array('escape'=>false)); ?>
                        <?php echo $this->Form->postLink($this->Html->image('bo/delete.gif'), array('action' => 'delete', $p['id']), array('escape'=>false), 'Etes vous sur de vouloir supprimer ce produit ?'); ?>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <div class="pagination">
        <?php
            echo $this->Paginator->prev('<', array(), null, array('class' => 'prev disabled'));
            echo $this->Paginator->numbers(array('separator' => ''));
            echo $this->Paginator->next('>', array(), null, array('class' => 'next disabled'));
        ?>
	</div>
    </div>
</div>