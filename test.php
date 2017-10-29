<?php
/**
 * @Author liyue <ityuer.com>
 * @time 
 * @Version 1.0.0
 * @Description  
 * ━━━PHP is the most beautiful languages in the world━━━
 */
	$name = $_POST['user_name'];
	$sex = $_POST['user_sex'];
	$age = $_POST['user_age'];
	 @mysql_connect('localhost','root','root');
	mysql_query(' use test');
	mysql_query('set names ust8');

	$sql = "select distinct(***),username from *** where daystatus=0 and ***=’{$yesterday}’ and daystatus=0" ;
	$res = mysql_query( $sql, $g_mysql ) or sys_exit( "系统忙，请稍候再试", mysql_error() ) ;
	$users = mysql_fetch_all( $res ) ; //获取所有参与者信息，每个人的信息唯一
	$award_users = array() ;//建立中奖数组
	if ( count( $users ))  {
		$nums = get_award3( $users ) ; //执行抽奖程序，返回中奖者的下标
		echo "获奖名单如下：" . "
		" ;
		foreach ( $nums as $key => $value ) {
			$award_users[] = $users[$value] ;
			echo "uid :" . $users[$value]['uid'] . " 昵称：" . $users[$value]['username'] "
			" ;
			$uids[$key] = $users[$value]['uid'] ;
		}
	}
	$_SESSION['users'] = " ;
	$_SESSION['users'] = $award_users ; //后台审核抽奖名单入库(确定)时用
	echo <<< EOF
	抽奖信息入库
	EOF;
	function get_award3( $users ) {//抽奖函数，为了防止有重复，多了个判断
	$count = count( $users ) ;
	$i = 0 ;
	$result = array() ;
	while ( $i < 3 ) {
	$j = rand( 0, $count – 1 ) ;
	if ( ! in_array( $j, $result ) ) {
	$result[$i] = $j ;
	$i++ ;
	}
	}
	return $result ;
	}
	?
	








