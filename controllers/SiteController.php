<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Pse;
use PlaceToPay\SDKPSE\SDKPSE;

// declaracion de modelos
use app\models\Orders;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
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

    /**
     * {@inheritdoc}
     */
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
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Displays a single Orders.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Lists all Orders models.
     * @return mixed
     */
    public function actionList()
    {
        $searchModel = new Orders();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('list', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new Orders model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string
     */

     public function actionCreate(){
         $model = new Orders();
         $model->scenario = 'create';

         if ($model->load(Yii::$app->request->post())) {
             $created_at = date('Y-m-d H:i:s');
             $status = "CREATED";

             $model->created_at = $created_at;
             $model->status = $status;

             $valid = $model->validate();

             if($valid){
                 $model->save();
                 return $this->redirect(['view', 'id' => $model->id]);
             }
         }
         return $this->render('_form', [
             'model' => $model
         ]);
     }

     /**
     * Create Pay a single Orders.
     * @param integer $id
     * @return mixed
     */
     function actionPay($id){

        $model = $this->findModel($id);
        $bank = Pse::getBankList();

        try {
        //     $config = array(
        //         "login" => "6dd490faf9cb87a9862245da41170ff2",
        //         "tran_key" => "024h1IlD",
        //         "cache" => array(
        //             "type" => "memcached",
        //             "memcached" => array(
        //                 "host" => "localhost",
        //                 "port" => "11211"
        //            )
                     
        //         )
        //     );
        
        //     $obj = new SDKPSE($config);
            echo "<pre>";
            print_r($bank);
            echo "</pre>";
        } catch (\Throwable $th) {
            //throw $th;
        }
        
        
        

        // $bankList = $obj->getBankList();

        // echo $bankList;
     }

     /**
     * Finds the Orders model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Orders the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
     protected function findModel($id)
     {
         if (($model = Orders::findOne($id)) !== null) {
             return $model;
         } else {
             throw new NotFoundHttpException('The requested page does not exist.');
         }
     }
}