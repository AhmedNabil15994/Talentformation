<?php

return [
         'title'=>'Opening', 
         'permissions'=>  [
       'OpeningController@index' => 'list-openings', 
        'OpeningController@create' => 'add-opening', 
        'OpeningController@store' => 'add-opening', 
        'OpeningController@edit' => 'edit-opening', 
        'OpeningController@update' => 'edit-opening', 
        'OpeningController@fastEdit' => 'edit-opening', 
        'OpeningController@restore' => 'restore-opening', 
        'OpeningController@delete' => 'delete-opening', 
        'OpeningController@destroy' => 'delete-opening', 
        ], 
         ];