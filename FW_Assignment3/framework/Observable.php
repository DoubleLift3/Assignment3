<?php 
namespace Quwi\framework;
interface Observable {
 
    public function attach(Observer $o);

    public function detach(Observer $o);

    public function notify();
}