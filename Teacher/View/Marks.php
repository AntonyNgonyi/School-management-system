<?php
	session_start();
  require_once('../Model/DatabaseConnection.php');
  $Id = $_GET['id'];
	$User =  getStudentById($Id);
  $_SESSION['id'] = $Id;
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
            <td align="Left"><img height="80px" weight="80px" src="../Resources/grades.svg" alt=""></td>
            <td align="Center">
            <b>
              Marks Upload
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
                <legend>MARKS UPLOAD</legend>
            <form class="" action="../Controller/MarksCheck.php" method="post">
            <table align="center">
                <tr>
                <td>ID</td>
                <td>:<input type="number" name="ID" disabled value="<?php echo $User['id']; ?>"></td>
               </tr>
               <tr>
                <td>Name</td>
                <td>:<input type="text" name="name" disabled value="<?php echo $User['name']; ?>"></td>
               </tr>
               <tr>
                <td>Class</td>
                <td>:<input type="text" name="class" disabled value="<?php echo $User['class']; ?>"></td>
               </tr>
               <tr>
                <td>Roll</td>
                <td>:<input type="number" name="roll" disabled value="<?php echo $User['roll']; ?>"></td>
               </tr>
                        <tr>
                        <td>Update Marks</td>
                          <td>
                            :<input type="text" name="marks" value="<?php echo $User['marks']; ?>">
                          </td>
                        </tr>
                      </table>
                      <hr>
                      <center>
                        <input type="submit" name="upload" value="Submit">
                    </center>
            </form>
            </fieldset>
        </td>
        <?php include("TeacherFooter.php") ?>
    </table>

  </body>
</html>


<?php

	}else{
		header('location: LoginPage.php');
	}

?>
