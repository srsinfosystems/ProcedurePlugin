<?php
namespace ProcedurePlugin\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class ProcedurePluginRouteServiceProvider
 * @package ProcedurePlugin\Providers
 */
class ProcedurePluginRouteServiceProvider extends RouteServiceProvider
{
	/**
	 * @param Router $router
	 */
	public function map(Router $router)
	{
		$router->get('getorder', 'ProcedurePlugin\Controllers\ContentController@getorder');
		
	}
	

}
