<?php

/**
 * Created by PhpStorm.
 * User: sullivan2013
 * Date: 10/03/14
 * Time: 13:57
 */
App::uses('AppController','Controller');

class WelcomesController extends AppController{

    function index()
    {
        $this->loadModel('Slider');
        $this->loadModel('Product');
        $this->loadModel('Artist');

        $sliders = $this->Slider->find('all', array(
            'fields' => array('link', 'title', 'subtitle', 'image', 'position'),
            'order' => array('Slider.position')
        ));

        $products = $this->Product->find('all', array(
            'fields' => array('Product.id', 'Product.name', 'Product.image', 'Artist.firstname', 'Artist.lastname'),
            'order' => array('Product.created'=>'DESC'),
            'limit' => 4
        ));

       // var_dump($products);
       //

       // debugger::dump($products);die();


        $this->set(compact('sliders','products'));
    }

} 