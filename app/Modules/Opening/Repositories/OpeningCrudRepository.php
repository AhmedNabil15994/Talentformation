<?php

namespace App\Repositories;
use App\Interfaces\DesignInterface;

class OpeningCrudRepository implements DesignInterface
{   

    /**
     * @inheritDoc
     */
    public function mainData()
    {
        return [
            'title' => trans('Opening::opening.title'),
            'url' => 'dashboard/'.'openings',
            'name' => 'openings',
            'nameOne' => 'opening',
            'modelName' => 'Opening',
            'icon' => ' fas fa-envelope-open-text',
            'sortName' => '',
            'addOne' => trans('Opening::opening.newOne'),
        ];
    }

    /**
     * @inheritDoc
     */
    public function searchData(): array
    {
        return  [
            'location' => [
                'type' => 'text',
                'class' => 'form-control datatable-input',
                'index' => '',
                'label' => trans('Opening::opening.form.location'),
            ],
            'qualifications' => [
                'type' => 'text',
                'class' => 'form-control datatable-input',
                'index' => '',
                'label' => trans('Opening::opening.form.qualifications'),
            ],
            'career_level' => [
                'type' => 'text',
                'class' => 'form-control datatable-input',
                'index' => '',
                'label' => trans('Opening::opening.form.career_level'),
            ],
            'salary' => [
                'type' => 'text',
                'class' => 'form-control datatable-input',
                'index' => '',
                'label' => trans('Opening::opening.form.salary'),
            ],
            'nationality' => [
                'type' => 'text',
                'class' => 'form-control datatable-input',
                'index' => '',
                'label' => trans('Opening::opening.form.nationality'),
            ],
            'language' => [
                'type' => 'text',
                'class' => 'form-control datatable-input',
                'index' => '',
                'label' => trans('Opening::opening.form.language'),
            ],
            'job_status' => [
                'type' => 'select',
                'class' => 'form-control datatable-input',
                'index' => '',
                'label' => trans('Opening::opening.form.job_status'),
                'options' => [
                    ['id'=> 1, 'title' => trans('Opening::opening.form.job_status_1')],
                    ['id'=> 2, 'title' => trans('Opening::opening.form.job_status_2')],
                    ['id'=> 3, 'title' => trans('Opening::opening.form.job_status_3')],
                ],
            ],
        ];
    }

    /**
     * @inheritDoc
     */
    public function toggleData(): array
    {
        return  [
            'status' => [
                'type' => 'toggle',
                'class' => 'form-control datatable-input',
                'index' => '',
                'label' => trans('Dashboard::dashboard.showInActive'),
                'checked' => true,
            ],
            'deleted_at' => [
                'type' => 'toggle',
                'class' => 'form-control datatable-input',
                'index' => '',
                'label' => trans('Dashboard::dashboard.showItems'),
                'checked' => false,
            ],
            
        ];
    }

    /**
     * @inheritDoc
     */
    public function tableData()
    {
        return [
            'id' => [
                'label' => trans('Dashboard::dashboard.id'),
                'type' => '',
                'className' => '',
                'data-col' => '',
                'anchor-class' => '',
            ],
            'title_ar' => [
                'label' => trans('Section::section.form.title_ar'),
                'type' => '',
                'className' => 'edits',
                'data-col' => 'name_ar',
                'anchor-class' => 'editable',
            ],
            'title_en' => [
                'label' => trans('Section::section.form.title_en'),
                'type' => '',
                'className' => 'edits',
                'data-col' => 'name_en',
                'anchor-class' => 'editable',
            ],
            "job_details.location.".LANGUAGE_PREF => [
                'label' => trans('Opening::opening.form.location'),
                'type' => '',
                'className' => '',
                'data-col' => '',
                'anchor-class' => '',
            ],
            "job_details.qualifications.".LANGUAGE_PREF => [
                'label' => trans('Opening::opening.form.qualifications'),
                'type' => '',
                'className' => '',
                'data-col' => '',
                'anchor-class' => '',
            ],
            "job_details.career_level.".LANGUAGE_PREF => [
                'label' => trans('Opening::opening.form.career_level'),
                'type' => '',
                'className' => '',
                'data-col' => '',
                'anchor-class' => '',
            ],
            "job_details.salary.".LANGUAGE_PREF => [
                'label' => trans('Opening::opening.form.salary'),
                'type' => '',
                'className' => '',
                'data-col' => '',
                'anchor-class' => '',
            ],
            "job_status_text" => [
                'label' => trans('Opening::opening.form.job_status'),
                'type' => '',
                'className' => '',
                'data-col' => '',
                'anchor-class' => '',
            ],
            'views' => [
                'label' => trans('Blog::blog.form.views'),
                'type' => '',
                'className' => '',
                'data-col' => 'views',
                'anchor-class' => '',
            ],
            'requests_count' => [
                'label' => trans('Opening::opening.form.requests_count'),
                'type' => '',
                'className' => '',
                'data-col' => 'requests_count',
                'anchor-class' => '',
            ],
            'status' => [
                'label' => trans('Section::section.form.status'),
                'type' => '',
                'className' => '',
                'data-col' => 'status',
                'anchor-class' => '',
            ],
            'actions' => [
                'label' => trans('Dashboard::dashboard.actions'),
                'type' => '',
                'className' => '',
                'data-col' => '',
                'anchor-class' => '',
            ],
        ];
    }

    /**
     * @inheritDoc
     */
    public function addData()
    {
        return[
            
        ];
    }

    /**
     * @inheritDoc
     */
    public function editData()
    {
        return[
            
        ];
    }

    /**
     * @inheritDoc
     */
    public function getSpecificData($types=[])
    {
        $data = [];
        if(in_array('main',$types)){
            $data['mainData'] = $this->mainData();
        }

        if(in_array('search',$types)){
            $data['searchData'] = $this->searchData();
            $data['toggleData'] = $this->toggleData();
        }

        if(in_array('table',$types)){
            $data['tableData'] = $this->tableData();
        }

        if(in_array('add',$types)){
            $data['modelData'] = $this->addData();
        }

        if(in_array('edit',$types)){
            $data['modelData'] = $this->editData();
        }

        if(in_array('all',$types)){
            $data = [
                'mainData' => $this->mainData(),
                'toggleData' => $this->toggleData(),
                'searchData' => $this->searchData(),
                'tableData' => $this->tableData(),
                'modelData' => $this->addData(),
            ];
        }
        return $data;
    }
}
