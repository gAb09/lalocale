<?php namespace Gab\Domaines;
 
use Illuminate\Support\Facades\Facade;
 
class DomainesFacade extends Facade {
 
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'domhelper'; }
 
}