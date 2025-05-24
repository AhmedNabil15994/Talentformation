<?php

namespace App\Modules\Client\ViewComposers;

use Illuminate\View\View;
use Cache;
use App\Repositories\ClientCrudRepository;

class ClientDesignComposer
{
    public $designElems = [];

    public function __construct(ClientCrudRepository  $crudDesign)
    {
        $this->designElems = $crudDesign->getSpecificData(['all']);
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
