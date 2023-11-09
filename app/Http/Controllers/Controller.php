<?php

namespace App\Http\Controllers;

use Firebase\JWT\JWK;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


public function profile(Request $request)
{
    $projectID = env('CORBADO_PROJECT_ID');
    $apiSecret = env('CORBADO_API_SECRET');
    $jwksCache = new \Symfony\Component\Cache\Adapter\FilesystemAdapter();
    $config = new \Corbado\Configuration($projectID, $apiSecret);
    $config->setJwksCachePool($jwksCache);
    $corbado = new \Corbado\SDK($config);

    $user = $corbado->sessions()->getCurrentUser();

    if ($user->isAuthenticated() === false) {
        return redirect('/');
    }

    $user_id = $user->getID();
    $user_name = $user->getName();
    $user_email = $user->getEmail();

    return view('profile', [
        'user_id' => $user_id,
        'user_name' => $user_name,
        'user_email' => $user_email,
    ]);
}
}
