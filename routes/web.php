<?php

/*
|--------------------------------------------------------------------------
| Index Site Routes
|--------------------------------------------------------------------------
*/
$this->group(['namespace' => 'Site'], function (){

    // Redirect all requests to layout view

    $this->get('{all}', function(){
        return view('layouts.layout');
    })->where('all', '.*');
    
    // View Routes called by AJAX

    $this->post('/teste', 'SiteController@index')->name('site.index');
    $this->post('/watch/{id}', 'SiteController@watch')->name('site.watch');        
});


// As rotas abaixo só são acessíveis com o usuário autenticado

/* $this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function (){
    
    //Routes requested by AJAX

    $this->post('deposit', 'BalanceController@depositStore')->name('deposit.store');
    $this->post('withdraw', 'BalanceController@withdrawStore')->name('withdraw.store');
    $this->post('transfer', 'BalanceController@confirmTransfer')->name('withdraw.store');
    
    
    
    //Modals routes

    $this->get('modal_recharge', 'BalanceController@recharge')->name('balance.modal.recharge');
    $this->get('modal_withdraw', 'BalanceController@withdraw')->name('balance.modal.withdraw');
    $this->get('modal_transfer', 'BalanceController@transfer')->name('balance.modal.transfer');
    
    
    //Routes requested by URL

    $this->get('balance', 'BalanceController@index')->name('admin.balance');         
    $this->get('/', 'AdminController@index')->name('admin.home'); 

});*/
