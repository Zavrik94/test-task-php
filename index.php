<?
    include 'cal.php';
    $cal = new Cal;
    $cal->min('20');
    $cal->add(20);
    if ($cal->result != "") {
        $cal->add(42);
    }
    echo $cal->result;