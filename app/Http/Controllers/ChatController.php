<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Storage; // Use Laravel's Storage facade

class ChatController extends Controller
{
    public function sendMessage(Request $request)
    {
        $message = $request->input('message');
        $conversationId = $request->input('conversationId'); // Assume this is passed by the frontend
        $filePath = "conversations/{$conversationId}.json"; // Define the file path

        $client = new Client();

        // Read existing conversation or start a new one
        if (Storage::exists($filePath)) {
            $conversation = json_decode(Storage::get($filePath), true);
        } else {
            $conversation = [
                ['role' => 'system', 'content' => 'assistant'] // Initialize with system role if needed
            ];
        }

        // Append the new user message
        $conversation[] = ['role' => 'user', 'content' => $message];

        try {
            $response = $client->request('POST', 'https://api.openai.com/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
                    'Content-Type' => 'application/json'
                ],
                'json' => [
                    'model' => 'gpt-3.5-turbo',
                    'messages' => $conversation,
                    'temperature' => 0.7,
                    'max_tokens' => 1250
                ]
            ]);

            $data = json_decode($response->getBody(), true);
            $reply = end($data['choices'])['message']['content'];

            // Update conversation with AI's response
            $conversation[] = ['role' => 'assistant', 'content' => $reply];
            Storage::put($filePath, json_encode($conversation)); // Save updated conversation

            return response()->json(['message' => $reply]);
        } catch (GuzzleException $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}

