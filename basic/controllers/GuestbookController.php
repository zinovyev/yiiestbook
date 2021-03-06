<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\helpers\Url;
use app\models\GuestbookEntry;

/**
 * Controller GuestbookController.
 * 
 * @author Ivan Zinovyev <vanyazin@gmail.com>
 */
class GuestbookController extends Controller
{
    /**
     * Filters
     * 
     * @return array
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Build actions
     * 
     * @return array
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Guestbook messages list
     * 
     * @return string
     */
    public function actionIndex()
    {
        $query = GuestbookEntry::find();

        $pagination = new Pagination([
            'defaultPageSize'   => 10,
            'totalCount'        => $query->count(),
        ]);

        $entries = $query->orderBy('id desc')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all()
        ;

        $title = $pagination->getPage()
            ? sprintf('#%d', $pagination->getPage() + 1)
            : ''
        ;

        return $this->render(
            'index',
            [
                'title'         => $title,
                'entries'       => $entries,
                'pagination'    => $pagination,
            ]
        );
    }

    /**
     * Guestbook form
     * 
     * @return string
     */
    public function actionForm()
    {
        $guestbook = new GuestbookEntry();

        if ($guestbook->load(Yii::$app->request->post()) && $guestbook->validate()) {
            $guestbook->created = (new \DateTime('now'))->format('Y-m-d H:i:s');
            $guestbook->save(false);
            $headers = Yii::$app->response->headers;
            $headers->set('Refresh', '5;url=' . Url::to(['guestbook/index']));

            return $this->render(
                'confirm',
                [
                    'title'     => 'New post successfully added!',
                    'guestbook' => $guestbook,
                ]
            );
        } else {

            return $this->render(
                'form',
                [
                    'title'     => 'New post',
                    'guestbook' => $guestbook,
                ]
            ); 
        }
    }
}