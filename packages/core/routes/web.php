<?php

Route::get('/', Workshop\Core\Http\Controllers\ItemController::class)
    ->middleware('select-response');
