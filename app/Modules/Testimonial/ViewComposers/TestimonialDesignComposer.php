<?php

namespace App\Modules\Testimonial\ViewComposers;

use Illuminate\View\View;
use Cache;
use App\Repositories\TestimonialCrudRepository;

class TestimonialDesignComposer
{
    public $designElems = [];

    public function __construct(TestimonialCrudRepository  $crudDesign)
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
