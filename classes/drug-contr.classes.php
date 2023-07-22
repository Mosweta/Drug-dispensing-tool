<?php
class Drugcontr extends Drug
{
    private $tradeName;
    private $compName;
    private $price;
    private $quantity;





    public function __construct($tradeName, $compName, $price, $quantity)
    {

        $this->tradeName = $tradeName;

        $this->compName = $compName;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    public function setDrug()
    {
        if ($this->emptyInput() == false) {
            header("location: ../index.php?error=empty input");
            exit();
        }
        $this->addDrug($this->tradeName, $this->compName, $this->quantity, $this->price);
    }

    private function emptyInput()
    {

        if (empty($this->tradeName) || empty($this->compName) || empty($this->quantity) || empty($this->price)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
