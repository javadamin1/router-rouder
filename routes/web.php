<?php

use Router\Router;
Router::get('/public/example/{id}',['middleware'=>"",'prefix'=>""],function(){})->middleware('Auth')->name();
Router::dispatch();

