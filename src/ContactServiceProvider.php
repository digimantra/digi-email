<?php

namespace Kushagra\Testing;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider{
    public function boot(){
        $this->loadRoutesFrom(__DIR__. '/routes/web.php');
    }

    public function register(){

    }
}