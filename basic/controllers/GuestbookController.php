<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\GuestbookEntry;

/**
 * Controller GuestbookController.
 * 
 * @author Ivan Zinovyev <vanyazin@gmail.com>
 */
class GuestbookController extends Controller
{
    /**
     * Guestbook messages list
     * 
     * @return string
     */
    public function actionIndex()
    {
        $query = GuestbookEntry::find();

        $pagination = new Pagination([
            "defaultPageSize"   => 5,
            "totalCount"        => $query->count(),
        ]);

        $entries = $query->orderBy("id")
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all()
        ;

        return $this->render(
            "index",
            [
                "entries"       => $entries,
                "pagination"    => $pagination,
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
            $guestbook->save(false);

            return $this->render("confirm", ["guestbook" => $guestbook]);
        } else {

            return $this->render("form", ["guestbook" => $guestbook]); 
        }
    }
}