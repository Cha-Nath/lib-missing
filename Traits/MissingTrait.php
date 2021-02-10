<?php

namespace nlib\Missing\Traits;

trait MissingTrait {

    private $_endpoint = '';
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
    public function getEndpoint() : string { return $this->_endpoint; }

    #endregion

    #region Setter

    public function setMissings(array $missings) : self { $this->_missings = $missings; return $this; }
    public function setEndpoint(string $endpoint) : self { $this->_endpoint = $endpoint; return $this; }

    #endregion
}