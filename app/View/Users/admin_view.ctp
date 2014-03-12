<?php $this->set('title_for_layout', 'Compte client'); ?>
<h1><?php echo $User['firstname']; ?> <?php echo $User['lastname']; ?></h1>
<div class="widget">
    <div class="widget-title">
        <h2>Informations utilisateur</h2>
        <ul>
            <li>
                <?php echo $this->Html->link('Modifier', array('action'=>'edit','admin'=>true, $User['id']), array('class'=>'btn')) ?>
            </li>
            <li>
            	<?php 
                echo $this->Html->link(
                    'Retour',
                    array('action'=>'index', 'admin'=>true)
                );
                ?>
            </li>
        </ul>
    </div>
    <div class="widget-content">
        <table cellpadding="5">
            <tr>
                <td style="width:49%">
                    <label>Prénom :</label>
                    <em><?php echo $User['firstname']; ?></em>
                </td>
                <td>
                    <label>Mot de passe :</label>
                    <em>*****</em>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Nom de famille :</label>
                    <em><?php echo $User['lastname']; ?></em>
                </td>
                <td>
                    <label>Date de naissance :</label>
                    <em><?php echo $this->Date->birthday($User['date_birth']) ?></em>
                </td>
            </tr>
            <tr>
                <td>
                    <label>E-mail :</label>
                    <em><?php echo $User['email'] ?></em>
                </td>
                <td class="date_birth">
                    <label>Inscription à la newsletter :</label>

                </td>
            </tr>
        </table>
    </div>
</div>

<div class="widget">
    <div class="widget-title">
        <h2>Informations de facturation</h2>
        <ul>
            <li><?php echo $this->Html->link('Modifier', array('action'=>'edit','admin'=>true, $User['id']), array('class'=>'btn')) ?></li>
            <li>
            	<?php 
                echo $this->Html->link(
                    'Retour',
                    array('action'=>'index', 'admin'=>true)
                );
                ?>
            </li>
        </ul>
    </div>
    <div class="widget-content">
        <table cellpadding="5">
            <tr>
                <td style="width:49%">
                    <label>Prénom :</label>
                    <em><?php echo $User['billing_firstname'] ?></em>
                </td>
                <td>
                    <label>Ville :</label>
                    <em><?php echo $User['billing_city'] ?></em>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Nom de famille :</label>
                    <em><?php echo $User['billing_lastname'] ?></em>
                </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>
                    <label>Adresse :</label>
                    <em><?php echo $User['billing_address'] ?></em>
                </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>
                    <label>Code postal :</label>
                    <em><?php echo $User['billing_zipcode'] ?></em>
                </td>
                <td>&nbsp;</td>
            </tr>
        </table>
    </div>
</div>

<?php if(count($Order)>0): ?>
<div class="widget">
    <div class="widget-title">
        <h2>Commandes</h2>
        <ul>
            <li>
            	<?php 
                echo $this->Html->link(
                    'Retour',
                    array('action'=>'index', 'admin'=>true)
                );
                ?>
            </li>
        </ul>
    </div>
    <div class="widget-content">
        <table width="100%">
            <thead>
                <tr>
                    <th style="width:120px">COMMANDE NO.</th>
                    <th>DATE DE COMMANDE</th>
                    <th style="width:120px">MONTANT</th>
                    <th style="width:30px">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($Order as $o): ?>
                <tr>
                    <td style="text-align: center">#<?php echo $o['Order']['id'] ?></td>
                    <td style="text-align: center"><?php echo $this->Date->show($o['Order']['created']) ?></td>
                    <td style="text-align: center"><?php echo number_format($o['Order']['total'], 2, ',', ' ') ?>€</td>
                    <td>
                        <?php echo $this->Html->link($this->Html->image('pdf.png'), array('controller'=>'orders','action'=>'facturepdf', 'customer'=>false, $o['Order']['id']), array('class'=>'fact', 'target'=>'_blank','escape'=>false)) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php endif; ?>