<?php

return [
         'title'=>'Testimonial', 
         'permissions'=>  [
       'TestimonialController@index' => 'list-testimonials', 
        'TestimonialController@create' => 'add-testimonial', 
        'TestimonialController@store' => 'add-testimonial', 
        'TestimonialController@edit' => 'edit-testimonial', 
        'TestimonialController@update' => 'edit-testimonial', 
        'TestimonialController@fastEdit' => 'edit-testimonial', 
        'TestimonialController@restore' => 'restore-testimonial', 
        'TestimonialController@delete' => 'delete-testimonial', 
        'TestimonialController@destroy' => 'delete-testimonial', 
        ], 
         ];