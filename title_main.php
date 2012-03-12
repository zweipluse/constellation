<div id="postBody">
	<?
	$link=mysql_connect("localhost","root",""); // ѕодключаемс€ к серверу Ѕƒ 
	mysql_select_db("logbook"); // ѕодключаемс€ к базе данных с именем "dbname"
	if(isset($_GET['page'])) { $page=$_GET['page']; } else { $page="0"; }
	/* «атем, мы делаем запрос в базу данных, где просим вернуть 8 записей, начина€ с определЄнной записи. Ётой самой определЄнной записью, будет запись, котора€ €вл€етс€ первой записью на странице, и еЄ номер будет определ€тьс€ как: номер страницы минус единица и умноженный на количество записей на страницу. Ќапример: перва€ запись на третьей странице будет иметь номер 2*8=16, при условии вывода по 8 записей на страницу. */
	$query=mysql_query("SELECT * FROM posts ORDER BY NumPost DESC LIMIT ".($page*$cfg_page).",".$cfg_page);
	while($post=mysql_fetch_array($query)) 
		{
        echo "<p><strong>".$post['UserId']."</strong></p><p>".$post['UserId']."</p><p>".$post['Post']."</p>";
		}
	mysql_free_result($query);
	mysql_close($link);	
	?>
</div>