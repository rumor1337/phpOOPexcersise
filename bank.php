<?php

    class BankAccount {
        public $owner;
        private $balance;

        public function __construct($owner, $balance) {
            $this->owner = $owner;
            $this->balance = $balance;
        }


        // lai ir echo whatever
        public function deposit($amount) {
            if($amount <= 0) {
                echo 'err';
            }
            $this->balance = $this->balance + $amount;
            echo "balance updated: {$this->balance}\n";
        }

        public function withdraw($amount) {
            if($amount <= 0 || $amount > $this->balance) {
                echo 'err';
            }
            $this->balance = $this->balance - $amount;
            echo "balance updated: {$this->balance}\n";
        }

        public function printInfo() {
            echo $this->owner;
            echo $this->balance;
        }
    }


?>