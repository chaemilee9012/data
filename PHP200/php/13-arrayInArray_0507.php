<?php
    //변수 dr을 배열로 선언
    $dr = array();
    //배열 dr에 continent 인덱스를 생성하고 이것을 배열로 선언
    $dr['continent'] = array();

    /* 0507 배열 중첩 선언 가능
        $dr = [
        'continent' => [
                        'america' => ['애너하임', '올랜도']
                        ]
        ];
    */

    //배열 dr['continent']에 ['america']인덱스를 생성 후 배열로 선언
    $dr['continent']['america'] = array();
    $dr['continent']['america'][0] = '애너하임';
    $dr['continent']['america'][1] = '올랜도';

    $dr['continent']['asia'] = array();
    $dr['continent']['asia'][0] = '우라야스';
    $dr['continent']['asia'][1] = '홍콩';
    $dr['continent']['asia'][2] = '상하이';

    $dr['continent']['europe'] = array();
    $dr['continent']['europe'][0] = '파리';

    echo "다음 도시의 공통점은?";
    echo "<br><br>";
    echo "아메리카 :<br>";
    echo $dr['continent']['america'][0]."<br>";
    echo $dr['continent']['america'][1]."<br>";
    echo "<br>";

    echo "아시아 :<br>";
    echo $dr['continent']['asia'][0]."<br>";
    echo $dr['continent']['asia'][1]."<br>";
    echo $dr['continent']['asia'][2]."<br>";
    echo "<br>";

    echo "유럽 :<br>";
    echo $dr['continent']['europe'][0];

    /* 0507
        $arr = [
        [10, 20, 30],
        [40, 50, 60]
        ];

        $arr[0][1] // 20
    */
?>