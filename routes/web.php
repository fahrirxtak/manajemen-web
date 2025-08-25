<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\Marketing\DashboardController as MarketingDashboard;
use App\Http\Controllers\Client\DashboardController as ClientDashboard;
use App\Http\Controllers\Investor\DashboardController as InvestorDashboard;


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', function () {
    if (auth()->check()) {
        $user = auth()->user();

        if ($user->hasRole('admin')) {
            return redirect()->route('admin.dashboard');
        } elseif ($user->hasRole('marketing')) {
            return redirect()->route('marketing.dashboard');
        } elseif ($user->hasRole('client')) {
            return redirect()->route('client.dashboard');
        } elseif ($user->hasRole('investor')) {
            return redirect()->route('investor.dashboard');
        }

        return redirect()->view('errors/pageError'); // fallback kalau role tidak dikenal
    }

    return redirect()->route('login'); // kalau belum login
});



Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboard::class, 'index'])->name('admin.dashboard');
    Route::get('/profile', [AdminProfileController::class, 'index'])->name('profile.index');
});

Route::middleware(['auth', 'role:marketing'])->group(function () {
    Route::get('/marketing/dashboard', [MarketingDashboard::class, 'index'])->name('marketing.dashboard');
});

Route::middleware(['auth', 'role:client'])->group(function () {
    Route::get('/client/dashboard', [ClientDashboard::class, 'index'])->name('client.dashboard');
});

Route::middleware(['auth', 'role:investor'])->group(function () {
    Route::get('/investor/dashboard', [InvestorDashboard::class, 'index'])->name('investor.dashboard');
});


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
