
	<table width='157' height='157' border='0' cellpadding='0' cellspacing='4'>
    <tr><td height='1' colspan='3' bgcolor=''></td></tr>
    <tr><td width='1' bgcolor=''></td>
	<td align=center valign='bottom'><table height=26><tr><td></td></tr></table>
	
	<table  border='0' cellpadding='0' cellspacing='0'><tr><td><span id="COUNTER"></span></td></tr></table><br>

	<script language="JavaScript">

	var then = new Date('Mar 30,1977') // 날짜 설정
	var now = new Date()
	var Total_sec = Math.floor((now.getTime() - then.getTime()) / 1000)

	function Day_counter(){
    Remain_days = Math.floor(Total_sec / 86400)
    Remain_tot_sec = Total_sec - 86400 * Remain_days
    Remain_hour = Math.floor(Remain_tot_sec / 3600)
    tmp = Remain_tot_sec - Remain_hour * 3600
    Remain_minute = Math.floor(tmp / 60)
    Remain_sec = Math.floor(tmp % 60)

    Remain_days = Remain_days + '일 '
        if(Remain_sec < 10)Remain_sec = '0' + Remain_sec
        if(Remain_minute < 10)Remain_minute = '0' + Remain_minute
        if(Remain_hour <= 0)Remain_hour = ''
            else Remain_hour = Remain_hour + '시간 '

                COUNTER.innerHTML = '' + Remain_days + Remain_hour + Remain_minute + '분 ' + Remain_sec + '초' + ''
                Total_sec++
}
Day_counter()
setInterval("Day_counter()",1000)

</script>

<script type="text/javascript" src="/webpage/common/jquerypack.js"></script>
<script type="text/javascript" src="/webpage/common/stepcarousel.js"></script>

<style type="text/css">

.stepcarousel{
position: relative; /*leave this value alone*/
border: 1px solid gray;
overflow: scroll; /*leave this value alone*/
width: 150px;
height: 225px; /*Height should enough to fit largest content's height*/
}

.stepcarousel .belt{
position: absolute; /*leave this value alone*/
left: 0;
top: 0;
}

.stepcarousel .panel{
float: left; /*leave this value alone*/
overflow: hidden; /*clip content that go outside dimensions of holding panel DIV*/
margin: 0px; /*margin around each panel*/
width: 150px; /*Width of each panel holding each content. If removed, widths should be individually defined on each content DIV then. */
}
</style>


<script type="text/javascript">

stepcarousel.setup({
    galleryid: 'mygallery', //id of carousel DIV
    beltclass: 'belt', //class of inner "belt" DIV containing all the panel DIVs
    panelclass: 'panel', //class of panel DIVs each holding content
    statusvars: ['statusA', 'statusB', 'statusC'], //register 3 variables that contain current panel (start), current panel (last), and total panels
    contenttype: ['inline'] //content setting ['inline'] or ['external', 'path_to_external_file']
})

</script>
</head>
<body>


<? // if( $session_id == "vishopx" ) { ?>

<div id="mygallery" class="stepcarousel">
    <div class="belt">
<?
	$main_image_q=mysql_query("select main_image,main_image_top from member where id ='$home_db'",$db);
	$main_image=mysql_fetch_array($main_image_q); 

	$cut = explode("/",$main_image[main_image]); for($run = 0;$run < count($cut);$run++){ 
	
	$image_size = GetImageSize("$Root_Url/$home_db/file_bank/main_image/$cut[$run]");	$origwidth = $image_size[0]; 	$height	= $image_size[1];  
?>
	<div class='panel'><a href="javascript:MM_openBrWindow('/webpage/common/big_image.htm?directory=vishopx&where=main_image&file_name=<?=$cut[$run]?>', 'view_image', 'scrollbars=no,width=<?=$origwidth?>,height=<?=$height?>')"><img src='/<?=$home_db?>/file_bank/main_image/small/<?=$cut[$run]?>' width='150' height='225' border='0' alt='이아람 bluesy 재즈 민튼스 에반스 자전거 광명 키텔77 부산 53사 남자 남성' title='이아람 bluesy 재즈 민튼스 에반스 자전거 광명 키텔77 부산 53사 남자 남성'></div>
 
 <?
	 }	
