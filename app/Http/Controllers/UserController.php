<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function update(UpdateUserRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        if (request()->file('thumbnail') != null) {
            $validated['thumbnail'] =  url('storage/' . request()->file('thumbnail')->store('thumbnails'));

        }

        $user = User::find(auth()->user()->id);

        $user->update($validated);


        return redirect()->back();
    }
}
