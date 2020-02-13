<?php

namespace nlib\Missing\Traits;

trait MissingTrait {

    private $_missings = [];

    public function is_missing(array $keys, array $array) : bool {
        
        $bool = false;
        
        if(!empty($keys) && !empty($array)) : foreach($keys as $key)
            if(!array_key_exists($key, $array)) : $this->addMissing($key); $bool = false; break;
            else : $bool = true; endif;
        else : $this->setMissings($keys); endif;

        return $bool;
    }

    
    public function getMissings() : array { return $this->_missings; }

    public function addMissing($missing) : self { var_dump($missing); $this->_missings[] = $missing; return $this; }
    public function setMissings(array $missings) : self { $this->_missings = $missings; return $this; }
}