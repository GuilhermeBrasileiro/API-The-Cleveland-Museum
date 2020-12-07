<?php

    namespace controllers;

    class adminController{
        public function index(){
            \views\mainView::render('home');
        }

        public function art(){
            \views\mainView::render('art');
        }
    }
?>