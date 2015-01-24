<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\GuestbookEntry;

/**
 * Controller GuestbookController.
 * 
 * @author Ivan Zinovyev <vanyazin@gmail.com>
 */
class GuestbookController extends Controller
{
    /**
     * Guestbook form
     * 
     * @return string
     */
    public function actionIndex()
    {
        $guestbook = new GuestbookEntry();

        if ($guestbook->load(Yii::$app->request->post()) && $guestbook->validate()) {

            return $this->render("confirm", ["guestbook" => $guestbook]);
        } else {

            return $this->render("form", ["guestbook" => $guestbook]); 
        }
    }
}