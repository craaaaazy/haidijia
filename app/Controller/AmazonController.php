<?php

class Amazon_Info {
    const ACCECSS_KEY_ID = '自分のamazonwebserviceのアクセスキー';
    // アフィリエイトIDを使いたい場合に指定
    const ASSOC_ID = '自分のアフィリエイトID';
}

App::import('Vender','amazon',array('file' => 'pear'.DS.'Services'.DS.'AmazonECS4.php'));

class AmazonController extends AppController {

    var $name = 'Amazon';
    var $uses = array();
    var $helpers = array('Html', 'Form');
    
    function index()
    {
        if(empty($this->data)) {
            $this->render();
        } else {
            $words = $this->data['Amazon']['words'];
            
            $amazon = new Services_AmazonECS4(
                   Amazon_Info::ACCECSS_KEY_ID,
                   Amazon_Info::ASSOC_ID
            );
            
            $result = $amazon->setLocale('JP');
            
            $options['Keywords'] = $words;
            $options['ResponseGroup'] = 'Medium';
            
            $result = $amazon->ItemSearch('Books', $options);
            
            $this->set('result', $result);
            $this->render("search");
        } 
    }
}

?>