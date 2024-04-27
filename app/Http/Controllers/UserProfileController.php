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

        $chatController = new ChatController();

        $chatController->sendMessage($user->id, $user);

        return redirect()->route('chat');
    }
}
