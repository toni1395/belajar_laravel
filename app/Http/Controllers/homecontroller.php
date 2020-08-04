<?php

    namespace app\http\controllers;

    use app\user;
    use app\http\controllers\controller;

    class homecontroller extends controller{

            public function home()
            {
                return view ('index');
            }

    }