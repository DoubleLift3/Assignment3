<?php

namespace App\Apps;
use Quwi\framework\CommandContext;
use Quwi\framework\PageController_Command_Abstract;
use Quwi\framework\signupMapper;


class ProcessRegistrationController extends PageController_Command_Abstract {

   public function run (){

        $this->setModel(new RegistrationModel());
        //$data = $this->model->register();
        $mapper= new signupMapper();
        $data= $mapper->insert();
     
       header("Location: index.php?controller=Login");
        
    }
    
    public function execute(CommandContext $context) : bool{
      $this->data = $context;
      $this->run();
      return true;
  }
}