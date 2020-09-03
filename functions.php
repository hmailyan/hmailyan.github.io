
<?php
    $conn=@mysqli_connect(HOST, DBUSER, DBPASSWORD, DBNAME);
        if(mysqli_connect_errno()){
            printf("Connect failed: %s/n",mysqli_connect_error());
            exit();
        } ;

        // $sqlInsertQuery = "INSERT INTO `users` (`fname`,`lname`,`age`,`gender`,`email`,b_day)
        //     VALUES ('Karen2','Gevorgyan2',24,'male','karen2.1999@mail.com','2000-04-24');";

        //Get users list
        function getUsersList($dbConn) {
            $sqlSelectQuery = "SELECT * FROM `users`";
            $result = mysqli_query($dbConn,$sqlSelectQuery);
            $userList = [];
            if($result) {
                while($row = mysqli_fetch_assoc($result)) {
                    $userList[] = $row;
                }
            }
            return $userList;
        }
        function getTeacherList($dbConn) {
            $sqlSelectQuery = "SELECT * FROM `teachers`";
            $result = mysqli_query($dbConn,$sqlSelectQuery);
            $teacherList = [];
            if($result) {
                while($row = mysqli_fetch_assoc($result)) {
                    $teacherList[] = $row;
                }
            }
            return $teacherList;
        }
        function getProffList($dbConn) {
            $sqlSelectQuery = "SELECT * FROM `proff`";
            $result = mysqli_query($dbConn,$sqlSelectQuery);
            $proffList = [];
            if($result) {
                while($row = mysqli_fetch_assoc($result)) {
                    $proffList[] = $row;
                }
            }
            return $proffList;
        }
        
        // print_r($result);
        // $result = mysqli_query($conn,$sqlInsertQuery);
        // if(!$result) {
        //     printf("Error massage: %s/n", mysqli_error($conn));exit();
        // }
        
    
    function addUser($dbconn, $data) {
        $sqlInsertQuery = "INSERT INTO `users` (`fname`,`lname`,`age`,`gender`,`email`,b_day,`study`)
            VALUES ('$data[fname]','$data[lname]',$data[age],'$data[gender]','$data[mail]','$data[b_day]','$data[study]');";
        $result = mysqli_query($dbconn,$sqlInsertQuery);
        return $result;
    };
    function deleteUser($dbconn,$data){
        $sqlDeleteQuery = "DELETE FROM `users` WHERE `users`.`id`= $data";
        $return = mysqli_query($dbconn, $sqlDeleteQuery);
        return $return;

    };
    function addTeacher($dbconn, $data) {
        $sqlInsertQuery = "INSERT INTO `teachers` (`fname`,`lname`,`age`,`email`,`profession`)
            VALUES ('$data[fname]','$data[lname]',$data[age],'$data[mail]','$data[profession]');";
        $result = mysqli_query($dbconn,$sqlInsertQuery);
        return $result;
    };
    function deleteTeacher($dbconn,$data){
        $sqlDeleteQuery = "DELETE FROM `teachers` WHERE `teachers`.`id`= $data";
        $return = mysqli_query($dbconn, $sqlDeleteQuery);
        return $return;

    };
    function login($dbconn,$data){
        $password = md5($data['pass']);
        $sql = "SELECT * FROM `login` WHERE `login` = '$data[log]' and `password` = '$password'";
        $return = $dbconn->query($sql);
        $count = mysqli_num_rows($return);
        if ($count == 1) {
        $_SESSION['admin'] = 'some';
        exit;
    }
    }
    // --------------------------------------------------------sortavorel @st tariqi----------------------------------------------
    // function sortByAge($a, $b) {
    //         return $a['age'] - $b['age'];
    //     }
        
    //    usort($userList, 'sortByAge');




?>