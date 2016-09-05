<?php 
// Shirket ucun Ishcilerin siyahisi yaradilmalidir, yaradilan butun ishcilerin siyahisi table sheklinde muvafiq melumatlarla ekrana cixmali ve hal hazirki gunde dogum gunu olan ishcinin melumatlari qirmizi rengle yazilmalidir.
class Database
  {   public $host;
      public $username;
      public  $pass;
      public $dbName;
      public $conn;
      
 function __construct($host,$username,$pass,$dbName)
      {     $this->host=$host;
            $this->username=$username;
            $this->pass=$pass;
            $this->dbName=$dbName;

     $this->conn=mysqli_connect($this->host,$this->username,$this->pass,$this->dbName);
           if ($this->conn) {
             // echo "yes";
           }
           else {
             echo "no";
           }
        }
        public function select($tname){
          $sql="SELECT * FROM $tname";
          // if ($where != null) {
          //       $sql .= ' WHERE '.$where;
          //     } 
          
          $query=mysqli_query($this->conn,$sql);
          if ($query) {
          	echo "yes";
          }
          else{
          	echo "no";
          }
          return $query;
        }
      }

     $con=new Database('localhost','root','','crudoop');
     // $h->select('crudoop');



echo date("d-m-Y");

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr>
		<td>Ad</td>
		<td>Soyad</td>
		<td>Dogum tarixi</td>
	</tr>
	<tr>
		<?php 
		 $newquery=$con->select("crudoop");
			while ($row=mysqli_fetch_assoc($newquery)){
				$date_day=date_format(new DateTime($row['number']), 'd');
				$date_month=date_format(new DateTime($row['number']), 'm');
				$time_now=date("Y-m-d");
				$cur_day=date_format(new DateTime($time_now), 'd');
				$cur_month=date_format(new DateTime($time_now), 'm');

				$color="";

				if ($date_month==$cur_month && $date_day==$cur_day) {
					$color="color:red;";
				}
			  ?>
           <tr style="<?= $color ?>">

           <td><?=$row['name']?></td>
           <td><?=$row['mail']?></td>
           <td><?=$row['number']?></td>
            
    
         </tr>
      <?php  
      }
      ?>
	</tr>
	
	
</table>
</body>
</html>
<style type="text/css">
	td{
		border:1px solid lightgrey;
	}
</style>