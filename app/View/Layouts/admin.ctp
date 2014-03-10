<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php echo $title_for_layout ?></title>
        
        <?php echo $this->Html->css('reset') ?>
        <?php echo $this->Html->css('administration') ?>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
        <?php echo $scripts_for_layout ?>
    </head>
    
    <body>
        <header id="header_page">
            <div class="content-center">
                <?php
                echo $this->Html->link(
                    $this->Html->image('bo/logo.png'),
                    '/admin',
                    array('id'=>'logo','escape'=>false)
                )
                ?>
                <p class="right">
                    <span>Bonjour  !</span>
                    <?php echo $this->Html->link(
                            $this->Html->image('bo/logout.png'),
                            array('controller'=>'users','action'=>'logout','admin'=>false),
                            array('title'=>'Me déconnecter', 'escape'=>false)
                    ) ?>
                </p>
            </div>
        </header>
        <nav id="navbar">
        	<div class="content-center">
                <ul>
                    <?php echo $this->element('menu_admin') ?>
                </ul>
            </div>
        </nav>
        
        <div id="content" class="content-center">
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->Session->flash('Auth'); ?>
            <?php echo $content_for_layout ?>
        </div>
        
        <footer id="footer_page">
        	<div class="content-center centered">
            	<ul>
                	<li>
                    	<a href="#header_page">
                        	Top
                        </a>
                    </li>
                    <li>
                    	<a href="<?php echo $this->Html->url('/') ?>" target="_blank">
                        	Home
                        </a>
                    </li>
                    <li>
                    	<a href="logout">
                        	Logout
                        </a>
                    </li>
                </ul>
                <p>&copy; admin 2011</p>
            </div>
        </footer>
    </body>
</html>
