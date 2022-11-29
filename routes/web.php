<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', function () {
        return view("pages.dashboard.index");
    })->name('dashboard.index');


    Route::group(['prefix' => 'client', 'as' => 'client.'], function () {
        Route::resource('addresses', \App\Http\Controllers\Client\AddressController::class)->except([
            'index',
            'create',
            'edit'

        ]);
        //переопределил
        Route::group(['prefix' => 'addresses'], function (){
            Route::get('/{client}/addresses', [App\Http\Controllers\Client\AddressController::class, 'index'])->name('addresses.index');
            Route::get('/{client}/create', [App\Http\Controllers\Client\AddressController::class, 'create'])->name('addresses.create');
            Route::get('/{address}/client/{client}/edit', [App\Http\Controllers\Client\AddressController::class, 'edit'])->name('addresses.edit');

        });

        Route::resource('contracts', \App\Http\Controllers\Client\ContractController::class)->except([
            'index',
            'create',
            'show'
        ]);
        Route::group(['prefix' => 'contracts'], function (){
            Route::get('/{client}', [App\Http\Controllers\Client\ContractController::class, 'index'])->name('contracts.index');
            Route::get('/{client}/create', [App\Http\Controllers\Client\ContractController::class, 'create'])->name('contracts.create');
        });


        Route::resource('requisites', \App\Http\Controllers\Client\RequisiteController::class)->except([
            'index',
            'create',
            'show'
        ]);;
        Route::group(['prefix' => 'requisites'], function (){
            Route::get('/{client}', [App\Http\Controllers\Client\RequisiteController::class, 'index'])->name('requisites.index');
            Route::get('/{client}/create', [App\Http\Controllers\Client\RequisiteController::class, 'create'])->name('requisites.create');
        });
    });

    Route::resource('client', \App\Http\Controllers\Client\ClientController::class);

    Route::prefix('user')->name('user.')->group(function () {
        Route::resource('addresses', \App\Http\Controllers\User\AddressController::class);
        Route::resource('requisites', \App\Http\Controllers\User\RequisiteController::class);
    });

    Route::resource('products', \App\Http\Controllers\ProductController::class);

    Route::get('invoice', [\App\Http\Controllers\InvoiceController::class, 'index'])->name("invoice.index");

    Route::get('invoice/create', function () {
        return view('personal.invoice.create');
    })->name("personal.invoice.create");

    Route::get('invoice/{check}/pdf/preview', [\App\Http\Controllers\PDFController::class, 'check'])->name('pdf.preview');
    Route::get('invoice/{check}/pdf/generate', [\App\Http\Controllers\PDFController::class, 'check_generate'])->name('pdf.generate');
});
