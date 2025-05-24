<?php

namespace App\Modules\JobRequest\ViewComposers;

use Illuminate\View\View;
use Cache;
use App\Repositories\JobRequestCrudRepository;

class JobRequestDesignComposer
{
    public $designElems = [];

    public function __construct(JobRequestCrudRepository  $crudDesign)
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
