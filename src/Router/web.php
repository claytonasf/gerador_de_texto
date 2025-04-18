<?php

use App\Controller\Chatgpt;
use App\Controller\ControllerError;
use App\Controller\ControllerExport;
use App\Controller\ControllerLogin;
use App\Controller\ControllerOptions;
use App\Controller\ControllerViews;

return  [

    "GET|/" => ControllerViews::class."@home",
    "GET|/login" => ControllerLogin::class."@index",
    "POST|/logar" => ControllerLogin::class."@logar",
    "GET|/logout" => ControllerLogin::class."@logout",
    "POST|/updatePassword" => ControllerLogin::class."@update",
    "POST|/textGenerate" => Chatgpt::class."@index",
    "POST|/export" => ControllerExport::class."@export",
    "POST|/options" => ControllerOptions::class."@store",
    "POST|/create/user" => ControllerLogin::class."@store",
    "POST|/delete/user" => ControllerLogin::class."@delete",
    "GET|/errorText" => ControllerError::class."@index",
    "POST|/errorText" => ControllerError::class."@delete",
    "GET|/planilha-base" => ControllerExport::class."@downloadBase",



];