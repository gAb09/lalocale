<?php
namespace Gab\NombresFr;
 
use Illuminate\Support\Facades\Facade;
 
class NombresFrFacade extends Facade {
 
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'nombresfr'; }
 
}