<?php namespace Xenon\Webp\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Xenon\Webp\SMS via(string $provider)
 * @method static mixed shoot(string $mobile, string $text)
 * @method static mixed shootWithQueue(string $number, string $text, string $queueName, int $tries, int $backoff)
 *
 * @see \Xenon\Webp\SMS
 */
class Webp extends Facade
{
    /**
     * @return string
     * @version v1.0.32
     * @since v1.0.31
     */
    protected static function getFacadeAccessor(): string
    {
        return 'LaravelBDSms';
    }
}
