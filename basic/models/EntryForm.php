<?php
namespace app\models;

use yii\base\Model;

/**
 * Model EntryForm.
 * 
 * @author  Ivan Zinovyev <vanyazin@gmail.com>
 */
class EntryForm extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $email;

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [["name", "email"], "required"],
            ["email", "email"],
        ];
    }
}