<div id="postBody">
	<?
	$link=mysql_connect("localhost","root",""); // ������������ � ������� �� 
	mysql_select_db("logbook"); // ������������ � ���� ������ � ������ "dbname"
	if(isset($_GET['page'])) { $page=$_GET['page']; } else { $page="0"; }
	/* �����, �� ������ ������ � ���� ������, ��� ������ ������� 8 �������, ������� � ����������� ������. ���� ����� ����������� �������, ����� ������, ������� �������� ������ ������� �� ��������, � � ����� ����� ������������ ���: ����� �������� ����� ������� � ���������� �� ���������� ������� �� ��������. ��������: ������ ������ �� ������� �������� ����� ����� ����� 2*8=16, ��� ������� ������ �� 8 ������� �� ��������. */
	$query=mysql_query("SELECT * FROM posts ORDER BY NumPost DESC LIMIT ".($page*$cfg_page).",".$cfg_page);
	while($post=mysql_fetch_array($query)) 
		{
        echo "<p><strong>".$post['UserId']."</strong></p><p>".$post['UserId']."</p><p>".$post['Post']."</p>";
		}
	mysql_free_result($query);
	mysql_close($link);	
	?>
</div>