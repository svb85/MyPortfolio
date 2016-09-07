<?php
abstract class Name{
    protected 
    $nameCont = [
        '' => 'defaultController',
        'viewsdemo' => 'viewsdemoController',
        'wordpress' => 'wordpressController',
    ],
    $nameAction = [
        '' => 'defaultAction',
        'demo' => 'viewsdemoAction',
        'previews' => 'previewsAction',
    ];        
}