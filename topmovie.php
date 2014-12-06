<?
class topmovie 
{
	function processquickbuyitemtextinput()
	{
		$sd=$_GET["sd"];
		$con = mysql_connect("localhost","","");

		$getmovie = "";
		if($sd!="")
		{
		$result = mysql_query("SELECT * from hcdb.topmovies where release_date <= '".$sd."' order by rank asc limit 10");
		$i = 0;
		if(mysql_num_rows($result) > 0){
			
			$getmovie = "Top 10 movies on ".$sd."<br/><br/><table><tr><td>Rank</td><td>Title</td><td>Year</td><td>release date</td><td>number of votes</td><td>rating</td></tr>";
			while ($row = mysql_fetch_assoc($result)) {
				$i++;
			$getmovie = $getmovie."<tr><td>".$i."</td><td>".$row['title']."</td><td>".$row['year']."</td><td>".$row['release_date']."</td><td>".$row['number_of_votes']."</td><td>".$row['rating']."</td></tr>";
			}
			$getmovie = $getmovie ."</table>";
		}		
		}
	

mysql_free_result($result);
  
  mysql_close($con);
		echo $getmovie;
	}
} //end of class
?>
