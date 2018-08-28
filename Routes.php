<?php

return [


App\Core\Route::get('|^dodaj/?$|',                            'Dodaj',             'index'),
App\Core\Route::post('|^dodaj/?$|',                           'Dodaj',             'post'),

App\Core\Route::get('|^auth/reg?$|',                          'Auth',              'getRegister'),
App\Core\Route::post('|^auth/reg?$|',                         'Auth',              'postRegister'),

App\Core\Route::get('|^auth/log?$|',                          'Auth',              'getLogin'),
App\Core\Route::post('|^auth/log?$|',                         'Auth',              'postLogin'),

App\Core\Route::get('|^auth/logout?$|',                       'Auth',              'logout'),


App\Core\Route::get('|^pogledaj/?$|',                         'Pogledaj',          'index'),

App\Core\Route::get('|^pogledaj/knjiga/([0-9]+)/?$|',         'Knjiga',            'index'),


App\Core\Route::get('|^knjiga/izmeni/([0-9]+)/?$|',           'Knjiga',            'getIzmeni'),
App\Core\Route::post('|^knjiga/izmeni/([0-9]+)/?$|',          'Knjiga',            'postIzmeni'),


App\Core\Route::post('|^knjige/pretraga/?$|',                 'Home',              'postSearch'),

App\Core\Route::any('|^obrisi/knjige/([0-9]+)/?$|',          'Home',              'postDelete'),





App\Core\Route::any('|^error-page/?$|',                       'Error',             'error'),

App\Core\Route::any('|^.*$|',                                 'Home',              'index'),






];