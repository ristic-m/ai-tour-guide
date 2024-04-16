<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use App\Models\Interest;
use App\Models\DietaryPreference;

class UserProfileController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'gender' => 'required',
            'country_of_origin' => 'required',
            'destination' => 'required',
            'interests' => 'required|array',
            'dietary' => 'required|array',
            'accessibility' => 'required|in:yes,no',
        ]);

        $user = User::find(auth()->id());


        $profile = $user->profile()->updateOrCreate([
            'gender' => $request->gender,
            'country_of_origin' => $request->country_of_origin,
            'destination' => $request->destination,
            'accessibility_needs' => $request->accessibility === 'yes',
        ]);


        $interestIds = Interest::whereIn('name', $request->interests)->pluck('id');
        $user->interests()->sync($interestIds);


        $dietaryIds = DietaryPreference::whereIn('type', $request->dietary)->pluck('id');
        $user->dietaryPreferences()->sync($dietaryIds);

        return redirect()->route('dashboard')->with('success', 'Profile updated successfully!');
    }
}
