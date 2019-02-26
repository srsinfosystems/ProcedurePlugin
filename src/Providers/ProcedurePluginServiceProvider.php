<?php
namespace ProcedurePlugin\Providers;

use Plenty\Plugin\ServiceProvider;

/**
 * Class ProcedurePluginServiceProvider
 * @package ProcedurePlugin\Providers
 */
class ProcedurePluginServiceProvider extends ServiceProvider
{

	/**
	 * Register the service provider.
	 */
	public function register()
	{
		$this->getApplication()->register(ProcedurePluginRouteServiceProvider::class);
	}
}
