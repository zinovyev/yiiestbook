<?php
namespace app\models;

use yii\db\ActiveRecord;

/**
 * Model Guestbook.
 * Store guestbook records.
 * 
 * @author Ivan Zinovyev <vanyazin@gmail.com>
 */
class GuestbookEntry extends ActiveRecord
{
    /**
     * @return array
     */
    public function rules()
    {
        return [
            [["email", "name", "message"], "required"],
            ["email", "email"],
        ];
    }
}