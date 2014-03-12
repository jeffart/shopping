<?php $this->set('title_for_layout', 'Gestion des artistes'); ?>
<h1>Gestion des artistes</h1>
<div class="widget">
    <div class="widget-title">
        <h2>Liste des artistes</h2>
        <ul>
            <li>
                <?php 
                echo $this->Html->link(
                    'Ajouter un artiste',
                    array('controller'=>'artists', 'action'=>'add', 'admin'=>true),
                    array('title'=>'Ajouter un nouvel artiste')
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
                    <th class="action">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($artists as $a): $a = $a['Artist']; ?>
                <tr>
                    <td class="centered"><?php echo h($a['id']); ?></td>
                    <td><?php echo h($a['firstname']); ?></td>
                    <td><?php echo h($a['lastname']); ?></td>
                    <td>
                        <?php echo $this->Html->link($this->Html->image('bo/edit.gif'), array('action' => 'edit', $a['id']),array('escape'=>false)); ?>
			<?php echo $this->Form->postLink($this->Html->image('bo/delete.gif'), array('action' => 'delete', $a['id']), array('escape'=>false), 'Etes vous sur de vouloir supprimer cet artiste ?'); ?>
                    </td>
                </tr>
                <?php endforeach; ?>
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