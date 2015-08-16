<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title = 'Telegram Bot Studio';
?>
<div class="site-index">

    <div class="jumbotron">

        <p class="lead">Start Page</p>


    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-6">
                <h2>Entrepreneur</h2>

                <p>Create your applications and fusion them with services like spotify or facebook, instagram and also you can create your custom services.</p>

                        <p><?= Html::a('Read More &raquo;', ['/site/startup'], ['class'=>'btn btn-default']) ?></p>
            </div>
            <div class="col-lg-6">
                <h2>Developers</h2>
                <p>If you are a developer we will enjoy working together, new stuff is comming and integration of the Internet with the real life, so you can fusion a
                bot with Arduino, Raspberry or other platforms to make automatization. We will provied already integration with some API's like Facebook, Twitter, Teleduino
                Spotify and more.</p>

                        <p><?= Html::a('Start Developing &raquo;', ['/site/developers'], ['class'=>'btn btn-default']) ?></p>
            </div>
        </div>

    </div>
</div>