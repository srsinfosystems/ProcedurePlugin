<?php
namespace ProcedurePlugin\Providers;
 
use Plenty\Plugin\ServiceProvider;
use Plenty\Modules\EventProcedures\Services\EventProceduresService;
use Plenty\Modules\EventProcedures\Services\Entries\ProcedureEntry;
use ProcedurePlugin\EventProcedures\Filters;
 
class ProcedurePluginServiceProvider extends ServiceProvider
{
    /**
     * @param EventProceduresService $eventProceduresService
     * @return void
     */
    public function boot(EventProceduresService $eventProceduresService)
    {
        $eventProceduresService->registerFilter(
            'getorder',
            ProcedureEntry::EVENT_TYPE_ORDER,
            ['de' => 'Auftrag ist gesperrt', 'en' => 'new order'],
            Filters::class . '@getorder'
        );
    }

    public function register()
    {
        $this->getApplication()->register(ProcedurePluginRouteServiceProvider::class);
    }
}