<?php

Route::jsonGroup('dashboard', \App\Http\Controllers\BackOffice\DashboardController::class, [
    'index', 'json',
]);
