<?php $this->set('title_for_layout', 'Gestion du carrousel'); ?>
<h1>Gestion du carrousel</h1>
<div class="widget">
    <div class="widget-title">
        <h2>Liste des images</h2>
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
                    <th>Titre</th>
                    <th>Artiste</th>
                    <th>Position</th>
                    <th class="action">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sliders as $s): $s = $s['Slider']; ?>
                <tr>
                    <td class="centered"><?php echo h($s['id']); ?></td>
                    <td><?php echo h($s['title']); ?></td>
                    <td><?php echo h($s['subtitle']); ?></td>
                    <td class="centered"><?php echo h($s['position']); ?></td>
                    <td>
                        <?php echo $this->Html->link($this->Html->image('bo/edit.gif'), array('action' => 'edit', $s['id']),array('escape'=>false)); ?>
                        <?php echo $this->Form->postLink($this->Html->image('bo/delete.gif'), array('action' => 'delete', $s['id']), array('escape'=>false), 'Etes vous sur de vouloir supprimer cette image ?'); ?>
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