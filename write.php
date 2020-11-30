<!DOCTYPE>

<html>
<head>
        <meta charset = 'utf-8'>
</head>
<style>
        table.table2{
                border-collapse: separate;
                border-spacing: 1px;
                text-align: left;
                line-height: 1.5;
                border-top: 1px solid #ccc;
                margin : 20px 10px;
        }
        table.table2 tr {
                 width: 50px;
                 padding: 10px;
                font-weight: bold;
                vertical-align: top;
                border-bottom: 1px solid #ccc;
        }
        table.table2 td {
                 width: 100px;
                 padding: 10px;
                 vertical-align: top;
                 border-bottom: 1px solid #ccc;
        }

</style>
<body>
        <form method = "get" action = "write_action.php">
        <table  style="padding-top:50px" align = center width=700 border=0 cellpadding=2 >
                <tr>
                <td height=20 align= center bgcolor=#ccc><font color=white> 글쓰기</font></td>
                </tr>
                <tr>
                <td bgcolor=white>
                <table class = "table2">
                        <tr>
                        <td>작성자</td>
                        <td><input type = text name = name size=20> </td>
                        </tr>

                        <tr>
                        <td>제목</td>
                        <td><input type = text name = title size=60></td>
                        </tr>

                        <tr>
                        <td>내용</td>
                        <td><textarea name = content cols=85 rows=15></textarea></td>
                        </tr>

                        <tr>
                        <td>비밀번호</td>
                        <td><input type = password name = pw size=10 maxlength=10></td>
                        </tr>
                      </table>
                      <div class = text>
                      <font style="cursor: hand"onClick="location.href='./board.php'">작성</font>
                      </div>

                        <?php
                        $con=mysqli_connect("localhost","root","rowenajiyun0331**","webstudy") or die("mysql connect error");
                        $sql=mysqli_query($con,"INSERT INTO post values('$name','$title','$content','$password')");
                        #if(!mysqli_query($con,$sql)){
                        #  echo "저장을 실패했습니다.";
                        #}
                       //else{
                        // echo "저장을 성공했습니다.";
                      //}

                       mysqli_close($con);
                         ?>
                         

                </td>
                </tr>
        </table>
        </form>
</body>
</html>
