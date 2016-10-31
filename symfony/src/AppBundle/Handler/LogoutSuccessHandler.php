<?php

namespace App\DefaultBundle\Handler;

use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class LogoutSuccessHandler extends ContainerAwareInterface implements LogoutSuccessHandlerInterface
{
    public function onLogoutSuccess(Request $request)
    {
    	$session = $request->getSession();
        $target_url = $session->get("current_url")
                      ? $session->get("current_url")
                      : "/";
        return new RedirectResponse($target_url);
    }
}
