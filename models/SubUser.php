<?php
namespace app\models;

use yii\db\ActiveRecord;

class SubUser extends ActiveRecord
{
    /**
     * @return string このアクティブレコードクラスと関連付けられるテーブルの名前
     */
    public static function tableName()
    {
        return 'sub_user';
    }

    public function getUserById($id=1)
    {
        return SubUser::find()->where(['id' => $id])->one();
     }

}