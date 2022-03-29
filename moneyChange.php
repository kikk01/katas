<?php

class Change {
    public int $bill10 = 0;
    public int $bill5 = 0;
    public int $coin2 = 0;

    function calculChange(int $n) {
        if ($n === 1 || $n === 5) {
            var_dump(null);
            return;
        }

        if ($n%2 !== 0) {
            $this->bill5 = 1;
            $n = $n - 5;
        }
            
        $this->bill10 = intval($n / 10);

        $n = $n - ($this->bill10*10);
        $this->coin2 = intval($n / 2);

        var_dump($this->bill10);
        var_dump($this->bill5);
        var_dump($this->coin2);
        
        
    }
}

$change = new Change;

$change->calculChange(8);