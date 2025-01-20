<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $users = User::with(['farms', 'roles'])
            ->whereHas('roles', function ($query) {
                $query->where('name', 'farmer');
            })
            ->get();
        $users->each(function ($user) {
            $user->avatar = $user->getFilamentAvatarUrl();
        });


        return Inertia::render('Profil', [
            'users' => $users,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): Response
    {
        $UserWithRelations = User::with(['farms'])
            ->where('id', $user->id)
            ->first();
        $UserWithRelations->avatar = $UserWithRelations->getFilamentAvatarUrl();

        return Inertia::render('DetailProfil', [
            'user' => $UserWithRelations,
        ]);
    }
}
