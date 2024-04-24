<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function profile()
    {
        $user = User::find(auth()->user()->id);
        return view('frontend.profile', compact('user'));
    }

    public function editProfile()
    {
        $user = User::find(auth()->user()->id);
        return view('frontend.editProfile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'contact' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'current_password' => 'nullable|string|min:6', // Current password is now optional
            'new_password' => 'nullable|string|min:6|different:current_password', // New password is now optional
        ]);

        // Update the user's information
        $user = User::find(auth()->id());
        $user->name = $request->name;
        $user->email = $request->email;
        $user->contact = $request->contact;
        $user->address = $request->address;
        $user->description = $request->description;

        // Check if both current and new passwords are provided
        if ($request->filled('current_password') && $request->filled('new_password')) {
            // Verify if the current password matches the user's current password
            if (!Hash::check($request->current_password, $user->password)) {
                return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect.']);
            }
            // Update the password with the hashed new password
            $user->password = Hash::make($request->new_password);
        }

        // Handle profile image upload if provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->move('images/user', $fileName);
            $user->image = 'images/user/' . $fileName;
        }

        $user->update();

        // Redirect back with success message
        return redirect('/profile')->with('message', 'Profile updated successfully.');
    }


    public function booking()
    {
        $bookings = Booking::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->get();
        return view('frontend.booking', compact('bookings'));
    }
}
