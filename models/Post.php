<?php
namespace app\models;

use yii\db\ActiveRecord;

class Post extends ActiveRecord
{
    /**
     * @return string このアクティブレコードクラスと関連付けられるテーブルの名前
     */
    public static function tableName()
    {
        return 'post';
    }

    public function getPostByPostCode($postCode='p01')
    {
        return Post::find()->where(['post_code' => $postCode])->one();
    }

}
