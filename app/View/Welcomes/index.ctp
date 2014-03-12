<?php
$this->set('title_for_layout', 'Bienvenu sur la boutique untitled de ArtShop')
?>
<?php if(isset($sliders) && !empty($sliders)): ?>
<section id="carrousel">
    <div class="content-center">
        <div class="slides">
            <div class="slides_container">
                <?php foreach($sliders as $s): $s = $s['Slider']; ?>
                <div class="slide">
                    <a href="<?php echo $s['link'] ?>">
                        <img src="../img/blank.gif" alt="" style="background-image:url('<?php echo $this->Html->url('/uploads/carrousel/'.$s['image'], true) ?>')" />
                    </a>
                    <div class="caption">
                        <p class="title"><?php echo $s['title'] ?></p>
                        <p class="artiste"><?php echo $s['subtitle'] ?></p>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>



<div class="content-center">
    <section id="new-products">
        <header>
            <h2>Nouvelles illustrations</h2>
            <p>UNTITLED vous propose une collection régulièrement actualisée d'illustrations et posters des meilleurs d'artistes du monde de la création numérique.</p>
        </header>
        <div class="products">
            <ul>
                <?php foreach($products as $p): $a = $p['Artist']; $p = $p['Product']; ?>
                <li>
                    <a href="#" title="<?php echo $p['name'] ?> - <?php echo $a['firstname'],' ',$a['lastname'] ?>">
                        <?php echo $this->Html->image('uploads/products/'.$p['image'], array('alt'=>$p['name'].' '.$a['firstname'].' '.$a['lastname'])) ?>
                    </a>
                    <a href="#" title="<?php echo $p['name'] ?> - <?php echo $a['firstname'],' ',$a['lastname'] ?>">
                        <h3>
                            <span class="title"><?php echo $p['name'] ?></span>
                            <span class="artist"><?php echo $a['firstname'],' ',$a['lastname'] ?></span>
                        </h3>
                    </a>
                </li>
                <?php endforeach ?>
            </ul>
        </div>
        <footer>
            <?php echo $this->Html->link('Voir la galerie', array('controller'=>'categories','action'=>'index')) ?>
        </footer>
    </section>

    <aside id="blog">
        <header><p>Actualités</p></header>
        <div class="articles">
            <article>
                <time datetime="2011-06-14" pubdate>Mer, 14 avril 2011</time>
                <p class="text">Et pour bien terminer la semaine : une petite virée dans la jolie ville de Marseille ou la révolte des bourgeois. Rue de Rome de Munk...</p>
                <a href="#">En savoir plus</a>
            </article>
            <article>
                <time datetime="2011-03-07" pubdate>Lun, 07 mars 2011</time>
                <p class="text">La réalisation d'illustrations d'affiches de films alternatives semble être devenue un nouveau genre artistique à part entière, presque un exercice de style imposé... </p>
                <a href="#">En savoir plus</a>
            </article>
            <article>
                <time datetime="2011-03-04" pubdate>Ven, 04 mars 2011</time>
                <p class="text">Car devant ce flot ininterrompu d'informations, on prend le temps de découvrir ce très beau live acoustique d'Ayo dans une des première "Ferber sessions" de OFF.tv...</p>
                <a href="#">En savoir plus</a>
            </article>
        </div>
        <footer>
            <a href="actus.html">Voir tous</a>
        </footer>
    </aside>
    <div class="clearfix"></div>
</div>


<script src="../js/main.js"></script>