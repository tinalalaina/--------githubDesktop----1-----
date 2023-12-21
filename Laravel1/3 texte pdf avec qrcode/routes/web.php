<?php
//...

use App\Http\Controllers\PDFController;

Route::get('generate-pdf', [PDFController::class, 'generatePDF']);

//...
