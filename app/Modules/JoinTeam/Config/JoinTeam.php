<?php

return [
         'title'=>'JoinTeam', 
         'permissions'=>  [
       'JoinTeamController@index' => 'list-join-teams', 
        'JoinTeamController@create' => 'add-join-team', 
        'JoinTeamController@store' => 'add-join-team', 
        'JoinTeamController@edit' => 'edit-join-team', 
        'JoinTeamController@update' => 'edit-join-team', 
        'JoinTeamController@fastEdit' => 'edit-join-team', 
        'JoinTeamController@restore' => 'restore-join-team', 
        'JoinTeamController@delete' => 'delete-join-team', 
        'JoinTeamController@destroy' => 'delete-join-team', 
        ], 
         ];