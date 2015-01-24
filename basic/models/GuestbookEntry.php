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
     * Captcha vefication
     * 
     * @var string
     */
    public $verification;

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [["email", "name", "message", "verification"], "required"],
            ["email", "email"],
            ["verification", "captcha"]
        ];
    }
}