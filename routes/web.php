<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\WhyController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\TeamController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\WhatsappChatbotController;
use App\Http\Controllers\Frontend\BusinessAutomationController;






Route::get('/',[HomeController::class,'index']);
Route::get('/about',[AboutController::class,'index']);

Route::get('/service',[ServiceController::class,'index']);

Route::get('/team',[TeamController::class,'index']);

Route::get('/why',[WhyController::class,'index']);
Route::get('/business-automation',[BusinessAutomationController::class,'index']);
Route::get('/whatsapp-chatbot',[WhatsappChatbotController::class,'index']);


