<?php

namespace app\models;

use Yii;


class MyList extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'list';
    }

    public static function getAll()
    {
        $data = self::find()->all();
        return $data;
    }

    public static function getOne()
    {
        $data = self::find()->where(['id'=>1])->one();
        return $data;
    }
}