<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>!!</title>


</head>

<body>
<h1>Instant Win</h1>

<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/jquery.rotate.min.js"></script>
<script>
$(function(){
	var $hand = $('.hand');
	data = <?php 
	$data = mt_rand(1, 12);
	echo $data; 
	?>;
	<?php 
	if(6 < $data){
        $printmsg = 'Win!';
		$msg='ewogICJ0eXBlIjogImJ1YmJsZSIsCiAgImhlcm8iOiB7CiAgICAidHlwZSI6ICJpbWFnZSIsCiAgICAidXJsIjogImh0dHBzOi8vbGluZWJvdC53LWhlYWRzLmNvbS9XaW4vaW1hZ2VzL2cucG5nIiwKICAgICJzaXplIjogImZ1bGwiLAogICAgImFzcGVjdFJhdGlvIjogIjIwOjEzIiwKICAgICJhc3BlY3RNb2RlIjogImNvdmVyIiwKICAgICJhY3Rpb24iOiB7CiAgICAgICJ0eXBlIjogInVyaSIsCiAgICAgICJ1cmkiOiAiaHR0cDovL2xpbmVjb3JwLmNvbS8iCiAgICB9CiAgfSwKICAiYm9keSI6IHsKICAgICJ0eXBlIjogImJveCIsCiAgICAibGF5b3V0IjogInZlcnRpY2FsIiwKICAgICJjb250ZW50cyI6IFsKICAgICAgewogICAgICAgICJ0eXBlIjogInRleHQiLAogICAgICAgICJ0ZXh0IjogIueEoeaWmeaYoOeUu+ODgeOCseODg+ODiOaKvemBuCIsCiAgICAgICAgIndlaWdodCI6ICJib2xkIiwKICAgICAgICAic2l6ZSI6ICJ4bCIKICAgICAgfSwKICAgICAgewogICAgICAgICJ0eXBlIjogImJveCIsCiAgICAgICAgImxheW91dCI6ICJiYXNlbGluZSIsCiAgICAgICAgIm1hcmdpbiI6ICJtZCIsCiAgICAgICAgImNvbnRlbnRzIjogWwogICAgICAgICAgewogICAgICAgICAgICAidHlwZSI6ICJpY29uIiwKICAgICAgICAgICAgInNpemUiOiAic20iLAogICAgICAgICAgICAidXJsIjogImh0dHBzOi8vc2Nkbi5saW5lLWFwcHMuY29tL24vY2hhbm5lbF9kZXZjZW50ZXIvaW1nL2Z4L3Jldmlld19nb2xkX3N0YXJfMjgucG5nIgogICAgICAgICAgfSwKICAgICAgICAgIHsKICAgICAgICAgICAgInR5cGUiOiAiaWNvbiIsCiAgICAgICAgICAgICJzaXplIjogInNtIiwKICAgICAgICAgICAgInVybCI6ICJodHRwczovL3NjZG4ubGluZS1hcHBzLmNvbS9uL2NoYW5uZWxfZGV2Y2VudGVyL2ltZy9meC9yZXZpZXdfZ29sZF9zdGFyXzI4LnBuZyIKICAgICAgICAgIH0sCiAgICAgICAgICB7CiAgICAgICAgICAgICJ0eXBlIjogImljb24iLAogICAgICAgICAgICAic2l6ZSI6ICJzbSIsCiAgICAgICAgICAgICJ1cmwiOiAiaHR0cHM6Ly9zY2RuLmxpbmUtYXBwcy5jb20vbi9jaGFubmVsX2RldmNlbnRlci9pbWcvZngvcmV2aWV3X2dvbGRfc3Rhcl8yOC5wbmciCiAgICAgICAgICB9LAogICAgICAgICAgewogICAgICAgICAgICAidHlwZSI6ICJpY29uIiwKICAgICAgICAgICAgInNpemUiOiAic20iLAogICAgICAgICAgICAidXJsIjogImh0dHBzOi8vc2Nkbi5saW5lLWFwcHMuY29tL24vY2hhbm5lbF9kZXZjZW50ZXIvaW1nL2Z4L3Jldmlld19nb2xkX3N0YXJfMjgucG5nIgogICAgICAgICAgfSwKICAgICAgICAgIHsKICAgICAgICAgICAgInR5cGUiOiAiaWNvbiIsCiAgICAgICAgICAgICJzaXplIjogInNtIiwKICAgICAgICAgICAgInVybCI6ICJodHRwczovL3NjZG4ubGluZS1hcHBzLmNvbS9uL2NoYW5uZWxfZGV2Y2VudGVyL2ltZy9meC9yZXZpZXdfZ3JheV9zdGFyXzI4LnBuZyIKICAgICAgICAgIH0sCiAgICAgICAgICB7CiAgICAgICAgICAgICJ0eXBlIjogInRleHQiLAogICAgICAgICAgICAidGV4dCI6ICI0LjAiLAogICAgICAgICAgICAic2l6ZSI6ICJzbSIsCiAgICAgICAgICAgICJjb2xvciI6ICIjOTk5OTk5IiwKICAgICAgICAgICAgIm1hcmdpbiI6ICJtZCIsCiAgICAgICAgICAgICJmbGV4IjogMAogICAgICAgICAgfQogICAgICAgIF0KICAgICAgfSwKICAgICAgewogICAgICAgICJ0eXBlIjogImJveCIsCiAgICAgICAgImxheW91dCI6ICJ2ZXJ0aWNhbCIsCiAgICAgICAgIm1hcmdpbiI6ICJsZyIsCiAgICAgICAgInNwYWNpbmciOiAic20iLAogICAgICAgICJjb250ZW50cyI6IFsKICAgICAgICAgIHsKICAgICAgICAgICAgInR5cGUiOiAiYm94IiwKICAgICAgICAgICAgImxheW91dCI6ICJiYXNlbGluZSIsCiAgICAgICAgICAgICJzcGFjaW5nIjogInNtIiwKICAgICAgICAgICAgImNvbnRlbnRzIjogWwogICAgICAgICAgICAgIHsKICAgICAgICAgICAgICAgICJ0eXBlIjogInRleHQiLAogICAgICAgICAgICAgICAgInRleHQiOiAiTnVtYmVyIiwKICAgICAgICAgICAgICAgICJjb2xvciI6ICIjYWFhYWFhIiwKICAgICAgICAgICAgICAgICJzaXplIjogInNtIiwKICAgICAgICAgICAgICAgICJmbGV4IjogMgogICAgICAgICAgICAgIH0sCiAgICAgICAgICAgICAgewogICAgICAgICAgICAgICAgInR5cGUiOiAidGV4dCIsCiAgICAgICAgICAgICAgICAidGV4dCI6ICIzQUJFLTE0RjgtOUExRi0zRzFUIiwKICAgICAgICAgICAgICAgICJ3cmFwIjogdHJ1ZSwKICAgICAgICAgICAgICAgICJjb2xvciI6ICIjNjY2NjY2IiwKICAgICAgICAgICAgICAgICJzaXplIjogInNtIiwKICAgICAgICAgICAgICAgICJmbGV4IjogNQogICAgICAgICAgICAgIH0KICAgICAgICAgICAgXQogICAgICAgICAgfSwKICAgICAgICAgIHsKICAgICAgICAgICAgInR5cGUiOiAiYm94IiwKICAgICAgICAgICAgImxheW91dCI6ICJiYXNlbGluZSIsCiAgICAgICAgICAgICJzcGFjaW5nIjogInNtIiwKICAgICAgICAgICAgImNvbnRlbnRzIjogWwogICAgICAgICAgICAgIHsKICAgICAgICAgICAgICAgICJ0eXBlIjogInRleHQiLAogICAgICAgICAgICAgICAgInRleHQiOiAi44GK44KB44Gn44Go44GG44GU44GW44GE44G+44GZISIsCiAgICAgICAgICAgICAgICAid3JhcCI6IHRydWUsCiAgICAgICAgICAgICAgICAiY29sb3IiOiAiIzY2NjY2NiIsCiAgICAgICAgICAgICAgICAic2l6ZSI6ICJzbSIsCiAgICAgICAgICAgICAgICAiZmxleCI6IDUKICAgICAgICAgICAgICB9CiAgICAgICAgICAgIF0KICAgICAgICAgIH0KICAgICAgICBdCiAgICAgIH0KICAgIF0KICB9Cn0=';
		}
	else{
        $printmsg = 'Lose!';
		$msg='ewogICJ0eXBlIjogImJ1YmJsZSIsCiAgImhlcm8iOiB7CiAgICAidHlwZSI6ICJpbWFnZSIsCiAgICAidXJsIjogImh0dHBzOi8vbGluZWJvdC53LWhlYWRzLmNvbS9XaW4vaW1hZ2VzL2cucG5nIiwKICAgICJzaXplIjogImZ1bGwiLAogICAgImFzcGVjdFJhdGlvIjogIjIwOjEzIiwKICAgICJhc3BlY3RNb2RlIjogImNvdmVyIiwKICAgICJhY3Rpb24iOiB7CiAgICAgICJ0eXBlIjogInVyaSIsCiAgICAgICJ1cmkiOiAiaHR0cDovL2xpbmVjb3JwLmNvbS8iCiAgICB9CiAgfSwKICAiYm9keSI6IHsKICAgICJ0eXBlIjogImJveCIsCiAgICAibGF5b3V0IjogInZlcnRpY2FsIiwKICAgICJjb250ZW50cyI6IFsKICAgICAgewogICAgICAgICJ0eXBlIjogInRleHQiLAogICAgICAgICJ0ZXh0IjogIueEoeaWmeaYoOeUu+ODgeOCseODg+ODiOaKvemBuCIsCiAgICAgICAgIndlaWdodCI6ICJib2xkIiwKICAgICAgICAic2l6ZSI6ICJ4bCIKICAgICAgfSwKICAgICAgewogICAgICAgICJ0eXBlIjogImJveCIsCiAgICAgICAgImxheW91dCI6ICJiYXNlbGluZSIsCiAgICAgICAgIm1hcmdpbiI6ICJtZCIsCiAgICAgICAgImNvbnRlbnRzIjogWwogICAgICAgICAgewogICAgICAgICAgICAidHlwZSI6ICJpY29uIiwKICAgICAgICAgICAgInNpemUiOiAic20iLAogICAgICAgICAgICAidXJsIjogImh0dHBzOi8vc2Nkbi5saW5lLWFwcHMuY29tL24vY2hhbm5lbF9kZXZjZW50ZXIvaW1nL2Z4L3Jldmlld19nb2xkX3N0YXJfMjgucG5nIgogICAgICAgICAgfSwKICAgICAgICAgIHsKICAgICAgICAgICAgInR5cGUiOiAiaWNvbiIsCiAgICAgICAgICAgICJzaXplIjogInNtIiwKICAgICAgICAgICAgInVybCI6ICJodHRwczovL3NjZG4ubGluZS1hcHBzLmNvbS9uL2NoYW5uZWxfZGV2Y2VudGVyL2ltZy9meC9yZXZpZXdfZ29sZF9zdGFyXzI4LnBuZyIKICAgICAgICAgIH0sCiAgICAgICAgICB7CiAgICAgICAgICAgICJ0eXBlIjogImljb24iLAogICAgICAgICAgICAic2l6ZSI6ICJzbSIsCiAgICAgICAgICAgICJ1cmwiOiAiaHR0cHM6Ly9zY2RuLmxpbmUtYXBwcy5jb20vbi9jaGFubmVsX2RldmNlbnRlci9pbWcvZngvcmV2aWV3X2dvbGRfc3Rhcl8yOC5wbmciCiAgICAgICAgICB9LAogICAgICAgICAgewogICAgICAgICAgICAidHlwZSI6ICJpY29uIiwKICAgICAgICAgICAgInNpemUiOiAic20iLAogICAgICAgICAgICAidXJsIjogImh0dHBzOi8vc2Nkbi5saW5lLWFwcHMuY29tL24vY2hhbm5lbF9kZXZjZW50ZXIvaW1nL2Z4L3Jldmlld19nb2xkX3N0YXJfMjgucG5nIgogICAgICAgICAgfSwKICAgICAgICAgIHsKICAgICAgICAgICAgInR5cGUiOiAiaWNvbiIsCiAgICAgICAgICAgICJzaXplIjogInNtIiwKICAgICAgICAgICAgInVybCI6ICJodHRwczovL3NjZG4ubGluZS1hcHBzLmNvbS9uL2NoYW5uZWxfZGV2Y2VudGVyL2ltZy9meC9yZXZpZXdfZ3JheV9zdGFyXzI4LnBuZyIKICAgICAgICAgIH0sCiAgICAgICAgICB7CiAgICAgICAgICAgICJ0eXBlIjogInRleHQiLAogICAgICAgICAgICAidGV4dCI6ICI0LjAiLAogICAgICAgICAgICAic2l6ZSI6ICJzbSIsCiAgICAgICAgICAgICJjb2xvciI6ICIjOTk5OTk5IiwKICAgICAgICAgICAgIm1hcmdpbiI6ICJtZCIsCiAgICAgICAgICAgICJmbGV4IjogMAogICAgICAgICAgfQogICAgICAgIF0KICAgICAgfSwKICAgICAgewogICAgICAgICJ0eXBlIjogImJveCIsCiAgICAgICAgImxheW91dCI6ICJ2ZXJ0aWNhbCIsCiAgICAgICAgIm1hcmdpbiI6ICJsZyIsCiAgICAgICAgInNwYWNpbmciOiAic20iLAogICAgICAgICJjb250ZW50cyI6IFsKICAgICAgICAgIHsKICAgICAgICAgICAgInR5cGUiOiAiYm94IiwKICAgICAgICAgICAgImxheW91dCI6ICJiYXNlbGluZSIsCiAgICAgICAgICAgICJzcGFjaW5nIjogInNtIiwKICAgICAgICAgICAgImNvbnRlbnRzIjogWwogICAgICAgICAgICAgIHsKICAgICAgICAgICAgICAgICJ0eXBlIjogInRleHQiLAogICAgICAgICAgICAgICAgInRleHQiOiAi5qyh44Gu5qmf5Lya44GrISEiLAogICAgICAgICAgICAgICAgIndyYXAiOiB0cnVlLAogICAgICAgICAgICAgICAgImNvbG9yIjogIiM2NjY2NjYiLAogICAgICAgICAgICAgICAgInNpemUiOiAic20iLAogICAgICAgICAgICAgICAgImZsZXgiOiA1CiAgICAgICAgICAgICAgfQogICAgICAgICAgICBdCiAgICAgICAgICB9CiAgICAgICAgXQogICAgICB9CiAgICBdCiAgfQp9';
		}
	?>
	$.ajax({
	url:'../send_broadcast.php',
	async:true,// false 일 경우 동기 요청으로 변경
	type:'POST',
	data:{
		msg_content:
		'<?php echo $msg;?>',// 전송할 데이터
	dataType:'text',// xml, json, script, html
	beforeSend:function(jqXHR) {},// 서버 요청 전 호출 되는 함수 return false; 일 경우 요청 중단
	success:function(jqXHR) {},// 요청 완료 시
	error:function(jqXHR) {},// 요청 실패.
	complete:function(jqXHR) {}// 요청의 실패, 성공과 상관 없이 완료 될 경우 호출
    }
});
}
);
self.close();


</script>

</body>
</html>