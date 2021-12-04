<?php

    abstract class Controller {

        protected $model;
        protected $view;

        public abstract function __construct();
    }