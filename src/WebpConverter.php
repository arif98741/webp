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


use Exception;
use Illuminate\Support\Facades\File;
use Xenon\Webp\Handler\RenderException;
use Xenon\Webp\Provider\AbstractProvider;

class WebpConverter
{
    /**
     * @var AbstractProvider
     */
    private $provider;

    /**
     * @var
     */
    private $config;

    /**
     * @var string
     */
    public string $url;
    /**
     * @var
     */
    public $method;

    /**
     * @var WebpConverter|null
     */
    private static $instance = null;

    /*
    |------------------------------------------------------------------------------------------
    | Instance of Webp class
    |------------------------------------------------------------------------------------------
    |
    */

    /**
     * @throws RenderException
     */
    public static function getInstance(): WebpConverter
    {
        if (!File::exists(config_path('webp.php'))) {
            throw new RenderException("something wrong");
        }

        if (!isset(self::$instance)) {
            self::$instance = new self;
        }

        return self::$instance;
    }


    /**
     * @return mixed
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @param mixed $config
     * @return WebpConverter
     * @throws Exception
     * @since v1.0.0
     */
    public function setConfig($config): WebpConverter
    {
        $this->config = $config;
        return $this;
    }

}
