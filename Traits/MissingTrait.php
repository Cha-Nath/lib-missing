<?php

namespace nlib\Missing\Traits;

trait MissingTrait {

    private $_throw = '';
    private $_missings = [];

    public function is_missing(array $keys, array $array) : bool {
        
        $bool = false;
        
        if(!empty($keys) && !empty($array)) : foreach($keys as $key)
            if(!array_key_exists($key, $array)) : $this->addMissing($key); $bool = false; break;
            else : $bool = true; endif;
        else : $this->setMissings($keys); endif;

        return $bool;
    }

    public function addMissing($missing) : self { $this->_missings[] = $missing; return $this; }
    
    #region Getter

    public function getMissings() : array { return $this->_missings; }
    public function getEncodedMissings() : string { return json_encode($this->_missings); }
    public function getThrow() : string { return $this->_throw; }

    #endregion

    #region Setter

    public function setMissings(array $missings) : self { $this->_missings = $missings; return $this; }
    public function setThrow(string $throw) : self { $this->_throw = $throw; return $this; }

    #endregion
}