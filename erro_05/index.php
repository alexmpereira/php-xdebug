<?php 
class BankAccount {
    public $balance;

    public function __construct() {
        $this->balance = 0;
    }

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            echo "Insufficient balance.";
        }
    }
}

$account = new BankAccount();
$account->deposit(100);
$account->withdraw(30);
echo $account->balance; 
?>
