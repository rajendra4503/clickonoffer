<?php

Route::group(['middleware' => 'web', 'prefix' => 'o4k', 'namespace' => 'Modules\Admin\Http\Controllers'], function()
{
    //Route::get('/', 'AdminController@index');
    Route::get('/', 'AdminLoginController@index');
    Route::get('/login', 'AdminLoginController@index');
    Route::post('/post_login', 'AdminLoginController@post_login');
    Route::get('/logout', 'AdminLoginController@logout');
    Route::get('/CheckLogin', 'AdminLoginController@CheckLogin');
    Route::get('/404', 'AdminLoginController@not_found');
    
     /* logged admin user opertaions */
    Route::group(['middleware' =>  'admin_auth:admin'], function(){
        
       Route::get('/dashboard', 'AdminLoginController@dashboard'); 
       
  
       //       module
        Route::get('/module', 'ModuleController@index'); 
        Route::get('/module/create', 'ModuleController@create');
        Route::post('/module/store', 'ModuleController@store'); 
       
      Route::bind('language', function ($value, $route) {
           return Modules\Admin\Models\Language::find($value);
       });

       Route::resource(
           'language',
           'LanguageController',
           [
               'names' => [
                   'edit'    => 'language.edit',
                   'show'    => 'language.show',
                   'destroy' => 'language.destroy',
                   'update'  => 'language.update',
                   'store'   => 'language.store',
                   'index'   => 'language',
                   'create'  => 'language.create',
               ],
           ]
       );


       Route::bind('role', function ($value, $route) {
            return Modules\Admin\Entities\Role::find($value);
        });

        Route::resource(
            'roles',
            'RoleController',
            [
                'names' => [
                    'edit'    => 'role.edit',
                    'show'    => 'role.show',
                    'destroy' => 'role.destroy',
                    'update'  => 'role.update',
                    'store'   => 'role.store',
                    'index'   => 'role',
                    'create'  => 'role.create',
                ],
            ]
        );
       
       
       
       
    });
});
