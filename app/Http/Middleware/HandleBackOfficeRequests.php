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
    public function __construct(protected readonly SidebarGenerator $sidebarGenerator)
    {
    }

    public function handle(Request $request, Closure $next): Response
    {
        view()->share('user', [
            'user_id' => $request->user()->user_id,
            'name' => $request->user()->name,
            'email' => $request->user()->email,
            'logout_url' => route('logout'),
        ]);

        view()->share('sidebarNavItems', $this->sidebarGenerator
            ->addSidebarItem(new SidebarHelloUser())
            ->addSidebarItem(
                new SidebarLink(
                    text: 'Dashboard',
                    href: route('backoffice.dashboard.index'),
                    iconComponent: Heroicons::HOME,
                    current: request()->routeIs('backoffice.dashboard.index'),
                )
            )->addSidebarItem(new SidebarSeparator())
            ->addSidebarItem(
                new SidebarLink(
                    text:__('Cerrar sesi�n'),
                    href: route('logout'),
                    iconComponent: Heroicons::LOGOUT,
                    current: false,
                )
            )
        );

        return $next($request);
    }
}
