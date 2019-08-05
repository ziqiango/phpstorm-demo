<?php
/**
 * Created by PhpStorm.
 * User: zhuzq
 * Date: 2019/8/5
 * Time: 15:15
 */

namespace Testst;

use app\controllers\Index;
use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{

    public function testIndex()
    {
        $index = new Index();
        $this->assertEquals($index->index(), 'index');
    }
}