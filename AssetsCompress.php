<?php
/**
 * @link http://www.iisns.com/
 * @copyright Copyright (c) 2015 iiSNS
 * @license http://www.iisns.com/license/
 */

namespace iisns\assets;

use yii\base\BootstrapInterface;
use yii\base\Application;

/**
 * @author Shiyang <dr@shiyang.me>
 */
class AssetsCompress implements BootstrapInterface
{
    public function bootstrap($app)
    {
        $app->on(Application::EVENT_BEFORE_REQUEST, function () {
             // do something here
        });
    }
}
