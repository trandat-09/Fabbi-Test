<?php 

// Bài 1
// ý tưởng: tách array ban đầu thành 3 array khác nhau x, y, z sử dụng array_slice
//ghép 3 array trên theo yêu cầu
$n = 3;
$array3n = array(11, 2, 8, 10, 5, 99, 1, 8, 9);
$arrayX = array_slice($array3n, 0, $n);
$arrayY = array_slice($array3n, $n, $n);
$arrayZ = array_slice($array3n, 2*$n, $n);

$output = array();

for($i = 0; $i < $n; $i++){
    array_push($output, $arrayX[$i]);
    array_push($output, $arrayY[$i]);
    array_push($output, $arrayZ[$i]);
}

print_r($output);

//Bài 2

// ý tưởng: 
// Cách 1:
// - Sắp xếp mảng và lấy hai giá trị lớn nhất => tính tổng

// Cách 2:
// - giả sử 2 giá trị lớn nhất và lớn thứ 2 là max = max2 = 0
// - Duyệt tuần tự mảng đã cho để tìm giá trị lớn nhất của mảng và gán cho max
// - Đồng thời nếu xuất hiện một số không lớn hơn max nhưng lớn hơn max2 thì gán luôn giá trị cho max2
$array = array(11, 2, 8, 10, 5, 99, 1, 8, 9);
$max=$max2=0;
for ($i = 0; $i < count($array); $i++) {
if ($array[$i] > $max) 
    {
        $max2 = $max;
        $max = $array[$i];
    }
else if (($array[$i] > $max2) && ($array[$i] != $max))
    {
        $max2 = $array[$i];
    }
}
echo $max + $max_2;
// Cả hai cách trên đều tương đối tốn dung lượng xử lý do điều kiện bài toán
//tuy nhiên tôi vẫn chưa nghĩ ra cách tốt hơn để tối ưu


//Bài 3
$array = array(11, 2, 8, 10, 5, 99, 1, 8, 9);
$n = count($array);
$minDis = 0;
for($i = 0; $i < $n; $i++){
    for($j = $i+1; $j < $n; $j++){
        if($array[$j] - $array[$i] < $minDis){
            $minDis = $array[$j] - $array[$i];//tìm khoảng cách nhỏ nhất
        }
    }
}

///duyệt mảng lần nữa để tìm các cặp thỏa mãn điều kiện
// do điều kiện thời gian nên tôi chưa thể hoàn thành bài 3


?>