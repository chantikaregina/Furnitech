<?php

use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\Backend\CompanyInfoController;
use App\Http\Controllers\Backend\PortfolioController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\TestimoniController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [UserLoginController::class, 'login'])->name('login');
    Route::post('/login', [UserLoginController::class, 'auth'])->name('auth');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [CompanyInfoController::class, 'dashboard'])->name('dashboard');

    Route::get('/logout', [CompanyInfoController::class, 'logout'])->name('logout');
    Route::get('/profile', [CompanyInfoController::class, 'profile'])->name('profile');
    Route::put('/profile/update/info', [CompanyInfoController::class, 'update'])->name('profile.update.info');

    Route::get('/companyinfo', [CompanyInfoController::class, 'companyinfo'])->name('companyinfo');
    Route::get('/companyinfo/tambah', [CompanyInfoController::class, 'create'])->name('companyinfo.create');
    Route::post('/companyinfo/tambah', [CompanyInfoController::class, 'store'])->name('companyinfo.store');
    Route::get('/companyinfo/edit/{id_companyinfo}', [CompanyInfoController::class, 'edit'])->name('companyinfo.edit');
    Route::put('/companyinfo/edit/{id_companyinfo}', [CompanyInfoController::class, 'updateCompany'])->name('companyinfo.update');
    Route::get('/companyinfo/delete/{id_companyinfo}', [CompanyInfoController::class, 'delete'])->name('companyinfo.delete');

    Route::get('/portfolio', [PortfolioController::class, 'portfolio'])->name('portfolio');
    Route::get('/portfolio/tambah', [PortfolioController::class, 'create'])->name('portfolio.create');
    Route::post('/portfolio/tambah', [PortfolioController::class, 'store'])->name('portfolio.store');
    Route::get('/portfolio/edit/{id_portfolio}', [PortfolioController::class, 'edit'])->name('portfolio.edit');
    Route::put('/portfolio/edit/{id_portfolio}', [PortfolioController::class, 'update'])->name('portfolio.update');
    Route::get('/portfolio/delete/{id_portfolio}', [PortfolioController::class, 'delete'])->name('portfolio.delete');

    Route::get('/service', [ServiceController ::class, 'service'])->name('service');
    Route::get('/service/tambah', [serviceController::class, 'create'])->name('service.create');
    Route::post('/service/tambah', [serviceController::class, 'store'])->name('service.store');
    Route::get('/service/edit/{id_service}', [serviceController::class, 'edit'])->name('service.edit');
    Route::put('/service/edit/{id_service}', [serviceController::class, 'update'])->name('service.update');
    Route::get('/service/delete/{id_service}', [serviceController::class, 'delete'])->name('service.delete');

    Route::get('/testimoni', [TestimoniController ::class, 'testimoni'])->name('testimoni');
    Route::get('/testimoni/delete/{id_testimoni}', [TestimoniController::class, 'delete'])->name('testimoni.delete');


});
