<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class TestController extends Controller
{
    public function index()
    {
        $client = new Client();
        #LID: https://nutra-google.online/qSvkMJ
        $response = $client->post('https://api.cpa.house/method/send_order', [
            'form_params' => [
                'api_key' => '7s0pmKvFnmOidJS5rrXAIYltUp1qc1wjWAgN6h5DkfZHuZf6gMGQa8di3nW2obOl',
                'id_webmaster' => '11',
                'ip_address' => '192.0.0.1',
                'name' => 'test',
                'phone' => '89014592254',
                'id_offer' => '1',
                'id_source' => '2',
                'id_stream' => '23',
                'user_agent' => 'test',
                'county_code' => 'RU',
            ],
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        dd($result);
    }
}
