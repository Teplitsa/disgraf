<?
define("CONST_TIME",     "24");
define("REFRESH_TIME",     "8000");

class access { 
/*sessions_company*//////////////////////////////////////////////
    function sesion_destroy()
    {
    	bd_ins('DELETE FROM `session` WHERE user='.$_SESSION['id']); 
    	unset($_SESSION['id'],$_SESSION['first_name'],$_SESSION['last_name'],$_SESSION['email'],$_SESSION['key']);
    	setcookie(session_name(), session_id(), time()-60*60*CONST_TIME);
    	session_unset();
    	session_destroy();
    }
    
    function sesion_start($user)
    {
    	session_start();
    	unset($_SESSION['id'],$_SESSION['first_name'],$_SESSION['last_name'],$_SESSION['email'],$_SESSION['key']);
    	$_SESSION['id'] = $user['id'];
    	$_SESSION['first_name'] = $user['first_name'];
    	$_SESSION['last_name'] = $user['last_name'];
    	$_SESSION['email'] = $user['email'];
    	$_SESSION['key'] = md5(uniqid(rand(), true));
    	
    	$session = bd_ask('SELECT * FROM `session` where user = '.$user['id'],'');
    	if ($session['id'])
    	{
    		bd_ins('UPDATE `session` SET session_key="'.$_SESSION['key'].'", session_time='.time().' WHERE user='.$user['id']); 
    	} else
    	{
    		bd_ins('INSERT INTO `session` (`session_key`, `session_time`, `user`) VALUES ( "'.$_SESSION['key'].'", '.time().', '.$_SESSION['id'].')');
    	}
    }
    
    /*Access*//////////////////////////////////////////////////////
    function exit_panel($not_update)
    {
        $this->sesion_destroy();
    	if ($not_update==0) { header('Location: /');} 
    	else if ($not_update==1) {echo ' window.location.href = "/";';}
    }
    
    function access_page($not_update)
    {
    	if (isset($_REQUEST[session_name()]))
    	{
    		session_start();
    		$sesion = bd_ask('SELECT * FROM `session` where user = '.$_SESSION['id'],'');
    		$user = bd_ask('SELECT * FROM `user` where id = '.$_SESSION['id'],'');
    		if ((time()-$sesion['session_time'])<(60*CONST_TIME) && $sesion['session_key'] == $_SESSION['key'])
    		{
    		    if ($not_update==0) 
    		    {
    		        $_SESSION['key'] = md5(uniqid(rand(), true));
    		        bd_ins('UPDATE `session` SET session_key="'.$_SESSION['key'].'", session_time='.time().' WHERE user='.$_SESSION['id']);  
    		    }
    		}
    		else 
    		{
    			$this->exit_panel($not_update);
    		}
    	} else 
    	{
    		$this->exit_panel($not_update);
    	}
    }
    
}


/*Date time*//////////////////////////////////////////////
function split_date($input_date,$status)
{
    $level1 = explode(" ", $input_date);
    $date = explode(".", $level1[0]);
    $time = explode(":", $level1[1]);
    $ret['d']=$date[2];
    $ret['mon']=$date[1];
    $ret['y']=$date[0];
    $ret['h']=$time[0];
    $ret['min']=$time[1];
    if ($status==1) 
    {
        return $ret['d'].'.'.$ret['mon'].'.'.$ret['y'].' '.$ret['h'].':'.$ret['min'];
    } else
    {
        return $ret;
    }
}

/*Data base*//////////////////////////////////////////////
function bd_ins($input_request)
{
	 mysql_query($input_request); 
	 return mysql_insert_id(); 
}

function bd_ask($input_request, $input_field)
{
	$request = mysql_query($input_request); 
	$request_ans = mysql_fetch_array($request);
	if ($input_field == '')
	{
		return $request_ans;
	} else 
	{
		return $request_ans[$input_field];
	}
}









?>