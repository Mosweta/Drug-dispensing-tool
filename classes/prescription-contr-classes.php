<?php
class Prescriptioncontr extends Prescription
{
    private $dosage;
    private $presc_Date;
    private $quantity;
    private $ssn;
    private $comment;
    private $drug;

    public function __construct($dosage, $presc_Date, $quantity, $ssn, $comment, $drug)
    {


        $this->dosage = $dosage;
        $this->presc_Date = $presc_Date;
        $this->quantity = $quantity;
        $this->ssn = $ssn;
        $this->comment = $comment;
        $this->drug = $drug;
    }

    public function prescribe()
    {
        if ($this->emptyInput() == false) {
            header("Location: ../index.php?error=emptyinput");
            exit();
        }

        $this->setPrescription($this->drug, $this->ssn, $this->quantity, $this->presc_Date, $this->dosage, $this->comment);
    }

    private function emptyInput()
    {
        if (empty($this->dosage) || empty($this->presc_Date) || empty($this->quantity) || empty($this->ssn) || empty($this->comment) || empty($this->drug)) {
            return false;
        } else {
            return true;
        }
    }
}
