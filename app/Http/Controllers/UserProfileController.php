<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use App\Models\Interest;
use App\Models\Dietary;

class UserProfileController extends Controller
{
    public function store(Request $request)
    {


        $request->validate([
            'gender' => 'required',
            'country_of_origin' => 'required',
            'destination' => 'required',
            'interests' => 'array|required',
            'dietary' => 'array|required',
            'accessibility' => 'required|in:yes,no',
        ]);



        $user = auth()->user();


        $user->profile()->updateOrCreate([
            'user_id' => $user->id
        ], [
            'gender' => $request->gender,
            'country_of_origin' => $request->country_of_origin,
            'destination' => $request->destination,
            'accessibility_needs' => $request->accessibility === 'yes',
        ]);

        $interestIds = Interest::whereIn('name', $request->interests)->pluck('id');
        $user->interests()->sync($interestIds);

        $dietaryIds = Dietary::whereIn('type', $request->dietary)->pluck('id')->toArray();
        $user->dietary()->sync($dietaryIds);

//        $prompt = "Hello, I am a {$profile->gender} from {$profile->country_of_origin}, traveling to {$profile->destination}. My interests are {$interests}, and my dietary preferences are {$dietaryPreferences}. I have {$profile->accessibility_needs} 'specific accessibility needs' : 'no special accessibility needs'}. Can you provide personalized travel advice?";
//
//
//        $response = $openAIService->sendMessage($prompt);
//
//
//        \Log::info('AI response: ' . $response);
//
        return redirect()->route('chat');
    }
}
