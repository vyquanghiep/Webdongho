<?php                   
            $server_name ='localhost';
            $user = 'root';
            $password ='';
            $database_name = 'doanphp';

            $conn = mysqli_connect($server_name, $user, $password, $database_name);
            if (mysqli_connect_errno() !== 0) {
                die("Error: Could not connect to the database. An error " . mysqli_connect_error() . " ocurred.");
            }
            mysqli_set_charset($conn, 'utf8');
            use Carbon\Carbon; 
            use Carbon\CarbonInterval; 
            require('Carbon/autoload.php');

            if(isset($_POST['thoigian'])){
                $thoigian = $_POST['thoigian']; 
            }
            else{
                $thoigian=''; 
                $subdays = Carbon:: now('Asia/Ho_Chi_Minh')->subdays (365)->toDateString();
            }

            if($thoigian == '7ngay'){
                $subdays = Carbon::now('Asia/Ho_Chi_Minh') ->subdays(7)->toDateString();
            }else if($thoigian == '28ngay'){
                $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subdays(28)->toDateString(); 
            }elseif($thoigian == '90ngay'){
                $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subdays(90)->toDateString(); 
            }elseif($thoigian == '365ngay'){
                $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();
            }
            
            // $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subdays (365)->toDateString();
                $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
                $sql = "SELECT * FROM tbl_thongke WHERE (ngaydat BETWEEN '$subdays' AND now()) ORDER BY ngaydat ASC" ;
             //   SELECT ngayTT,tongtien FROM `lichsuthanhtoan` WHERE (ngayTT BETWEEN '2021-1-1' AND now())
                $sql_query = mysqli_query($conn, $sql);

                while($val = mysqli_fetch_array($sql_query)){
                    $chart_data[] = array(
                    'date' => $val['ngaydat'], 
                    'order' => $val['donhang'], 
                    'sales' => $val['danhthu'], 
                    'quantity' => $val['soluongban']
                    );
                }
                //print
                echo $data = json_encode($chart_data);
            
            
?>
