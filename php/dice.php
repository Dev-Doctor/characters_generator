<?php
class dice {
    /**
     * Simula un lancio di dadi
     * @param  {String} diceStr notazione standard dei dadi AdX. A è il numero di dadi da lanciare; X è il numero delle facce di ogni dado
     * @return {Number} il totale dei dadi lanciati
     */
    function roll($diceStr) {
        $dice = explode("d", $diceStr);
        $tot = 0;
        for ($i = 0; $i < $dice[0]; $i++) {
            $tot += rand(1, $dice[1]);
        }
        return $tot;
    }
}
