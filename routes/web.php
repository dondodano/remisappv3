<?php

use App\Http\Livewire\Project;
use App\Http\Livewire\Project\Attachment;
use Illuminate\Support\Facades\Route;


Route::get('/', Project\Index::class );

Route::prefix('/project')->middleware(['guest'])->group(function(){
    Route::get('/', Project\Index::class );
    Route::get('/create', Project\Create::class );

    Route::get('/attachment', Attachment\Index::class );
});
