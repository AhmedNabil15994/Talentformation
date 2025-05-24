<?php

namespace App\Repositories;
use App\Entities\Opening;
use App\Interfaces\DesignInterface;
use App\Transformers\OpeningResource;

class JobRequestCrudRepository implements DesignInterface
{   

    /**
     * @inheritDoc
     */
    public function mainData()
    {
        return [
            'title' => trans('JobRequest::jobRequest.title'),
            'url' => 'dashboard/'.'jobRequests',
            'name' => 'job-requests',
            'nameOne' => 'job-team',
            'modelName' => 'JoinTeam',
            'icon' => ' fas fa-envelope-open-text',
            'sortName' => '',
            'addOne' => trans('JobRequest::jobRequest.newOne'),
        ];
    }

    /**
     * @inheritDoc
     */
    public function searchData(): array
    {
        return  [
            'name' => [
                'type' => 'text',
                'class' => 'form-control datatable-input',
                'index' => '1',
                'label' => trans('JobRequest::jobRequest.form.name'),
            ],
            'email' => [
                'type' => 'text',
                'class' => 'form-control datatable-input',
                'index' => '2',
                'label' => trans('JobRequest::jobRequest.form.email'),
            ],
            'phone' => [
                'type' => 'text',
                'class' => 'form-control datatable-input',
                'index' => '2',
                'label' => trans('JobRequest::jobRequest.form.phone'),
            ],
            'designation' => [
                'type' => 'text',
                'class' => 'form-control datatable-input',
                'index' => '2',
                'label' => trans('JobRequest::jobRequest.form.designation'),
            ],
            'company_name' => [
                'type' => 'text',
                'class' => 'form-control datatable-input',
                'index' => '2',
                'label' => trans('JobRequest::jobRequest.form.company_name'),
            ],
            'work_from' => [
                'type' => 'text',
                'class' => 'form-control datatable-input',
                'index' => '2',
                'label' => trans('JobRequest::jobRequest.form.work_from'),
            ],
            'work_to' => [
                'type' => 'text',
                'class' => 'form-control datatable-input',
                'index' => '2',
                'label' => trans('JobRequest::jobRequest.form.work_to'),
            ],
            'current_salary' => [
                'type' => 'text',
                'class' => 'form-control datatable-input',
                'index' => '2',
                'label' => trans('JobRequest::jobRequest.form.current_salary'),
            ],
            'expected_salary' => [
                'type' => 'text',
                'class' => 'form-control datatable-input',
                'index' => '2',
                'label' => trans('JobRequest::jobRequest.form.expected_salary'),
            ],
            'opening_id' => [
                'type' => 'select',
                'class' => 'form-control datatable-input',
                'index' => '2',
                'label' => trans('JobRequest::jobRequest.form.opening'),
                'options' => OpeningResource::collection(Opening::active()->get()),
            ],
            'date' => [
                'type' => 'text',
                'class' => 'form-control datepicker-input datepicker',
                'index' => '2',
                'label' => trans('Blog::blog.form.date'),
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
            'name' => [
                'label' => trans('JobRequest::jobRequest.form.name'),
                'type' => '',
                'className' => 'edits',
                'data-col' => 'name',
                'anchor-class' => 'editable',
            ],
            'email' => [
                'label' => trans('JobRequest::jobRequest.form.email'),
                'type' => '',
                'className' => 'edits',
                'data-col' => 'email',
                'anchor-class' => 'editable',
            ],
            'phone' => [
                'label' => trans('JobRequest::jobRequest.form.phone'),
                'type' => '',
                'className' => 'edits',
                'data-col' => 'phone',
                'anchor-class' => 'editable',
            ],
            'designation' => [
                'label' => trans('JobRequest::jobRequest.form.designation'),
                'type' => '',
                'className' => 'edits',
                'data-col' => 'designation',
                'anchor-class' => 'editable',
            ],
            'company_name' => [
                'label' => trans('JobRequest::jobRequest.form.company_name'),
                'type' => '',
                'className' => 'edits',
                'data-col' => 'company_name',
                'anchor-class' => 'editable',
            ],
            'work_from' => [
                'label' => trans('JobRequest::jobRequest.form.work_from'),
                'type' => '',
                'className' => 'edits',
                'data-col' => 'work_from',
                'anchor-class' => 'editable',
            ],
            'work_to' => [
                'label' => trans('JobRequest::jobRequest.form.work_to'),
                'type' => '',
                'className' => 'edits',
                'data-col' => 'work_to',
                'anchor-class' => 'editable',
            ],
            'current_salary' => [
                'label' => trans('JobRequest::jobRequest.form.current_salary'),
                'type' => '',
                'className' => 'edits',
                'data-col' => 'current_salary',
                'anchor-class' => 'editable',
            ],
            'expected_salary' => [
                'label' => trans('JobRequest::jobRequest.form.expected_salary'),
                'type' => '',
                'className' => 'edits',
                'data-col' => 'expected_salary',
                'anchor-class' => 'editable',
            ],
            'opening_name' => [
                'label' => trans('JobRequest::jobRequest.form.opening'),
                'type' => '',
                'className' => '',
                'data-col' => 'opening_name',
                'anchor-class' => '',
            ],
            'status' => [
                'label' => trans('Section::section.form.status'),
                'type' => '',
                'className' => '',
                'data-col' => 'status',
                'anchor-class' => '',
            ],
            'created_at' => [
                'label' => trans('Blog::blog.form.date'),
                'type' => '',
                'className' => '',
                'data-col' => 'created_at',
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
