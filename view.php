<?php
                $connect = mysqli_connect('localhost', 'root', 'rowenajiyun0331**', 'webstudy');
                $number = $_GET['number'];
                session_start();
                $query = "select title, content, date, hit, id from board where number =$number";
                $result = mysqli_query($con,$query)or die("mysql connect error");
                $rows = mysqli_fetch_assoc($result);
        ?>

        <table class="view_table" align=center>
        <tr>
                <td colspan="4" class="view_title"><?php echo $rows['title']?></td>
        </tr>
        <tr>
                <td class="view_id">작성자</td>
                <td class="view_id2"><?php echo $rows['id']?></td>
                <td class="view_hit">조회수</td>
                <td class="view_hit2"><?php echo $rows['hit']?></td>
        </tr>


        <tr>
                <td colspan="4" class="view_content" valign="top">
                <?php echo $rows['content']?></td>
        </tr>
        </table>
 
        <div class="view_btn">
                <button class="view_btn1" onclick="location.href='./board.php'">목록 보기</button>
        </div>
