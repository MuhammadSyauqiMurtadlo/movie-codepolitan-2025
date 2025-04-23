<?php

namespace App\View\Composers;

class MenuComposer
{
    public function compose($view)
    {
        $menu = [
            'Home' => '/',
            'About' => '/about',
            'Contact' => '/contact',
        ];

        $authenticated = true; // Simulate authentication status

        if ($authenticated) {
            $menu = array_merge($menu, [
                'Profile' => '/profile',
                'Settings' => '/settings',
                'Logout' => '/logout',
            ]);
        }

        $view->with('menu', $menu);
    }
}
