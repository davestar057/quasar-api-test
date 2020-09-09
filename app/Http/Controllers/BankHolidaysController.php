<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class BankHolidaysController extends Controller
{
    protected $holidays_url = 'https://www.gov.uk/bank-holidays.json';

    public function index() {

        $dates = collect(json_decode(file_get_contents($this->holidays_url)))->first()->events;

        return ['data' => json_decode(collect($dates)->where('date', '>', Carbon::now()))];


    }

}
