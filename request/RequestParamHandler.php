<?php
/**
 * @link https://github.com/consik/yii2-features
 * @package consik\yii2features\request
 *
 * @author Sergey Poltaranin <consigliere.kz@gmail.com>
 * @copyright Copyright (c) 2017
 */
namespace consik\yii2features\request;


use yii\base\Behavior;

/**
 * Class RequestParamHandler
 * Handles request GET params and sets specified owner properties
 *
 * public function behaviors()
 * {
 *     return [
 *         [
 *              'class' => consik\yii2features\request\RequestParamHandler::class,
 *              'params' => ['property', 'GetParam' => 'property2']
 *         ],
 *     ];
 * }
 * @package app\components
 */
class RequestParamHandler extends Behavior
{
    /**
     * Array of params for handling
     * If key specified it will be used as GET parameter name.
     * Value of array is a name of Component property to be set
     * @var array
     */
    public $params = [];

    /**
     * @inheritdoc
     */
    public function attach($owner)
    {
        parent::attach($owner);
        foreach ($this->params as $alias => $param) {
            $alias = is_string($alias) ? $alias : $param;
            if ($value = \Yii::$app->request->get($alias)) {
                $this->owner->{$param} = $value;
            }
        }
    }
}