<?php
/*
 *  Last Modified: 6/28/21, 11:18 PM
 *  Copyright (c) 2021
 *  -created by Ariful Islam
 *  -All Rights Preserved By
 *  -If you have any query then knock me at
 *  arif98741@gmail.com
 *  See my profile @ https://github.com/arif98741
 */

namespace Xenon\Webp;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Xenon\Webp\Log\Log;

class WebpServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     * @version v1.0.32
     * @since v1.0.31
     */
    public function register()
    {
      /*  $this->app->bind('LaravelBDSms', function () {

            $provider = config('sms.default_provider');

            $sender = Sender::getInstance();
            $sender->setProvider($provider);
            $sender->setConfig(config('sms.providers')[$provider]);
            return new SMS($sender);
        });*/

    }

    /**
     * Bootstrap services.
     *
     * @return void
     * @version v1.0.32
     * @since v1.0.31
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/config/webp.php' => config_path('webp.php'),
        ], 'config');
    }
}
