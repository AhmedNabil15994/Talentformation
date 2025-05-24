<?php

return [
    'title'=>'JoinTeam', 
    'permissions'=>  [
        'JobRequestController@index' => 'list-job-requests', 
        'JobRequestController@create' => 'add-job-request', 
        'JobRequestController@store' => 'add-job-request', 
        'JobRequestController@edit' => 'edit-job-request', 
        'JobRequestController@update' => 'edit-job-request', 
        'JobRequestController@fastEdit' => 'edit-job-request', 
        'JobRequestController@restore' => 'restore-job-request', 
        'JobRequestController@delete' => 'delete-job-request', 
        'JobRequestController@destroy' => 'delete-job-request', 
    ], 
];