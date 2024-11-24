<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Rules\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class SettingsController extends Controller
{
    public function ChangeFirstName(Request $request) {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'first_name' => 'nullable|string|max:50',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->toArray();
            $formattedErrors = [];

            foreach ($errors as $field => $messages) {
                $formattedErrors[$field] = $messages[0];
            }

            return response()->json($formattedErrors, 422);
        }

        $validatedData = $validator->validated();

        $user->update($validatedData);

        return response()->json([
            'message' => 'Profile updated successfully',
            'user' => $user,
        ]);
    }

    public function ChangeLastName(Request $request) {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'last_name' => 'nullable|string|max:50',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->toArray();
            $formattedErrors = [];

            foreach ($errors as $field => $messages) {
                $formattedErrors[$field] = $messages[0];
            }

            return response()->json($formattedErrors, 422);
        }

        $validatedData = $validator->validated();

        $user->update($validatedData);

        return response()->json([
            'message' => 'Profile updated successfully',
            'user' => $user,
        ]);
    }

    public function ChangeBirthday(Request $request) {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'birthday' => 'nullable|string|max:50|date_format:m-d-Y',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->toArray();
            $formattedErrors = [];

            foreach ($errors as $field => $messages) {
                $formattedErrors[$field] = $messages[0];
            }

            return response()->json($formattedErrors, 422);
        }

        $validatedData = $validator->validated();

        $user->update($validatedData);

        return response()->json([
            'message' => 'Profile updated successfully',
            'user' => $user,
        ]);
    }

    public function ChangePronuons(Request $request) {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'pronouns' => 'nullable|string|max:50',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->toArray();
            $formattedErrors = [];

            foreach ($errors as $field => $messages) {
                $formattedErrors[$field] = $messages[0];
            }

            return response()->json($formattedErrors, 422);
        }

        $validatedData = $validator->validated();

        $user->update($validatedData);

        return response()->json([
            'message' => 'Profile updated successfully',
            'user' => $user,
        ]);
    }

    public function ChangeEmail(Request $request) {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|unique:users'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->toArray();
            $formattedErrors = [];

            foreach ($errors as $field => $messages) {
                $formattedErrors[$field] = $messages[0];
            }

            return response()->json($formattedErrors, 422);
        }

        $validatedData = $validator->validated();

        $user->update($validatedData);

        return response()->json([
            'message' => 'Profile updated successfully',
            'user' => $user,
        ]);
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'password' => $this->passwordRules(),
            'password_confirmation' => $this->passwordRules(),
        ]);


        if ($validator->fails()) {
            $errors = $validator->errors()->toArray();
            $formattedErrors = [];

            foreach ($errors as $field => $messages) {
                $formattedErrors[$field] = $messages[0];
            }

            return response()->json($formattedErrors, 422);
        }

        $validatedData = $validator->validated();

        $user->update($validatedData);

        return response()->json([
            'message' => 'Profile updated successfully',
            'user' => $user,
        ]);
    }

    protected function passwordRules()
    {
        return ['required', 'string', new Password, 'confirmed', 'max:20'];
    }

    public function updateIcon(Request $request)
    {
        //dd($request->photo);
        $user = Auth::user();

        Validator::make($request->all(), [
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
        ])->validateWithBag('updateProfileInformation');


        if ($request->hasFile('photo')) {
            $user->updateProfilePhoto($request->photo);
        }
    }
}
