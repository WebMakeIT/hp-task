<?php

namespace App;

use App\ViewController as View;
use App\models\Customer;

class CurrencyController
{
    private $currencies = [
        'EUR',
        'GPB',
        'USD'
    ];

    public $id;

    /**
     * Index page
     */
    public function index($id)
    {
        $customer = new Customer();
        $customers = $customer->find($id);
        $output = [];

        foreach($customers as $k => $customer) {
            $output[$k]['id'] = $customer['id'];
            $output[$k]['date'] = $customer['date'];
            $output[$k]['value'] = $this->convertCurrency($customer['currency'], 'EUR', $customer['value']);
            $output[$k]['currency'] = 'EUR';
        }
        return new View('index', ['customers' => $output]);
    }

    /**
     * Convert currency from given value
     * 
     * @param string $currencyFrom
     * @param string $currencyTo
     * @param float $amount
     * 
     * @return Array
     */
    public function convertCurrency($currencyFrom, $currencyTo, $amount)
    {
        $changeRate = $this->getCurrentChangeRate($currencyFrom, $currencyTo);

        return $amount*$changeRate;
    }

    /**
     * Get current change rate
     * 
     * @param string From
     * @param string To
     * 
     * @return float 
     */
    public function getCurrentChangeRate($from, $to)
    {
        $apiUrl = env('CURRENCIES_API_URL');
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL,$apiUrl);
        $result=curl_exec($ch);
        curl_close($ch);

        $output = json_decode($result, true);
        
        return $output[$from][$to];
    }
}