<?php
/**
 * Created by PhpStorm.
 * User: fliak
 * Date: 4.2.15
 * Time: 19.59
 */

namespace Soilby\EventComponent\Service;


interface UrinatorInterface {

    public function generateURI($entity, $frontend = false);
    public function assemble($routeName, $params);
}