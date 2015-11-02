<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppController', 'Controller');

/**
 * CakePHP PostsController
 * @author hacker
 */
class PostsController extends AppController {

    public $helpers = array('Html','Form');
    public function index() {
        $this->set('posts', $this->Post->find('all'));
        }
}
