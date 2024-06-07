<?php

namespace App\Http\Controllers;

use App\Http\Controller;
use App\Models\User;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use SocialiteProviders\Manager\OAuth2\User as DiscordUser;
use Throwable;

class AuthController extends Controller
{
    /**
     * When user want log in, we send user here for generate right link and redirect to it.
     *
     * @return RedirectResponse
     */
    public function redirect(): RedirectResponse
    {
        return Socialite::driver('discord')->redirect();
    }

    /**
     * When user on Discord site authorize our app, Discord redirects user here.
     *
     * @return RedirectResponse
     */
    public function comeback(): RedirectResponse
    {
        try {
            /** @var DiscordUser $discordUser */
            $discordUser = Socialite::driver('discord')->user();

            $user = User::findByDiscordId($discordUser->id);
            if ( ! $user) {
                $user = User::create([
                    'name'                  => $discordUser->name,
                    'email'                 => $discordUser->email,
                    'discord_id'            => $discordUser->id,
                    'discord_token'         => $discordUser->token,
                    'discord_refresh_token' => $discordUser->refreshToken,
                    'discord_avatar'        => $discordUser->avatar,
                    'password'              => '_generated:' . Str::random(),
                ]);
            } else {
                $user->update([
                    'discord_token'         => $discordUser->token,
                    'discord_refresh_token' => $discordUser->refreshToken,
                    'discord_avatar'        => $discordUser->avatar,
                ]);
            }

            Auth::login($user);

        } catch (ClientException) {
            return redirect('/')->with(
                'warning',
                __('messages.Failed to login') . ': ' . __('messages.Can\'t get Discord token')
            );
        } catch (Throwable $exception) {
            report($exception);

            return redirect('')->with(
                'error',
                __('messages.Failed to login') . ': ' . __('messages.Internal server error')
            );
        }

        return redirect('/');
    }
}
