<?php
/**
 * @link https://github.com/consik/yii2-features
 * @package consik\yii2features\request
 *
 * @author Sergey Poltaranin <consigliere.kz@gmail.com>
 * @copyright Copyright (c) 2017
 */
namespace consik\yii2features\components\console;
use yii\base\ErrorException;

/**
 * Class ErrorHandler
 *
 * For using configure errorHandler component in yii2 config file:
 * 'components' => [
 *      ...
 *      'errorHandler' => [
 *          'class' => consik\yii2features\components\console\ErrorHandler::class
 *      ]
 *      ...
 * ]
 *
 * @package consik\yii2features\request
 */
class ErrorHandler extends \yii\console\ErrorHandler
{
    protected $fatalErrorHandlers = [];

    /**
     * @inheritdoc
     */
    public function handleFatalError()
    {
        $error = error_get_last();
        if (ErrorException::isFatalError($error)) {
            foreach ($this->fatalErrorHandlers as $handler) {
                call_user_func_array($handler[0], $handler[1]);
            }
        }
        return parent::handleFatalError();
    }

    /**
     * Register your own fatal error handler
     * @param callable $handler
     * @param array $params
     */
    public function registerFatalErrorHandler(callable $handler, array $params = [])
    {
        $this->fatalErrorHandlers[] = [$handler, $params];
    }
}