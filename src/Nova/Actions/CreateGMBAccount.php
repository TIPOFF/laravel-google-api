<?php

namespace Tipoff\GoogleApi\Nova\Actions;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Tipoff\GoogleApi\Facades\GoogleOauth;
use Tipoff\GoogleApi\GoogleServices;

class CreateGMBAccount extends Action
{
    use InteractsWithQueue;
    use Queueable;

    public $name = 'Create GMB Account';

    public $standalone = true;

    /**
     * Perform the action on the given models.
     *
     * @param  \Laravel\Nova\Fields\ActionFields  $fields
     * @return mixed
     */
    public function handle(ActionFields $fields)
    {
        $accessToken = GoogleOauth::accessToken('my-business');

        /** @var GoogleServices $googleServices */
        $googleServices = app(GoogleServices::class);
        $googleServices->setAccessToken($accessToken);

        dd($googleServices->myBusiness()->accounts);
    }

    /**
     * Get the fields available on the action.
     *
     * @return array
     */
    public function fields()
    {
        return [];
    }
}
