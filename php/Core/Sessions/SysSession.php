<?php

namespace ongameuk\php\Core\Sessions;

use SessionHandlerInterface;
use ongameuk\php\Config\config;

class SysSession implements SessionHandlerInterface 
{ 
	private $ses_link_db; 
	public static $connectionInfo = '';

	public function open ( $savePath , $sessionName ) 
	{
		$ses_link_db = mysqli_connect(config::$glocal,
		SysSession::$connectionInfo['UID'],
		SysSession::$connectionInfo['PWD'],
		SysSession::$connectionInfo['Database']);

		if ($ses_link_db) { $this->ses_link_db = $ses_link_db; return true; }
		return false;
	} 
	
	public function close () 
	{
		mysqli_close($this->ses_link_db);
		return true;
	} 
	
	public function read ( $id ) 
	{
	 	if (!$this->ses_link_db) { return false; exit; }
	 	$result = mysqli_query($this->ses_link_db,"SELECT data FROM sessions WHERE id = '".$id."' ");
		if($row = mysqli_fetch_assoc($result)) return $row['data'];
		return '';
	} 
	
	public function write ( $id , $data ) 
	{
	 $access = time();
	 if ( (!empty($data)) and (!empty($access)) and (!empty($id)) and (!empty($this->ses_link_db)) and ($this->ses_link_db!=false) )
	 {
	  $result = mysqli_query($this->ses_link_db," SELECT id FROM sessions WHERE id = '$id' LIMIT 1; ");
	  if ($result->num_rows>0)
			$result = mysqli_query($this->ses_link_db,"Update sessions set access='$access',data='$data' where id='$id'; ");
	  else  $result = mysqli_query($this->ses_link_db,"INSERT INTO sessions (id,access,data) values ('$id',$access,'$data'); ");
	  return $result;
	 }
	 return true;	  
	} 
	
	public function destroy ( $id ) 
	{
	 return $result = mysqli_query($this->ses_link_db, "DELETE FROM sessions WHERE id = '$id' "); 
	} 
	
	public function gc ( $max ) 
	{
	 $old = time() - $max; 
	 if (!intval($old)) return;
	 //---------------------------
	 return $result = mysqli_query($this->ses_link_db, "DELETE FROM sessions WHERE access < $old "); 
	} 
}

?>