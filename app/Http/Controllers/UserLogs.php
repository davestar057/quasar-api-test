<?php

namespace App\Http\Controllers;

use App\ActivityLog;
use Illuminate\Http\Request;

class UserLogs extends Controller
{
    public function index(){
        return [ 'data' => ActivityLog::orderByDesc('created_at')->get() ];
    }
}
