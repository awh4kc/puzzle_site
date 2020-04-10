<?php
    $counts = ("counter_puzzles.txt");
    $hits = (int)file_get_contents($counts);
    $hits++;
    file_put_contents($counts, $hits);
    header("Content-type: text/javascript");
?>
