<?php

/*
|--------------------------------------------------------------------------
| Index Site Routes
|--------------------------------------------------------------------------
*/
$this->group(['namespace' => 'Site'], function (){
    
    // View Routes called by AJAX

    $this->get('/', 'SiteController@index')->name('site.index');
    $this->get('/watch/{id}', 'SiteController@watch')->name('site.watch');        
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
