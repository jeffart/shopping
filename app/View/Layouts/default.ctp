<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo $title_for_layout ?></title>

    <?= $this->Html->css('reset'); ?>
    <?= $this->Html->css('styles'); ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>

    <!--[if lte IE8]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
<!--HERDER -->
<header id="header_page">
    <div class="content-center">
        <div class="left">
            <?php
            echo $this->Html->link($title_for_layout, '/', array('title'=>'Untitled Artshop', 'class'=>'logo'))
            ?>
            <div class="side-logo">
                <p class="baseline">Illustrations des meilleurs artistes et designer</p>
                <div class="breadcrumbs">
                    <p>Vous êtes au niveau :</p>
                    <ul>
                        <li><?php echo $this->Html->link('Accueil','/') ?></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="right">
            <p class="contact"><strong>Nous contacter :</strong> 04 94 62 89 57</p>
            <div id="cart-header">
                <p class="products"><?php echo $this->Html->link('Votre panier',array('controller'=>'carts','action'=>'view')) ?>: <span>0</span> article</p>
                <p class="price"></p>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</header>

<nav id="navbar">
    <div class="content-center">
        <ul>
            <li class="active"><?php echo $this->Html->link('Accueil','/') ?></li>
            <li><?php echo $this->Html->link('Galerie', array('controller'=>'categories','action'=>'index')) ?></li>
            <li><?php echo $this->Html->link('Untitled',array('controller'=>'pages','action'=>'display', 'apropos')) ?></li>
            <li><?php echo $this->Html->link('Actualité', array('controller'=>'welcomes','action'=>'blog')) ?></li>
            <li><?php echo $this->Html->link('Contact', array('controller'=>'contacts', 'action'=>'index')) ?></li>
        </ul>
        <form method="post" action="<?php echo $this->Html->url(array('controller'=>'products','action'=>'search')) ?>">
            <label for="search">Recherche</label>
            <input type="text" name="q" id="search" value="" placeholder="Mot(s) clé(s)" />
        </form>
    </div>
</nav>
<!-- CONTENU -->
<div id="content">
    <?php echo $content_for_layout ?>
</div>

<div class="clearfix"></div>

<footer id="footer_page">
    <div class="content-center">
        <div class="column col1">
            <header><p>Information</p></header>
            <address>
                195, rue Jean Jaures<br />
                83000 Toulon
                France<br />
                <br />
                Tel: 04 04 62 89 57<br />
            </address>
            <footer>
                <?php echo $this->Html->link('Contact',array('controller'=>'contacts','action'=>'index'),array('title'=>'Contactez-nous')) ?>
            </footer>
        </div>
        <div class="column col2">
            <header><p>A propos de UNTITLED</p></header>
            <article>
                <strong>UNTITLED - Artshop</strong>, est un site de vente d'illustrations et de posters. Ces illustrations  sont créées par les meilleurs artistes issus du monde de la création numérique.<br />
                Tous les produits proposés sont frabriqués uniquement avec des matériaux de haute qualité et chaque illustration est signé par l'artiste.
            </article>
            <footer>
                <?php echo $this->Html->link('en savoir plus',array('controller'=>'pages','action'=>'display', 'apropos')) ?>
            </footer>
        </div>
        <div class="column col3">
            <header><p>Menu</p></header>
            <ul>
                <li><?php echo $this->Html->link('Accueil','/') ?></li>
                <li><?php echo $this->Html->link('Galerie', array('controller'=>'categories','action'=>'index')) ?></li>
                <li><?php echo $this->Html->link('Untitled',array('controller'=>'pages','action'=>'display', 'apropos')) ?></li>
                <li><?php echo $this->Html->link('Actualité', array('controller'=>'welcomes','action'=>'blog')) ?></li>
                <li><?php echo $this->Html->link('Contact', array('controller'=>'contacts', 'action'=>'index')) ?></li>
            </ul>
        </div>
        <div class="column col4">
            <header><p>Suivez-nous</p></header>
            <form method="post" action="<?php echo $this->Html->url(array('controller'=>'newsletters','action'=>'subcription')) ?>">
            <p class="bold">Newsletter</p>
                <p>Recevez par email nos nouvelles formations et toutes nos promotions.</p>
                <div>
                    <input type="email" placeholder="Votre e-mail" />
                    <?php echo $this->Html->image('submit-newsletter.jpg') ?>
                    <img src="img/submit-newsletter.jpg" alt="" onClick="" />
                </div>
            </form>
            <div class="social">
                <a href="#" class="fb"><?php echo $this->Html->image('blank.gif') ?></a>
                <a href="#" class="tt"><?php echo $this->Html->image('blank.gif') ?></a>
                <a href="#" class="rss"><?php echo $this->Html->image('blank.gif') ?></a>
            </div>
            <footer>
                <p>
                    Copyright © 2011 <?php echo $this->Html->link('untitled', '/', array('class'=>'home')) ?><br />
                    tous droits éservés
                </p>
                <a href="http://www.tuto.com" title="Emob">
                    <?php echo $this->Html->image('emob.jpg') ?>
                </a>
            </footer>
        </div>
    </div>
</footer>
</body>
</html>
