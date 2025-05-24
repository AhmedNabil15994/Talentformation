<?php

namespace App\Modules\Opening\ViewComposers;

use Illuminate\View\View;
use Cache;
use App\Repositories\OpeningCrudRepository;

class OpeningDesignComposer
{
    public $designElems = [];

    public function __construct(OpeningCrudRepository  $crudDesign)
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
