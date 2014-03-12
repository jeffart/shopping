<?php $this->set('title_for_layout', 'Gestion des clients'); ?>
<h1>Gestion des clients</h1>
<div class="widget">
    <div class="widget-title">
        <h2>Liste des clients</h2>
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
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th class="action">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $u): $u = $u['User']; ?>
                <tr>
                    <td class="centered"><?php echo h($u['id']); ?></td>
                    <td><?php echo $this->Html->link($u['firstname'], array('action'=>'view',$u['id'])); ?></td>
                    <td><?php echo h($u['lastname']); ?></td>
                    <td><?php echo h($u['email']); ?></td>
                    <td>
                        <?php echo $this->Html->link($this->Html->image('bo/edit.gif'), array('action' => 'edit', $u['id']),array('escape'=>false)); ?>
			<?php echo $this->Form->postLink($this->Html->image('bo/delete.gif'), array('action' => 'delete', $u['id']), array('escape'=>false), 'Etes vous sur de vouloir supprimer ce client ?'); ?>
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