<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use PhpParser\Node\Stmt\Return_;

class ChatController extends Controller
{
    public function sendMessage(Request $request)
    {
        $message = $request->input('message');
        $client = new Client();

        try {
            $response = $client->request('POST', 'https://api.openai.com/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
                    'Content-Type' => 'application/json'
                ],
                'json' => [
                    'model' => 'gpt-3.5-turbo',
                    'messages' => [
                        ['role' => 'system', 'content' => 'assistant'],
                        ['role' => 'user', 'content' => $message]
                    ],
                    'temperature' => 0.7,
                    'max_tokens' => 1250
                ]
            ]);



            $data = json_decode($response->getBody(), true);
            $reply = end($data['choices'])['message']['content'];

            return response()->json(['message' => $reply]);
        } catch (GuzzleException $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }



    }
}
