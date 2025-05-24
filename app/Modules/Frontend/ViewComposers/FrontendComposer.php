<?php

namespace App\Modules\Frontend\ViewComposers;

use App\Entities\Category;
use App\Entities\Page;
use Cache;
use Illuminate\View\View;

class FrontendComposer
{
    public $menues = [];
    public $mainCategories = [];

    public function __construct()
    {
        // $this->menus =  Page::where([
        //     ['status',1],
        //     ['prefix' , '!=', null]
        // ])->get();

        $this->mainCategories = Category::active()->where('parent_id',1)->with('children')->get();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        // $view->with('menus' , $this->menus);
        $view->with('mainCategories' , $this->mainCategories);
    }
}
