<?php
/**
 * @link https://github.com/consik/yii2-features
 * @package consik\yii2features\request
 *
 * @author Sergey Poltaranin <consigliere.kz@gmail.com>
 * @copyright Copyright (c) 2017
 */
namespace consik\yii2features\request;


use yii\base\ActionFilter;
use yii\web\Response;

/**
 * Class ResponseFormat
 * ```php
 * public function behaviors()
 * {
 *     return [
 *         [
 *              'class' => consik\yii2features\request\ResponseFormat::class,
 *              'only' => ['index'],
 *              'format' => yii\web\Response::FORMAT_JSON
 *         ],
 *     ];
 * }
 */
class ResponseFormat extends ActionFilter
{
    /**
     * @var string Response format which must be supported
     * as declared in [[\yii\web\Response::formatters]].
     */
    public $format = Response::FORMAT_HTML;
    /**
     * @var \yii\web\Response
     */
    public $response;

    /**
     * @inheritdoc
     */
    public function beforeAction($action)
    {
        $response = $this->response ?: \Yii::$app->response;
        $response->format = $this->format;
        return parent::beforeAction($action);
    }
}