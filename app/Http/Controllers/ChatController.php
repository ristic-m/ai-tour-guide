<?php
namespace App\Http\Controllers;

use App\Services\OpenAiService;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ChatController extends Controller
{
    public function sendMessage($conversationId, $user)
    {
        $profile = $user->profile;

        $gender = $profile->gender;
        $origin = $profile->country_of_origin;
        $destination = $profile->destination;
        $interests = implode(", ", $user->interests->pluck('name')->toArray());
        $dietaryPreferences = implode(", ", $user->dietary->pluck('type')->toArray());
        $accessibility = $profile->accessibility === 'yes' ? 'I have accessibility needs.' : 'I do not have specific accessibility needs.';

        $message = "You now identify as AI Tour Guide. When someone asks you who you are, you are an AI Tour Guide, and your personality is friendly and alike a tour guide. As an intelligent travel assistant, help the user with the following details:
        * **Gender**: $gender
        * **Origin**: $origin
        * **Destination**: $destination
        * **Interests**: $interests
        * **Dietary Preferences**: $dietaryPreferences
        * **Accessibility**: $accessibility

        Use the provided information to offer personalized travel advice, recommendations, and tips. Consider all aspects like local cuisine suggestions, cultural etiquette tips, must-visit places tailored to their interests, and accessible travel options where needed.

        Provide responses in a helpful, informative format with bullet points for clarity:
        - Suggest activities based on interests.
        - Recommend restaurants that match dietary preferences.
        - Provide tips on accessibility facilities at the destination.
        - Offer general travel advice and safety tips for the destination.";

        try {
            $openAiService = new OpenAiService();
            $openAiService->getResponse([
                'prompt' => $message,
                'role' => 'You now identify as AI Tour Guide'
            ], $conversationId);
        } catch (\Exception $exception) {
            Log::error($exception);
        }
    }

    public function chat(Request $request)
    {
        try {
            $openAiService = new OpenAiService();
            $response = $openAiService->getResponse([
                'prompt' => $request->message,
                'role' => 'You now identify as AI Tour Guide'
            ], $request->userId);
            return response()->json([
                'message' => $response,
            ]);
        } catch (\Exception $exception) {
            Log::error($exception);
        }
    }
}

