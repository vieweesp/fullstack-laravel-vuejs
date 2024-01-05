<?php

namespace App\Http\Middleware;

use App\Constants\Heroicons;
use App\Services\Frontend\UIElements\SidebarItems\SidebarHelloUser;
use App\Services\Frontend\UIElements\SidebarItems\SidebarLink;
use App\Services\Frontend\UIElements\SidebarItems\SidebarSeparator;
use App\Services\Frontend\SidebarGenerator;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HandleBackOfficeRequests
{

    public function handle(Request $request, Closure $next): Response
    {
        view()->share('user', [
            'user_id' => $request->user()->user_id,
            'name' => $request->user()->name,
            'email' => $request->user()->email,
            'logout_url' => route('logout'),
        ]);

        view()->share('sidebarNavItems', [

        ]);

        return $next($request);
    }
}
