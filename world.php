<?php
$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
//GET CITY INFO
//$cities =$_GET['cities'];

if(isset($_GET['lookup'])){
  $country =$_GET['country'];
  $lookupcities =$_GET['lookup'];
$stmt = $conn->query("SELECT DISTINCT cities.name AS cityname, cities.district, cities.population,countries.name AS countryname FROM cities JOIN countries ON cities.country_code=country.code WHERE countries.name=`$country`");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<table >
<caption>List of Cities</caption>
<tr>
  <th> Name </th>
  <th> District </th>
  <th> Population </th>
</tr>";



foreach ($results as $row)
  {
    echo "<tr>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['district']."</td>";
    echo "<td>".$row['population']."</td>";
    echo "</tr>";
  }

echo "</table>";
}else
//GET COUNTRYY INFO
$country =$_GET['country'];
$stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$country%'");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<table >
<tr>
  <th> Country Name </th>
  <th> Continent</th>
  <th> Independence </th>
  <th> Head of State </th>
</tr>";



foreach ($results as $row)
  {
    echo "<tr>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['continent']."</td>";
    echo "<td>".$row['independence_year']."</td>";
    echo "<td>".$row['head_of_state']."</td>";
    echo "</tr>";
  }

echo "</table>";
?>