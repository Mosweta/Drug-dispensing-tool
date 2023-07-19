<?php

class Drug extends Dbh
{

    protected function addDrug($tradeName, $compName, $price, $quantity)
    {
        $stmt = $this->connect()->prepare('INSERT INTO drug (TradeName, CompName, price, quantity) VALUES (?,?,?,?);');



        if (!$stmt->execute(array($tradeName, $compName, $price, $quantity))) {
            $stmt = null;
            header("Location: ../index.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }
}
