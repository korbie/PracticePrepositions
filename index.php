<?php

final class Init {

    const DEFAULT_PAGE = 'home';
    const DEFAULT_DIRECTORY = '1.2/pages/';
    const INACTIVE_PAGE = '401';
    const INACTIVE_DIRECTORY = '';
    const SITE_INACTIVE = FALSE;
    

    public function init() {
        //why is this giving error message?
         //       session_start();
    }
    public function run() {
        $this->runPage($this->getPage());
    }

    private function runPage($page) {
        include_once $page;
        
    }

    private function getPage() {
    if($this::SITE_INACTIVE){
        return $this::INACTIVE_PAGE . '.shtml';
    	}
    else{
    	return $this::DEFAULT_DIRECTORY . $this::DEFAULT_PAGE . '.php';
    	}
    }

}

$index = new Init();
$index->init();
$index->run();