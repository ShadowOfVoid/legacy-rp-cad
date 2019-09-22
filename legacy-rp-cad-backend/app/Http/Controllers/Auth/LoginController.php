<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use kanalumaddela\LaravelSteamLogin\Http\Controllers\AbstractSteamLoginController;
use kanalumaddela\LaravelSteamLogin\SteamUser;

/**
 * A login controller to authenticate with steam.
 *
 * @package App\Http\Controllers\Auth
 */
class LoginController extends AbstractSteamLoginController
{

    /**
     * Where to redirect after login if none is provided.
     *
     * @var string
     */
    protected $redirectTo = '/app/callback#';

    /**
     * {@inheritdoc}
     */
    public function authenticated(Request $request, SteamUser $steam) : RedirectResponse
    {
        // Get or create the authenticating user from their steam details.
        $user = $this->get_or_create_user($steam);

        return response()->redirectTo($this->redirectTo . 'access_token=' . $user->api_token);
    }

    /**
     * Gets or creates a new user based on the provided steam profile.
     *
     * @param SteamUser $steam The steam profile.
     * @return User
     */
    protected function get_or_create_user(SteamUser $steam) : User
    {
        // Attempt to find the user and return them if found, otherwise create.
        $user = User::where('account_id', $steam->steamId)->first();
        return $user ? $user : $this->create_user($steam);
    }

    /**
     * Creates a new user from the provided steam profile.
     *
     * @param SteamUser $steam The steam profile.
     * @return User
     */
    protected function create_user(SteamUser $steam) : User
    {
        // Make sure to fetch the steam user information.
        $steam->getUserInfo();

        return User::create([
            'account_id' => $steam->steamId,
            'name' => $steam->name,
            'avatar' => $steam->avatar,
            'api_token' => Str::random(60)
        ]);
    }

}
