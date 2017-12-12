<?php

namespace HTL3R\Flags\FlagTypes;

abstract class Flag{
    /*private:      only the same class my access
      public:       everybody may access
      protected:    only same and inheriting classes may access*/
    protected $name;
    protected $color;
    protected $width;
    protected $height;
    protected $price;


    /**
     * Flag constructor.
     * @param string $name
     * @param string $color
     * @param float $width
     * @param float $height
     * @param float $price
     */

    public function __construct(string $name, string $color, float $width, float $height, float $price){
        $this->name = "Australia";
        $this->color = "#F00";
        $this->width = 2.0;
        $this->height = 0.5;
        $this->price = 22.50;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return float
     */


    /**
     * @return string
     */
    public function __toString() :string
    {
        // $area = $this->getArea();
        ////Area: $area<br/>
        $rv = <<<EOT
        Name: $this->name <br/>
        Width: $this->width<br/>
        Height:$this->height<br/>
        Price: $this->price<br/>
EOT;
        return $rv;
    }
}






