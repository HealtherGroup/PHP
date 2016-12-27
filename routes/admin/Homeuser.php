<?php
$router->group(['prefix' => 'homeuser'],function ($router)
{
    $router->get('ajaxIndex','homeuserController@ajaxIndex')->name('homeuser.ajaxIndex');
    $router->get('/{id}/reset','hHomeuserController@resetPassword')->name('homeuser.reset');
});
$router->resource('homeuser','HomeuserController');
