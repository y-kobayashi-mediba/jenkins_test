<?php
namespace app\models;

use yii\db\ActiveRecord;

class AdminUser extends ActiveRecord
{
    /**
     * @return string このアクティブレコードクラスと関連付けられるテーブルの名前
     */
    public static function tableName()
    {
        return 'admin_user';
    }

    public function getUserById($id=1)
    {
        return AdminUser::find()->where(['id' => $id])->one();
     }

    public function getSubUser()
    {
        return $this->hasOne(SubUser::className(), ['id' => 'id']);
     }
}