<?php

$router->group(['prefix' => LaravelLocalization::setLocale(), 'before' => 'LaravelLocalizationRedirectFilter|auth|admin'], function($router) use($config, $app)
{
    $router->group(['prefix' => $config->get('core::core.admin-prefix'), 'namespace' => 'Dashboard\Http\Controllers'], function($router) use($config, $app)
	{
        $router->get('/', ['as' => 'dashboard.index', 'uses' => 'Admin\DashboardController@index']);
	});
});
