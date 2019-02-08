<?php
namespace BeNew;


class Space
{
    protected $name;
    protected $filepath;


    /**
     * @var Space
     */
    protected $parentSpace;


    public function __construct($name, $filepath = null, $autoloader = null)
    {
        $this->name =$name;
        $this->filepath = $filepath;

        $this->autoloader = $autoloader;
    }


    public function getName()
    {
        return $this->name;
    }




    public function inherit(Space $parentSpace)
    {
        $this->parentSpace = $parentSpace;

        $autoloader = function($className) {
            if(!class_exists($className)) {

                $parentClassName = preg_replace('`^'.$this->getName().'\\\\`', $this->parentSpace->getName().'\\', $className);

                if(class_exists($parentClassName) || trait_exists($parentClassName)) {
                    class_alias($parentClassName, $className);
                }
            }
        };

        spl_autoload_register($autoloader);
        return $this;
    }

    public function getFilpath($filepath)
    {

    }





}




