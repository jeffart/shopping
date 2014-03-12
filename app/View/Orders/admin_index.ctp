<?php $this->set('title_for_layout', 'Statistiques des ventes'); ?>
<h1>Liste des ventes</h1>
<p class="small_subtitle">
    <span>Période de navigation:</span>
    <?php echo $this->Html->link('Aujourd\'hui', array('action'=>'index', 'day')) ?>
    <?php echo $this->Html->link('Ce mois ci', array('action'=>'index', 'month')) ?>
    <?php echo $this->Html->link('Cette année', array('action'=>'index', 'year')) ?>
</p>
<div class="widget small" id="order_ca">
    <div class="widget-title"><h2>CA</h2></div>
    <div class="widget-content">
        <p><?php echo number_format($ca, 2, ',', ' ') ?>€</p>
    </div>
</div>

<div class="widget small" id="order_nb">
    <div class="widget-title"><h2>Nombre de vente</h2></div>
    <div class="widget-content">
        <p><?php echo $nb ?></p>
    </div>
</div>

<div class="widget small" id="order_moyen">
    <div class="widget-title"><h2>Panier moyen</h2></div>
    <div class="widget-content">
        <p><?php echo number_format($moyen, 2, ',', ' ') ?>€</p>
    </div>
</div>
<div class="clearfix"></div>
<?php if($nb>0): ?>
<div class="widget" id="order_list">
    <div class="widget-title"><h2>Détails</h2></div>
    <div class="widget-content">
        <table>
            <tbody>
                <?php foreach($orders as $o): $u = $o['User']; $products = $o['Product']; $o = $o['Order']; ?>
                <tr>
                    <td style="padding: 7px 3px">
                        <?php echo trim(strtoupper($u['lastname']).' '.ucfirst($u['firstname'])); ?> <?php echo '#',$o['id'] ?><br />
                        <?php foreach($products as $p): $c = $p['Category']; $a = $p['Artist'] ?>
                        <?php echo $c['name'] ?>: <?php echo $a['lastname'],' ',$a['firstname'] ?> | Taille: <?php echo strtoupper($p['OrdersProduct']['size']) ?><br />
                        <?php endforeach ?>
                    </td>
                    <td style="vertical-align: top"><br /><?php echo number_format($o['total'], 2,',', ' ') ?>€</td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php endif; ?>
