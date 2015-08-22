<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\SignupForm;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\TelegramBot;
use app\models\ReplyKeyboardMarkup;
use app\models\Bot;
use app\models\Command;
use app\models\Audio;
use app\models\WebHook;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
	/**
	 * Designed to chose between the Dev site and the entreprenur site.
	 */
    public function actionStart()
    {
        return $this->render('start');
    }
	/**
	 * Function that renders a dashboard to controll evrything in the bot/app 
	 */
	public function actionStartup()
    {
    	$bot = new Bot();
		$command = new Command();
		$audio = new Audio();
        if ($bot->load(Yii::$app->request->post()) && $bot->save()) {
            return $this->redirect(['view', 'id' => $bot->id_bot]);
        } else {
            return $this->render('startup', [
                'bot' => $bot, 'command' => $command, 'audio'=>$audio
            ]);
        }
    }
	/**
	 * Function that renders the dashboard to CRUD the Apis-
	 */
	public function actionDevelopers()
    {
        return $this->render('developers');
    }
	
	/**
	 * Main page.
	 */
    public function actionIndex()
    {
        return $this->render('index');
    }
    
	/**
	 * Just for testing
	 */   
	public function actionBot()
    {
/**        $bot = new TelegramBot("107625524:AAECNEKwz9Gt8q9R-U3VQpGv9G6Rj6sIrpQ");
        $keyboard = new ReplyKeyboardMarkup(TRUE, TRUE);
            return $this->render('telegram', [
                'bot' => $bot, 'keyboard' => $keyboard,
            ]); **/
    //$webhook = new WebHook();
    //$webhook->createWebhookFile();
    }
	
	/**
	 * New user, facebook, twitter, github integration NEEDED
	 */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }
	
	/**
	 * Login page
	 */
    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }
	
	/**
	 * Log out, check to logout any data and delete the CLI info
	 */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

	/**
	 * Contact to the admin, is there any better way?
	 */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }
	
	/**
	 * More info, add videos etc. 
	 */
    public function actionAbout()
    {
        return $this->render('about');
    }
}