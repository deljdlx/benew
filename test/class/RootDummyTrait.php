<?php

namespace Root;

trait DummyTrait
{


    public function expose()
    {
        return "I'am an instance of ".get_class($this);
    }



}



