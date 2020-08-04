<?php

    namespace app\http\controllers;

    use app\user;
    use app\http\controllers\controller;

    class authcontroller extends controller{

            public function home()
            {
                return view ('form', ['selamat' => 'SELAMAT DATANG']);
            }

    }