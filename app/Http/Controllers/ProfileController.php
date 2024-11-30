<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{


    public function index()
    {
        $user = auth()->user()->load([
            'wishlist.product' => function($query) {
                $query->select('id', 'name', 'price', 'image', 'discounted_price');
            },
            'cart.product' => function($query) {
                $query->select('id', 'name', 'price', 'image', 'discounted_price');
            }
        ]);

        return view('profile.index', compact('user'));
    }

    public function updatePicture(Request $request)
    {
        $validated = $request->validate([
            'profile_picture' => [
                'required',
                'image',
                'mimes:jpeg,png,jpg',
                'max:2048', // 2MB max
                'dimensions:min_width=100,min_height=100,max_width=2000,max_height=2000'
            ]
        ]);

        try {
            DB::beginTransaction();

            $user = auth()->user();
            
            // Delete old profile picture if exists
            if ($user->profile_picture) {
                Storage::disk('public')->delete($user->profile_picture);
            }

            // Generate unique filename
            $filename = 'profile-' . $user->id . '-' . time() . '.' . 
                $request->file('profile_picture')->getClientOriginalExtension();
            
            // Store new profile picture
            $path = $request->file('profile_picture')->storeAs(
                'profile-pictures',
                $filename,
                'public'
            );
            
            $user->update([
                'profile_picture' => $path
            ]);

            DB::commit();
            return back()->with('success', 'Profile picture updated successfully!');

        } catch (\Exception $e) {
            DB::rollBack();
            \Log::error('Profile picture update failed: ' . $e->getMessage());
            return back()
                ->with('error', 'Failed to update profile picture. Please try again.')
                ->withInput();
        }
    }
} 