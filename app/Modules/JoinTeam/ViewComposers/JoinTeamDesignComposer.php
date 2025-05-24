<?php

namespace App\Modules\JoinTeam\ViewComposers;

use Illuminate\View\View;
use Cache;
use App\Repositories\JoinTeamCrudRepository;

class JoinTeamDesignComposer
{
    public $designElems = [];

    public function __construct(JoinTeamCrudRepository  $crudDesign)
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
