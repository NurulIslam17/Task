<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use App\Models\Api;

use Illuminate\Http\Request;

class ApiControlller extends Controller
{
    public function store()
    {
        $api_url = 'https://jsonplaceholder.typicode.com/todos';
        $response = Http::get($api_url);
        $data = json_decode($response->body());

        echo "<pre>";

        foreach ($data as $post)
        {
            $post = (array)$post;
            Api::updateOrCreate(
                ['id'=>$post['id']],
                [
                    'id'=>$post['id'],
                    'userId'=>$post['userId'],
                    'title'=>$post['title'],
                    'completed'=>$post['completed'],
                ]
            );

//            print_r($post['completed']);
        }
//       dd('Data Stored');

    }
}