?>

    </div>
</div>

	<table width='160' border='0' cellpadding='0' cellspacing='0'>
    <tr><td width='40'><a href="javascript:stepcarousel.stepBy('mygallery', 1)"><img src='/webpage/image/icon_17.gif' border='0'></a></td>
	<td background='/webpage/image/b_10.gif'></td>
    <td width='40'><a href="javascript:stepcarousel.stepBy('mygallery', -1)"><img src='/webpage/image/icon_18.gif' border='0'></a></td></tr>
    </table>
	</td>
	<td width='1' bgcolor=''></td></tr><tr bgcolor=''><td height='1' colspan='3'></td></tr>
    </table>

<? //} ?>
	
	<table width='157' height="60" border='1' cellpadding='0' cellspacing='0'>
    <tr style="border-color:red;background-color:yellow">
	<td valign="middle" align="center">
		<a href="/wedding/" target="_blank"><img src="/webpage/image/wedding.png" width="150px" title="이아람 bluesy 재즈 민튼스 에반스 자전거 광명 키텔77 부산 53사 남자 남성" alt="이아람 bluesy 재즈 민튼스 에반스 자전거 광명 키텔77 부산 53사 남자 남성"></a>
	</td></tr>
    </table>

	<table width='157' height='5' border='0' cellpadding='0' cellspacing='0'><tr><td></td></tr></form></table>
<?

