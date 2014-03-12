<?php $this->set('title_for_layout', 'Gestion des catégories'); ?>
<h1>Gestion des catégories</h1>
<div class="widget">
    <div class="widget-title">
        <h2>Liste des catégories</h2>
        <ul>
            <li>
                <?php 
                echo $this->Html->link(
                    'Ajouter une catégorie',
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
                    <th class="action">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $c): $c = $c['Category']; ?>
                <tr>
                    <td class="centered"><?php echo h($c['id']); ?></td>
                    <td><?php echo h($c['name']); ?></td>
                    <td>
                        <?php echo $this->Html->link($this->Html->image('bo/edit.gif'), array('action' => 'edit', $c['id']),array('escape'=>false)); ?>
                        <?php echo $this->Form->postLink($this->Html->image('bo/delete.gif'), array('action' => 'delete', $c['id']), array('escape'=>false), 'Etes vous sur de vouloir supprimer cet catégorie ?'); ?>
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