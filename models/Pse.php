<?php

namespace app\models;

use mongosoft\soapclient\Client;
use Yii;

class Pse
{

    const login = '6dd490faf9cb87a9862245da41170ff2';
    const trankey = '024h1IlD';
    const wsdl='https://test.placetopay.com/soap/pse/?wsdl';
	const endpoint='https://test.placetopay.com/soap/pse/';
    const seed="";
    
    public function getBankList(){
        $bank = [];
        $auth = array(
            'login' => self::login,
            'trankey' => self::trankey,
            'seed' => self::seed
        );

        $cache = Yii::$app->cache->get('bankList');

        if(Yii::$app->cache->exists('bankList')):
            $bank = $cache;
        else:
            $soap = new Client([
                'url' => self::wsdl
            ]);
            $data = $soap->getBankList(['auth'=>$auth]);

            echo "<pre>";
            print_r($data);
            echo "</pre>";
            // $bank = 

        endif;


    }

    public function createTransaction($request,$client){

    }

    public function getTransactionInformation($transactionID){
        
    }

}
