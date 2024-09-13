<?php

namespace App\Http\Controllers;

use Corbado\Exceptions\AssertException;
use Corbado\Exceptions\ConfigException;
use Illuminate\Http\Request;
use Corbado;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

class ProfileController extends Controller
{
    protected $CorbadoSDK;

    /**
     * @throws ConfigException
     * @throws AssertException
     */
    public function __construct()
    {
        $jwksCache = new FilesystemAdapter();
        $config = new Corbado\Config(env("CORBADO_PROJECT_ID"), env("CORBADO_API_SECRET"), env("CORBADO_FRONTEND_API"), env("CORBADO_BACKEND_API"));
        $config->setJwksCachePool($jwksCache);
        $this->CorbadoSDK = new Corbado\SDK($config);
    }

    public function showProfile(Request $request)
    {
        try {
            $user = $this->CorbadoSDK->sessions()->getCurrentUser();
        } catch (\Exception $e) {
            error_log($e);
            return redirect('/')->withErrors('Unable to retrieve user information.');
        }

        return view('profile', ['user' => $user]);
    }
}
