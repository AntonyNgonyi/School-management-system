<?php
	session_start();
  require_once('../Model/DatabaseConnection.php');
	$GetNotes = getAllNotes();
	if(isset($_COOKIE['flag']))
	{
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Public Home</title>
  </head>
  <body>
    <table border="1" cellspacing="0" width="80%" >
    <?php include("TeacherHeader.php") ?>
      <tr>
        <tr>
            <td align="Left"><img height="80px" weight="80px" src="../Resources/notice.jpg" alt=""></td>
            <td align="Center">
            <b>
              Notice View
            </b>
            </td>
          </tr>
        <td height="150px" weight="150px">
                <ul>
                    <li><a href="TeacherDashboard.php">Dashboard</a></li>
                    <li><a href="ViewProfile.php">View Profile</a></li>
                    <li><a href="StudentList.php">View Student's Profile</a></li>
                    <li><a href="Schedule.php">Class Schedule</a></li>
                    <li><a href="NoticeBoard.php">Notice Board</a></li>
                    <li><a href="UploadNotes.php">Upload Notes</a></li>
                    <li><a href="StudentListMarks.php">Student Marks</a></li>
                    <li><a href="LeaveRequest.php">Student Leave Request</a></li>
                    <li><a href="BookHistory.php">Book History</a></li>
                    <li><a href="ChangePass.php">Reset Password</a></li>
                    <li><a href="../Controller/Logout.php">Logout</a></li>
                </ul>

        </td>
        <td>
            <fieldset>
                <legend>NOTICES</legend>
            <form class="" action="" method="post">
            <?php
								echo "<table border = 1 width='100%' cellspacing = 0  >
								<tr align = 'center'>
								    <td>ID</td>
								    <td>Notes</td>
								    <td>Time</td>
                    <td>Action</td>
								</tr>";
								for($i = 0; $i<count($GetNotes); $i++){
								    echo "<tr align = 'center'>
								    <td>{$GetNotes[$i]['id']}</td>
								    <td>{$GetNotes[$i]['notes']}</td>
								    <td>{$GetNotes[$i]['time']}</td>
                    <td> <a href='EditNotes.php?id={$GetNotes[$i]['id']}'> Edit </a> | <a href='DeleteNotes.php?id={$GetNotes[$i]['id']}'> Delete </a>  </td>
								</tr>";
								}
								echo "</table>";
								?>
            </form>
            </fieldset>
        </td>
      </tr>
      <?php include("TeacherFooter.php") ?>
    </table>

  </body>
</html>


<?php

	}else{
		header('location: LoginPage.php');
	}

?>
