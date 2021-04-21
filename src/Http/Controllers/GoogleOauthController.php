<?php namespace Tipoff\GoogleApi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Tipoff\GoogleApi\Facades\GoogleOauth;

class GoogleOauthController extends Controller
{
    public function redirect(Request $request)
    {
        return GoogleOauth::setScopes($request->get('scopes'))->redirect(
            $request->get('identifier'),
            $request->get('home_url')
        );
    }

    public function handleCallback(Request $request)
    {
        GoogleOauth::makeAccessToken();

        $homeUrl = session('google_oauth_home_url', '/');

        $request->session()->forget('google_oauth_home_url');

        return redirect()->to($homeUrl);
    }

    public function logout()
    {
        GoogleOauth::flushAccessToken();

        return redirect()->back();
    }
}
