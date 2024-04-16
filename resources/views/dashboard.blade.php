<x-app-layout>
    <form action="{{ route('profile.store') }}" method="POST" class="max-w-sm mx-auto" >
        @csrf
        <label for="countries" class="block mb-2 mt-8 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

            <option></option>
            <option>Male</option>
            <option>Female</option>
            <option>Rather not say</option>
        </select>

        <label for="countries" class="block my-2 text-sm font-medium text-gray-900 dark:text-white">Where are you from?</label>
        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

            <option></option>
            <option>United States</option>
            <option>Canada</option>
            <option>France</option>
            <option>Germany</option>
        </select>

        <label for="countries" class="block my-2 text-sm font-medium text-gray-900 dark:text-white">Where are you travelling to?</label>
        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

            <option></option>
            <option>United States</option>
            <option>Canada</option>
            <option>France</option>
            <option>Germany</option>
        </select>

        <div class="block my-4">
            <span class="text-sm font-medium text-gray-900 dark:text-white">Select your interests:</span>
            <div class="grid grid-cols-2 gap-4 mt-2">
                <div>
                    <label for="sports" class="inline-flex items-center">
                        <input type="checkbox" id="sports" name="interests[]" value="sports" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600">
                        <span class="ml-2 text-sm text-gray-900 dark:text-gray-300">Sports</span>
                    </label>
                    <label for="outdoor_activities" class="inline-flex items-center">
                        <input type="checkbox" id="outdoor_activities" name="interests[]" value="outdoor activities" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600">
                        <span class="ml-2 text-sm text-gray-900 dark:text-gray-300">Outdoor Activities</span>
                    </label>
                    <label for="arts_culture" class="inline-flex items-center">
                        <input type="checkbox" id="arts_culture" name="interests[]" value="arts & culture" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600">
                        <span class="ml-2 text-sm text-gray-900 dark:text-gray-300">Arts & Culture</span>
                    </label>
                    <label for="food_dining" class="inline-flex items-center">
                        <input type="checkbox" id="food_dining" name="interests[]" value="food & dining" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600">
                        <span class="ml-2 text-sm text-gray-900 dark:text-gray-300">Food & Dining</span>
                    </label>
                    <label for="travel_adventure" class="inline-flex items-center">
                        <input type="checkbox" id="travel_adventure" name="interests[]" value="travel & adventure" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600">
                        <span class="ml-2 text-sm text-gray-900 dark:text-gray-300">Travel & Adventure</span>
                    </label>
                </div>
                <div>
                    <label for="entertainment" class="inline-flex items-center">
                        <input type="checkbox" id="entertainment" name="interests[]" value="entertainment" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600">
                        <span class="ml-2 text-sm text-gray-900 dark:text-gray-300">Entertainment</span>
                    </label>
                    <label for="wellness_fitness" class="inline-flex items-center">
                        <input type="checkbox" id="wellness_fitness" name="interests[]" value="wellness & fitness" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600">
                        <span class="ml-2 text-sm text-gray-900 dark:text-gray-300">Wellness & Fitness</span>
                    </label>
                    <label for="reading_writing" class="inline-flex items-center">
                        <input type="checkbox" id="reading_writing" name="interests[]" value="reading & writing" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600">
                        <span class="ml-2 text-sm text-gray-900 dark:text-gray-300">Reading & Writing</span>
                    </label>
                    <label for="photography" class="inline-flex items-center">
                        <input type="checkbox" id="photography" name="interests[]" value="photography" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600">
                        <span class="ml-2 text-sm text-gray-900 dark:text-gray-300">Photography</span>
                    </label>
                    <label for="fashion_style" class="inline-flex items-center">
                        <input type="checkbox" id="fashion_style" name="interests[]" value="fashion & style" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600">
                        <span class="ml-2 text-sm text-gray-900 dark:text-gray-300">Fashion & Style</span>
                    </label>
                </div>
            </div>
            <div id="interestsError" class="hidden text-red-500 text-sm mb-2">Please select at least one interest.</div>
        </div>

        <div class="block my-4">
            <span class="text-sm font-medium text-gray-900 dark:text-white">Select your dietary preferences:</span>
            <div class="mt-2 grid grid-cols-3 gap-4">
                <label for="none" class="inline-flex items-center">
                    <input type="checkbox" id="none" name="dietary[]" value="none" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600" onchange="handleDietarySelection()">
                    <span class="ml-2 text-sm text-gray-900 dark:text-gray-300">None</span>
                </label>
                <label for="vegan" class="inline-flex items-center">
                    <input type="checkbox" id="vegan" name="dietary[]" value="vegan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600" onchange="handleDietarySelection()">
                    <span class="ml-2 text-sm text-gray-900 dark:text-gray-300">Vegan</span>
                </label>
                <label for="vegetarian" class="inline-flex items-center">
                    <input type="checkbox" id="vegetarian" name="dietary[]" value="vegetarian" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600" onchange="handleDietarySelection()">
                    <span class="ml-2 text-sm text-gray-900 dark:text-gray-300">Vegetarian</span>
                </label>
                <label for="carnivore" class="inline-flex items-center">
                    <input type="checkbox" id="carnivore" name="dietary[]" value="carnivore" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600" onchange="handleDietarySelection()">
                    <span class="ml-2 text-sm text-gray-900 dark:text-gray-300">Carnivore</span>
                </label>
                <label for="gluten-free" class="inline-flex items-center">
                    <input type="checkbox" id="gluten-free" name="dietary[]" value="gluten-free" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600" onchange="handleDietarySelection()">
                    <span class="ml-2 text-sm text-gray-900 dark:text-gray-300">Gluten-Free</span>
                </label>
                <label for="dairy-free" class="inline-flex items-center">
                    <input type="checkbox" id="dairy-free" name="dietary[]" value="dairy-free" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600" onchange="handleDietarySelection()">
                    <span class="ml-2 text-sm text-gray-900 dark:text-gray-300">Dairy-Free</span>
                </label>
            </div>
            <div id="dietaryError" class="hidden text-red-500 text-sm mb-2">Please select at least one dietary preference.</div>
        </div>

        <div class="block my-4">
            <span class="text-sm font-medium text-gray-900 dark:text-white">Do you have accessibility needs?</span>
            <div class="mt-2">
                <label for="accessibilityYes" class="inline-flex items-center">
                    <input type="radio" id="accessibilityYes" name="accessibility" value="yes" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600">
                    <span class="ml-2 text-sm text-gray-900 dark:text-gray-300">Yes</span>
                </label>
                <label for="accessibilityNo" class="inline-flex items-center ml-4">
                    <input type="radio" id="accessibilityNo" name="accessibility" value="no" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600" checked>
                    <span class="ml-2 text-sm text-gray-900 dark:text-gray-300">No</span>
                </label>
            </div>
        </div>

        <button type="submit" class="mt-2 relative flex justify-center items-center justify-start inline-block px-5 py-3 overflow-hidden font-bold font-reddit rounded-full group mx-auto my-2 w-72 cursor-pointer">
            <span class="w-48 h-48 rotate-45 translate-x-12 -translate-y-[-6rem] absolute left-0 top-0 bg-violet-400 opacity-[3%]"></span>
            <span class="absolute top-0 left-0 w-72 h-72 -mt-1 transition-all duration-500 ease-in-out rotate-45 -translate-x-96 -translate-y-24 bg-violet-400 opacity-100 group-hover:-translate-x-1"></span>
            <span class="relative w-full text-left text-violet-400 transition-colors duration-200 ease-in-out group-hover:text-gray-900 text-center">Submit</span>
            <span class="absolute inset-0 border-2 border-violet-400 rounded-full"></span>
        </button>
    </form>

</x-app-layout>
