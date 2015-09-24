<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Bingo extends Application {
    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $author = $this->quotes->get(5);
        
        $this->data['mug'] = $author['mug'];
        $this->data['what'] = $author['what'];
        $this->data['who'] = $author['who'];

        $this->render();
    }
}