if(!$session_id) { 

include "/home/hosting_users/leeahram/www/webpage/member/start_main.js";
$url=$HTTP_REFERER;
?>

	<TABLE width='100%' border='0' cellpadding='1' cellspacing='0' bgcolor='#B7B986'>
	<form name='login' method='post' onsubmit='return check()'>	
	<input type=hidden  name=url value="<?=urlencode($url)?>">
	<table width='154' height='46' border='0' cellpadding='0' cellspacing='0'>
	<tr>
	<td width='5'><img src='/webpage/image/icon_03.gif' width='5' height='5'></td>
    <td>&nbsp;ID</td><td><input name="id" size="7" class='normal'></td>ff
    <td  width=32 rowspan='2' align=center><input type=submit value='확인' class="normal" style="height:45px"></td>
    </tr>
	<tr><td width='5'><img src='/webpage/image/icon_03.gif' width='5' height='5'></td>
    <td>&nbsp;PW</td><td><input name=pass type="password" size="7" class='normal'></td>
    </tr></table>

	<table width='157' height='26' border='0' cellpadding='0' cellspacing='0'><tr> 
    <td width='12' align='center'><img src='/webpage/image/icon_03.gif' width='5' height='5'></td>
	<td><a href=/webpage/member/member.htm>회원가입</a></td>

	<td width='12' align='right'><img src='/webpage/image/icon_03.gif' width='5' height='5'></td>
	<td align=right>ID / PW 분실</td>

	</tr></tr></form>
	</table>
	
<?	
	} else { 

echo"

	<TABLE width='100%' border='0' cellpadding='1' cellspacing='0' bgcolor='#B7B986'>
	<table width='154' height='26' border='0' cellpadding='0' cellspacing='0'><tr>
	<td width='12'><img src='/webpage/image/icon_03.gif' width='5' height='5'></td>
    <td>";
	
	if($session_id=="vishopx") { echo"<a href=../admin/>"; }

echo"	
	{$session_name}님 안녕하세요</td>
    </tr></table>

	<table width='154' height='26' border='0' cellpadding='0' cellspacing='0'><tr> 
	<td width='12'><img src='/webpage/image/icon_03.gif' width='5' height='5'></td><td><a href=/webpage/member/member.htm>정보 수정</td>
	<td width='12'><img src='/webpage/image/icon_03.gif' width='5' height='5'></td><td><a href=/webpage/member/logout.php?url=$_SERVER[PHP_SELF]>로그 아웃</a></td>
	<td align=right></td>
	</tr></form>
	</table>"; }

echo"
	<table width='157' height='1' border='0' cellpadding='0' cellspacing='0' background='/webpage/image/pattern_dot_black.gif'>
    <tr><td></td></tr></table>";

 if( $session_id == "vishopx" ) {

echo"
    <table width='100%' height='10' border='0' cellpadding='0' cellspacing='0'><tr><td></td></tr></table>

	<table width='157' border='0' cellpadding='2' cellspacing='0' bgcolor='#3c3c3c' height=24>
    <tr><td width=25 valign=bottom>&nbsp; <img src='/webpage/image/schedule.gif' border=0 width=15 height=15></td><td>&nbsp;<strong><a href=/webpage/schedule/index.htm><font color='#FFFFFF'>Schedule</font></strong></td></tr>
    </table>

	<table width='157' border='0' cellpadding='0' cellspacing='0'>
    <tr><td height='1' colspan='3' bgcolor='#FFFFFF'></td></tr>
    <tr><td width='1' bgcolor='#FFFFFF'></td><td>
	
	<table width='100%' border='0' cellpadding='2' cellspacing='0'>
    <tr><td valign=middle width=28>오늘</td><td valign=bottom>";

	$today=date("Y{}m{}d");
	$today2=date("m{}d");
	
	$Get_Schedule_Q="select num,body,diary_date from vishopx where ground1='schedule' and diary_date='$today' AND pass ='' order by num desc";

	$Get_Schedule = mysql_query($Get_Schedule_Q,$db);
	while($Schedule=mysql_fetch_array($Get_Schedule)) {  
	$iiii++;
	$strings="$Schedule[body]";	$str02=strlen($strings);	$lenstr=16;
	for($k=0; $k<$lenstr-1; $k++) {	if(ord(substr($strings, $k, 1))>127) $k++; 	} 
	if($str02 > $lenstr) { $str01=substr($strings, 0, $k)."..";	}	else	{ $str01=$strings; }	
	$body=$str01;

	echo"<a href=# onClick=\"MM_openBrWindow('/webpage/schedule/view.htm?action=Schedule&mode=view&num=$Schedule[num]','OpinionWindow','statusbars=no,scrollbars=yes,width=520,height=500')\" title='$Schedule[body]')\">$body</a><br>"; 
														}

	if($iiii=='')  {echo"<table><tr><td></td></tr></table>Not Schedule.";}

echo"
	</td></tr>
	</table>
		
	<table width='90%' border='0' cellpadding='0' cellspacing='0' align=center><tr><td bgcolor=yellow></td></tr></table>
	<table width='90%' border='0' cellpadding='0' cellspacing='0' align=center><tr><td height=4></td></tr></table>
	
	<table width='100%' border='0' cellpadding='2' cellspacing='0'>
    <tr><td width=28>내일</td><td>";

	$year=date(Y);
	$month=date(m);
	$day=date(d)+1;

	$length=strlen($day);
	if($length=='1'){$day="0"."$day";} else {$day="$day";}

	$yday="$year"."{}"."$month"."{}"."$day";
	$yday2="$month"."{}"."$day";
	
	$Get_Schedule_Q="select num,body,diary_date from vishopx where ground1='schedule' and diary_date='$yday' AND pass ='' order by num desc";

	$Get_Schedule = mysql_query($Get_Schedule_Q,$db);
	while($Schedule=mysql_fetch_array($Get_Schedule)) {

	$iiiii++;
	$strings="$Schedule[body]";	$str02=strlen($strings);	$lenstr=16;
	for($k=0; $k<$lenstr-1; $k++) {	if(ord(substr($strings, $k, 1))>127) $k++; 	}
	if($str02 > $lenstr) { $str01=substr($strings, 0, $k)."..";	}	else	{ $str01=$strings; }
	$body=$str01;

	if($session_id=="vishopx") {
	echo"<a href=# onClick=\"MM_openBrWindow('/webpage/schedule/view.htm?action=Schedule&mode=view&num=$Schedule[num]','OpinionWindow','statusbars=no,scrollbars=yes,width=520,height=500')\" title='$Schedule[body]')\">$body</a><br>"; 
	} else { echo "Not Schedule."; } 								
													}							

	if($iiiii=='')  {echo"Not Schedule.";}

echo"
	</td></tr>
	</table>
	
	</td>
 
	<td width='1' bgcolor='#FFFFFF'></td>
    </tr><tr bgcolor='#FFFFFF'> 
	<td height='1' colspan='3'></td></tr>
    </table>

    <table width='100%' height='10' border='0' cellpadding='0' cellspacing='0'><tr><td></td></tr></table>

	<table width='157' height='1' border='0' cellpadding='0' cellspacing='0' background='/webpage/image/pattern_dot_black.gif'>
    <tr><td></td></tr></table>
  
    <table width='100%' height='10' border='0' cellpadding='0' cellspacing='0'><tr><td></td></tr></table>

	<table width='157' border='0' cellpadding='2' cellspacing='0' bgcolor='#3c3c3c'>
    <tr><td><strong> <img src='/webpage/image/plean.gif' border=0> <a href=/webpage/plean/?ground2=214><font color='#FFFFFF'>Note</font></strong></td></tr>
    </table>
	<table width='157' border='0' cellpadding='0' cellspacing='0'>
    <tr><td height='1' colspan='3' bgcolor='#FFFFFF'></td></tr>
    <tr><td width='1' bgcolor='#FFFFFF'></td><td>
	
	<table width='100%' border='0' cellpadding='4' cellspacing='0'>
    <tr><td>";

	$today=date("Y{}m{}d");
	$Get_Schedule_Q="select num,title from vishopx where ground1='board' and ground2='214' and secret ='' order by num desc";

	$Get_Schedule = mysql_query($Get_Schedule_Q,$db);
	while($Schedule=mysql_fetch_array($Get_Schedule)) {  
	$strings="$Schedule[title]";	$str02=strlen($strings);	$lenstr=22;
	for($k=0; $k<$lenstr-1; $k++) {	if(ord(substr($strings, $k, 1))>127) $k++; 	} 
	if($str02 > $lenstr) { $str01=substr($strings, 0, $k)."..";	}	else	{ $str01=$strings; }	
	$Schedule[title]=$str01;

	echo"&nbsp;<a href='/webpage/plean/read.htm?num=$Schedule[num]&ground2=214'>$Schedule[title]</a><br>"; }

echo"
	</td></tr>
	</table></td>
 
	<td width='1' bgcolor='#FFFFFF'></td>
    </tr><tr bgcolor='#FFFFFF'> 
	<td height='1' colspan='3'></td></tr>
    </table>
	<table width='100%' height='10' border='0' cellpadding='0' cellspacing='0'><tr><td></td></tr></table>

	<table width='157' height='1' border='0' cellpadding='0' cellspacing='0' background='/webpage/image/pattern_dot_black.gif'>
    <tr><td></td></tr></table>";
 }
echo"
	<table width='100%' height='10' border='0' cellpadding='0' cellspacing='0'><tr><td></td></tr></table>";

# $home_db != vishopx

echo"
	<table width='157' border='0' cellpadding='2' cellspacing='0' bgcolor='#3c3c3c'>
    <tr><td><strong> <img src='/webpage/image/update.gif' border=0> <font color='#FFFFFF'>Update</font></strong></td></tr>
    </table>
	<table width='157' border='0' cellpadding='0' cellspacing='0'>
    <tr><td height='1' colspan='3' bgcolor='#FFFFFF'></td></tr>
    <tr><td width='1' bgcolor='#FFFFFF'></td><td>
	
	<table width='100%' border='0' cellpadding='8' cellspacing='0'>
    <tr><td>";

	$today=date("Y-m-d");	
	$y=date(Y); 	$m=date(m); 	$d=date(d) -3;

	$st = mktime(0,0,1,$m,$d,$y);

	$countmedia=mysql_result(mysql_query("select count(*) from video_list",$db),0,0);
	
	$todaycountmedia=mysql_result(mysql_query("select count(*) from video_list where input_date >= '$today'",$db),0,0);  

	$countboard=mysql_result(mysql_query("select count(*) from $home_db where ground1='board' and  ground3='board' or ground1='favorite'",$db),0,0);
	
	$todaycountboard=mysql_result(mysql_query("select count(*) from $home_db where ground1='board' and  ground3='board' and diary_date2 >= $st or ground1='favorite'",$db),0,0);  

	$countgallery=mysql_result(mysql_query("select count(*) from $home_db where ground1='gallery'",$db),0,0);  
	$todaycountgallery=mysql_result(mysql_query("select count(num) from $home_db where ground1='gallery' and diary_date2 >= $st",$db),0,0);  

	$countdiary=mysql_result(mysql_query("select count(*) from $home_db where ground1='diary'",$db),0,0);
	$todaycountdiary=mysql_result(mysql_query("select count(*) from $home_db where ground1='diary' and diary_date2 >= $st",$db),0,0);  

	$countguestbook=mysql_result(mysql_query("select count(*) from guest_book",$db),0,0);  
	$todaycountguestbook=mysql_result(mysql_query("select count(id) from guest_book where date2 >= $st ",$db),0,0);  

echo"
	<table border='0' cellpadding='1' cellspacing='0'><tr><td><a href=/webpage/video/>미디어 : $todaycountmedia / $countmedia";  

	if($todaycountmedia != 0){echo" &nbsp; <img src=/webpage/image/new.gif border=0>";}

echo" 
	</a></td></tr></table>";

echo"
	<table border='0' cellpadding='1' cellspacing='0'><tr><td><a href=/webpage/board/?ground2=3>게시판 : $todaycountboard / $countboard";  

	if($todaycountboard != 0){echo" &nbsp; <img src=/webpage/image/new.gif border=0>";}

echo" 
	</a></td></tr></table>

	<table border='0' cellpadding='1' cellspacing='0'><tr><td><a href=/webpage/gallery/?ground2=6&pnum=206>갤러리 : $todaycountgallery / $countgallery";  

	if($todaycountgallery != 0){echo" &nbsp; <img src=/webpage/image/new.gif border=0>";}

echo"
	</a></td></tr></table>
	
	<table border='0' cellpadding='1' cellspacing='0'><tr><td><a href=/webpage/diary/>일기장 : $todaycountdiary / $countdiary"; 
	
	if($todaycountdiary != 0){echo" &nbsp; <img src=/webpage/image/new.gif border=0>";}

echo"
	</a></td></tr></table>
	
	<table border='0' cellpadding='1' cellspacing='0'><tr><td><a href=/webpage/guestbook/>방명록 : $todaycountguestbook / $countguestbook"; 

	if($todaycountguestbook != 0){echo" &nbsp; <img src=/webpage/image/new.gif border=0>";}
	
echo"
	</a></td></tr></table>	
	</td></tr>
	</table></td>
 
	<td width='1' bgcolor='#FFFFFF'></td>
    </tr><tr bgcolor='#FFFFFF'> 
	<td height='1' colspan='3'></td></tr>
    </table>

	<table width='100%' height='10' border='0' cellpadding='0' cellspacing='0'><tr><td></td></tr></table>
	
	<table width='157' height='1' border='0' cellpadding='0' cellspacing='0' background='/webpage/image/pattern_dot_black.gif'><tr><td></td></tr></table>

	<table width='100%' height='10' border='0' cellpadding='0' cellspacing='0'><tr><td></td></tr></table>

	<table width='157' border='0' cellpadding='2' cellspacing='0' bgcolor='#3c3c3c'>
    <tr><td><strong> <img src='/vishopx/file_bank/icon/20051110123130.gif' width=17 height=17 border=0><font color='#FFFFFF'>최근 댓글</font></strong></td></tr>
    </table>
	<table width='157' border='0' cellpadding='0' cellspacing='0'>
    <tr><td height='1' colspan='3' bgcolor='#FFFFFF'></td></tr>
    <tr><td width='1' bgcolor='#FFFFFF'></td><td>
	
	<table width='100%' border='0' cellpadding='8' cellspacing='0'>
    <tr><td>";

	$Get_Ground_Q="select board_num,ground1,ground2 from vishopx where ground3='datgul' group by board_num order by num desc limit 5";

	$Get_Ground = mysql_query($Get_Ground_Q,$db);
	while($Ground=mysql_fetch_array($Get_Ground)) { 

	$Get_title_q=mysql_query("select title,num,ground2 from vishopx where num='$Ground[board_num]'",$db);
	$Get_title=mysql_fetch_array($Get_title_q); 

	$strings="$Get_title[title]";
	$str02=strlen($strings);
	$lenstr=20;
	for($k=0; $k<$lenstr-1; $k++) {	if(ord(substr($strings, $k, 1))>127) $k++; 	} 
	if($str02 > $lenstr) { $str01=substr($strings, 0, $k)."..";	}	else	{ $str01=$strings; }	
	$Get_title[title]=$str01;

	echo"
	<table border='0' cellpadding='1' cellspacing='1'><tr><td>";
	
	if($Ground[ground1]=='gallery')	{ echo"<a href=/webpage/$Ground[ground1]/?ground2=$Get_title[ground2]>$Get_title[title]";} else 

													{ echo"<a href=/webpage/$Ground[ground1]/read.htm?num=$Get_title[num]>$Get_title[title]";}
	echo"
	</td></tr></table>"; }

echo"	
	</td></tr>
	</table></td>
 
	<td width='1' bgcolor='#FFFFFF'></td>
    </tr><tr bgcolor='#FFFFFF'> 
	<td height='1' colspan='3'></td></tr>
    </table>

	<table width='100%' height='10' border='0' cellpadding='0' cellspacing='0'><tr><td></td></tr></table>
	<table width='157' height='1' border='0' cellpadding='0' cellspacing='0' background='/webpage/image/pattern_dot_black.gif'><tr><td></td></tr></table>
	<table width='100%' height='10' border='0' cellpadding='0' cellspacing='0'><tr><td></td></tr></table>

	<table width='157' border='0' cellpadding='2' cellspacing='0' bgcolor='#3c3c3c'>
    <tr><td><strong> <img src='/vishopx/file_bank/icon/20051110123130.gif' width=17 height=17 border=0><font color='#FFFFFF'>Best Hit</font></strong></td></tr>
    </table>
	<table width='157' border='0' cellpadding='0' cellspacing='0'>
    <tr><td height='1' colspan='3' bgcolor='#FFFFFF'></td></tr>
    <tr><td width='1' bgcolor='#FFFFFF'></td><td>
	
	<table width='100%' border='0' cellpadding='8' cellspacing='0'>
    <tr><td>";

	$Get_Ground_Q="select board_num,ground1,ground2,title,num,ref from vishopx where ground1='diary' order by ref desc limit 5";

	$Get_Ground = mysql_query($Get_Ground_Q,$db);
	while($Ground=mysql_fetch_array($Get_Ground)) { 

	$strings="$Ground[title]";
	$str02=strlen($strings);
	$lenstr=12;
	for($k=0; $k<$lenstr-1; $k++) {	if(ord(substr($strings, $k, 1))>127) $k++; 	} 
	if($str02 > $lenstr) { $str01=substr($strings, 0, $k)."..";	}	else	{ $str01=$strings; }	
	$Ground[title]=$str01;

	echo"
	<table border='0' cellpadding='1' cellspacing='1'><tr><td>
		
	<a href=/webpage/diary/read.htm?num=$Ground[num]>$Ground[title] (".number_format($Ground[ref]).")

	</td></tr></table>"; }
echo"	
	</td></tr>
	</table></td>
 
	<td width='1' bgcolor='#FFFFFF'></td>
    </tr><tr bgcolor='#FFFFFF'> 
	<td height='1' colspan='3'></td></tr>
    </table><br>";

/*
echo"
	<table width='157' border='0' cellpadding='0' cellspacing='0' bgcolor='#3c3c3c'>
    <tr><td><strong>  <img src='/vishopx/file_bank/icon/stoc.gif' border=0>&nbsp;<font color='#FFFFFF'>Stock</font></strong></td></tr>
    </table>
	<table width='157' border='0' cellpadding='0' cellspacing='0'>
    <tr><td height='1' colspan='3' bgcolor='#FFFFFF'></td></tr>
    <tr><td width='1' bgcolor='#FFFFFF'></td><td>
	
	<table width='100%' border='0' cellpadding='4' cellspacing='0'>
    <tr><td>
	<iframe src=/webpage/common/fund.html width=100% height=350 frameborder=0 scrolling=no></iframe>
	</td></tr>
	</table></td>
 
	<td width='1' bgcolor='#FFFFFF'></td>
    </tr><tr bgcolor='#FFFFFF'> 
	<td height='1' colspan='3'></td></tr>
    </table><br>";
*/  
?>
