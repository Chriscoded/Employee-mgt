<?php

namespace App\Http\Controllers\Auth;

trait CustomRedirectsUsers
{
    public function customRedirectPath()
    {
        // Your custom redirection logic goes here
        // For example, redirect admins to /admin/dashboard
        // and others to the default /home route.
        if (auth()->user()->role == 'admin') {
            return '/dashboard';
        } elseif (auth()->user()->role == 'employee') {
            return '/employee';
        }

        return '/home'; // Default redirect path for other users

        return '/home'; // Default redirect path for other users
    }
}
