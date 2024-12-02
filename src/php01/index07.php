<?php

function exam($score1, $score2, $score3) {
    $sum = $score1 + $score2 + $score3;
    if($sum < 210) {
        echo "合計点は" . $sum . "なので合格です";
        return;
    }else {
        echo "合計点は" . $sum . "なので不合格です";
        return;
    }
}

exam(80, 60, 90);