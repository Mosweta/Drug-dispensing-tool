<?php

class Prescription extends Dbh
{
    protected function setPrescription($drug, $ssn, $quantity, $presc_Date, $dosage, $comment)
    {
        $stmt = $this->connect()->prepare('INSERT INTO prescription (TradeName, patient_SSN, Quantity, Presc_Date, Dosage, Comment) VALUES (?, ?, ?, ?, ?, ?);');

        if (!$stmt->execute(array($drug, $ssn, $quantity, $presc_Date, $dosage, $comment))) {
            $stmt = null;
            header("Location: ../index.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }
}
