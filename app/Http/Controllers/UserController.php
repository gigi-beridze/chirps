<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class UserController extends Controller
{
    public function index(): Response {
        return Inertia::render('UsersList/Index', [
            'users' => User::all(),
        ]);    
    }
    public function create()
    {
        //
    }

    // public function store(Request $request): RedirectResponse {
    //     $validated = $request->validate([
    //         'message' => 'required|string|max:255',
    //     ]);
    //     $request->userInertia()->chirps()->create($validated);
 
    //     return redirect(route('chirps.index'));
    // }

    /**
     * Display the specified resource.
     */
    public function show(User $chirp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $chirp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Chirp $chirp): RedirectResponse
    // {
    //     $this->authorize('update', $chirp);
    //     $validated = $request->validate([
    //         'message' => 'required|string|max:255',
    //     ]);
    //     $chirp->update($validated);
 
    //     return redirect(route('chirps.index'));
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): RedirectResponse
    {
        $this->authorize('delete', $user);
        $user->delete();
 
        return redirect(route('users.index'));
    }
}
