<?php

namespace Quwi\framework;
use App\Apps\SessionClass;
class FrontController extends FrontController_Abstract{

    private function __construct(){

    }

    private function __clone(){
        
    }
    public static function run(){
        $controller = new FrontController();
        $controller->init();
        $controller->handleRequest();
    }

    //use this method to initialize helper objects e.g:SessionManager, Validator
    protected function init(){
      
        $header = new ResponseHeader();
        $logger = new ResponseLogger();
        $state = new ResponseState();
        $response = new ResponseHandler($header, $state, $logger);
       

    }

    protected function handleRequest(){
        $context =  new CommandContext();
        $request =  $context->get('controller');
        $handler = RequestHandlerFactory::makeRequestHandler($request);

        
        if($handler->execute($context)===false){
            //error handling
            error_log("Could not reach web page", 0);
            $headerError = header('Error 404: Page not found');
            $entries = array(1 => $headerError);
            $header->addEntries($entries);  
        }
    }
}