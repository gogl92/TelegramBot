<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title = 'Telegram Bot Studio';
?>
<div class="site-index">

    <div class="jumbotron">
        <img src="images/logo.png">
        <h1>Telegram Bot Studio</h1>

        <p class="lead">SUOI International</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Telegram Bot Studio</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Dream</h2>

                <p>With this powerful tool you can easily make applications for mobile (IO's, Android, Windows Phone) and computers with  Mac, Linux or Windows O.S.
                    Telegram Bot Studio is designed for entremprenur and developers to make validations of apps ideas, if you have for example an idea of application 
                    to sell but you are not completely sure about how it will be recieved by the users you can create a bot and test it with real users.</p>
                    <p>If you are a developer you can add your custom apis to the studio, so people can add more features to their bot testing like linking with a 
                        Music service, or a phone service or creating your own api.</p>

                        <p><?= Html::a('Read More &raquo;', ['/site/about'], ['class'=>'btn btn-default']) ?></p>
            </div>
            <div class="col-lg-4">
                <h2>Create</h2>

                <p>This studio try to make it easy for entrepreneurs and developers, you just need to have a Telegram account and then you can start making your bots.</p>
                <p>For example if you want to make an application that will notice your players and fans of the schedule, video news and more of your football local 
                    team, you will be able to add the media of your time and schedule notifications.</p>
                <p>If you are a developer we will enjoy working together, new stuff is comming and integration of the Internet with the real life, so you can fusion a
                bot with Arduino, Raspberry or other platforms to make automatization. We will provied already integration with some API's like Facebook, Twitter, Teleduino
                Spotify and more.</p>

                        <p><?= Html::a('Start Developing &raquo;', ['/bot/index'], ['class'=>'btn btn-default']) ?></p>
            </div>
            <div class="col-lg-4">
                <h2>Share</h2>
                <p>Now its time to spread to the world your idea, have opinion for real users, read reviews and take control of process in real time online.</p>
                        <p><?= Html::a('Share bots &raquo;', ['/site/sharebots'], ['class'=>'btn btn-default']) ?></p>
            </div>
        </div>

    </div>
</div>