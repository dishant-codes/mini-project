<?php
include '_dbconnect.php';

extract($_POST);

$sql =  "Select * from donor where BloodType = '$blood_type'";

$result = mysqli_query($conn, $sql);

if (!$result) {
  echo 'No Records found!';
  exit();
}

$numRows = mysqli_num_rows($result);

if ($numRows == 0) {
  echo 'No Records found!';
  exit();
}

echo '<table>
  <tr>
    <th>Name</th>
    <th>Mobile number</th>
    <th>Email Id</th>
    <th>Medical History</th>
    <th>City</th>
  </tr>';

while ($row = mysqli_fetch_assoc($result)) {
  $name = $row['FullName'];
  $Mobno = $row['MobileNumber'];
  $email = $row['EmailID'];
  $history = $row['History'];
  $city = $row['City'];
  echo ("<tr>
            <td>$name</td>
            <td><a href='tel:+91$Mobno'>$Mobno</a></td>
            <td>$email</td>
            <td>$history</td>
            <td>$city</td>
          </tr>");
}

echo '</table>';

mysqli_close($conn);