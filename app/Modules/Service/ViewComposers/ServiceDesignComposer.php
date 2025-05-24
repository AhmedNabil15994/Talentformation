<?php

namespace App\Modules\Service\ViewComposers;

use Illuminate\View\View;
use Cache;
use App\Repositories\ServiceCrudRepository;

class ServiceDesignComposer
{
    public $designElems = [];

    public function __construct(ServiceCrudRepository  $serviceCrud)
    {
        $this->designElems = $serviceCrud->getSpecificData(['all']);
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('designElems' , $this->designElems);
    }
}
