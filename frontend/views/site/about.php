<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-md-9 topic">
    <div class="panel panel-default">
        <div class="panel-heading">
            <?= Html::encode($this->title) ?>
        </div>
        <div class="panel-body tag-cloud">
            <p>This is the About page. You may modify the following file to customize its content:</p>
            <code><?= __FILE__ ?></code>
        </div>
        <div class="panel-footer text-right">
                <span class="index_count">11111111111111111111111</span>
        </div>
    </div>
</div>
<div class="col-md-3 side-bar p0">

    <div class="panel panel-default corner-radius">


        <div class="panel-body text-center">
            <div class="btn-group">
                <a class="btn btn-success" href="/topic/default/create?id=id">发布新帖</a>                </div>
        </div>
    </div>

    <div class="panel panel-default corner-radius">
        <div class="panel-heading text-center">
            <h3 class="panel-title">小贴士</h3>
        </div>
        <div class="panel-body">
            <p>珍惜生命，远离百度搜索。<a href="/topic/default/view/15">我有一万种方法上谷歌</a>。</p>
        </div>
    </div>

    <div class="panel panel-default corner-radius">
        <div class="panel-heading text-center">
            <h3 class="panel-title">友情链接</h3>
        </div>
        <div class="panel-body text-center" style="padding-top: 5px;">
            <a class="list-group-item" href="http://www.yiichina.com/" title="yiichina" target="_blank"><img src="http://www.yiichina.com/images/logo.png" alt=""></a><a class="list-group-item" href="http://www.yii-china.com" title="Yii 中文网" target="_blank"><img src="http://www.yii-china.com/images/logo.png" alt=""></a><a class="list-group-item" href="https://www.my-yii.com/" title="My Yii" target="_blank"><img src="http://ww1.sinaimg.cn/large/4cc5f9b3jw1f26l8exdecj206x028mx4.jpg" alt=""></a><a class="list-group-item" href="https://yiigist.com/" title="yiigist" target="_blank"><img src="http://ww3.sinaimg.cn/large/4cc5f9b3jw1f26l9998toj206001vmx3.jpg" alt=""></a><a class="list-group-item" href="http://yii2.techbrood.com/guide-index.html" title="Yii 2.0权威指南" target="_blank"><img src="http://s.techbrood.com/themes/techbrood/image/logo_45.png" alt=""></a>            </div>
    </div>

    <div class="panel panel-default corner-radius">
        <div class="panel-heading text-center">
            <h3 class="panel-title">推荐资源</h3>
        </div>
        <div class="panel-body side-bar">
            <ul class="list">
                <li><a href="http://www.digpage.com/">深入理解Yii2.0</a></li><li><a href="http://www.phpcomposer.com/">Composer 中文文档</a></li><li><a href="https://github.com/PizzaLiu/PHP-FIG">PHP-FIG 编程规范中文</a></li><li><a href="http://laravel-china.github.io/php-the-right-way/">PHP The Right Way 中文版</a></li><li><a href="https://github.com/forecho/awesome-yii2">awesome-yii2（Yii2 干货）</a></li><li><a href="http://phptrends.com/">上升最快的 PHP 类库</a></li><li><a href="http://www.book.php.code.kekou.de/">Hacking with PHP</a></li><li><a href="http://pkg.phpcomposer.com/">Packagist / Composer 中国全量镜像</a></li><li><a href="http://cookbook.getyii.com/"> Yii 2.0 Cookbook 中国翻译版</a></li>            </ul>
        </div>
    </div>






</div>