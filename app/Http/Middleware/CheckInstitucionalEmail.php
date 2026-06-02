<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;

class CheckInstitucionalEmail
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = User::first();

        // checar la terminación del correo electronico
        if ($user && str_contains($user->email, '@aguascalientes.tecnm.mx') ) {
            return $next($request);
        }

        // sin acceso
        abort(403, 'Acceso denegado: Este repositorio es exclusivo para alumnos con correo institucional del ITA.');
    }
}