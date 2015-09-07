<?php
namespace tests\codeception\unit\models;

use yii\codeception\DbTestCase;
use tests\codeception\fixtures\PostFixture;
use app\models\Post;

class PostTest extends DbTestCase
{
    public function fixtures()
    {
        return [
            'post' => PostFixture::className(),
        ];
    }

    /**
     * @dataProvider additionProvider
     */
    public function testgetAllPost($postCode)
    {
        $model = new Post();
        $post = $model->getPostByPostCode($postCode);

        $this->assertEquals($this->post[$postCode]["title"],$post["title"]);
    }

     public function additionProvider()
    {
        return [
            ['p01'],
            ['p02'],
            ['p03'],
            ['p04'],
            ['p05'],
            ['p06'],
            ['p07'],
            ['p08'],
            ['p11'],
            ['p12'],
            ['p13'],
            ['p14'],
            ['p15'],
            ['p16'],
            ['p17'],
            ['p21'],
            ['p22'],
            ['p23'],
            ['p24'],
            ['p25'],
            ['p26'],
            ['p27'],
            ['p31'],
            ['p32'],
            ['p33'],
            ['p34'],
            ['p35'],
            ['p36'],
            ['p37'],
            ['p41'],
            ['p42'],
            ['p43'],
            ['p44'],
            ['p45'],
            ['p46'],
            ['p47'],
            ['p91'],
            ['p92'],
            ['p93'],
            ['p94'],
            ['p95'],
            ['p96'],
            ['p97'],
        ];
    }
}