<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        
        //$nums = [15, 4, 18, 23, 10 ];

        function sort_2way($array, $order) {
          if ($order == TRUE) {
            sort($array);

           //昇順にソート
           echo '昇順にソートします。<br>';
           
           foreach ($array as $num) {
             echo $num .'<br>';
           }
          }  

          
          elseif ($order == FALSE) {
            rsort($array);
          //降順にソート
            echo'降順にソートします。<br>';
            foreach ($array as $num) {        
              echo $num . '<br>';
            }
          }
          
        }
        // 配列
        $nums = [15, 4, 18, 23, 10 ];
        
        sort_2way($nums, TRUE);
       
        
        sort_2way($nums, FALSE);
          
          
      

       

      
        ?>
    </p>
</body>

</html>