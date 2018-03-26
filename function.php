<?php
function showdetails($standard,$rollno)
{
  include('dbconn.php');
  $sql="SELECT * FROM `student` WHERE rollno='$rollno' AND standard='$standard'";
  $run=mysqli_query($con,$sql);

  if(mysqli_num_rows($run)>0)
  {
	  $data=mysqli_fetch_assoc($run);
     ?>
	 <table align="center" border="2">
      <tr>
	  <th colspan="3">student Detail </th>
	  </tr>
	  <tr>
	  <td rowspan="5"> <img src="dataimage/<?php echo $data['image'];?>" style="max-height:150px; max-width:120px;"/> </td>
	 <th>rollno</th>
	 <td><?php echo $data['rollno']; ?> </td>
	 </tr>
	 <tr>
	 <th>name</th>
	 <td> <?php echo $data['Name']; ?> </td>
	 </tr>
	 
	 <tr>
	 <th>standard</th>
	 <td> <?php echo $data['standard']; ?> </td>
	 </tr>
	 
	 <tr>
	 <th>city</th>
	 <td> <?php echo $data['city']; ?> </td>
	 </tr>
	 
	 <tr>
	 <th>Parent contact no</th>
	 <td> <?php echo $data['pcont']; ?> </td>
	 </tr>



     
	 </table>
    <?php
  }
  else
  {
	  echo "<script>alert('No student found'); </script>";
  }

}



?>