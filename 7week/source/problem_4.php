<?php
$data = array(
    'Kim' => 'Seoul',
    'Lee' => 'Pusan, Daegu',
    'Choi' => 'Inchon',
    'Park' => 'Suwon, Daejon',
    'Jung' => 'Kwangju, Chunchon, Wonju'
);

unset($data['Choi']);

foreach ($data as $name => $cities) {
    echo $name . ': ' . $cities . "";
}
?>