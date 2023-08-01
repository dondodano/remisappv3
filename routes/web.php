<?php

use App\Http\Livewire\Project;
use App\Http\Livewire\Project\Attachment;
use Illuminate\Support\Facades\Route;


Route::get('/', Project\Index::class );
Route::get('/project', Project\Index::class );

Route::get('/project/attachment', Attachment\Index::class );
