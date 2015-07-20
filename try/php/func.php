<?php
	function jshref($url=""){
		return "window.location.href='$url'";
	}
	function sessm($key,$val){
		return (isset($_SESSION[$key]) && $_SESSION[$key]==$val);
	}
	function init_db(){
		global $DB,$db_data;
		if($DB==null){
			$DB = new mysqli( $db_data['host'] , $db_data['user'] , $db_data['pass'] , $db_data['db']);
			Sql::init($DB);
		}
	}
	function closedb(){
		global $DB;
		if($DB!=null)
			$DB->close();
	}
	function getval($key,$arr,$default=null){
		 return ( ($arr!==null && isset($arr[$key])) ? $arr[$key] : $default );
	}
	function setval($key, &$arr, $val, $cnd) {
		 if($cnd)
		 	$arr[$key]=$val;
		 return $cnd;
	}
	function post($key,$default=null){
		return getval($key,$_POST,$default);
	}
	function isget($key){
		return isset($_GET[$key]);
	}
	function ispost($key){
		return isset($_POST[$key]);
	}
	function isses($key){
		return isset($_SESSION[$key]);
	}
	function get($key,$default=null){
		return getval($key,$_GET,$default);
	}
	function sets($key,$val){
		$_SESSION[$key]=$val;
	}
	function gets($key){
		return $_SESSION[$key];
	}


	function load_view($view,$inp=array()){
		global $view_default,$_ginfo;
		if(isset($view_default[$view]))
			$inp=Fun::mergeifunset($inp,$view_default[$view]);
		$inp=Fun::setifunset($inp,"page",$_ginfo["page"]);
		$inp=Fun::setifunset($inp,"islogin",User::loginType());
		$tem_name=Fun::getloadviewname($view);
		$templates=new Templates();
		if(method_exists($templates,$tem_name )){
			$templates->$tem_name($inp);
			return true;
		} else{
			$view="php/views/".$view;
			if(file_exists($view)){
				foreach($inp as $key=>$val){
					$$key=$val;
				}
				include $view;
				return true;
			} else{
				echo "MM Error : Unable to load view ".$view." Line ".__LINE__." in file ".__FILE__ ;
				return false;
			}
		}
	}

	function str2json($inp){
		$temp=json_decode($inp);
		if($temp)
			return (array)$temp;
		else
			return null;
	}

	function arr2option($arr,$type='intval'){
		$outp=array();
		for($i=0;$i<count($arr);$i++){
			$temp=array('disptext'=>$arr[$i],'val'=>( $type=='intval' ? $i+1 : $arr[$i] ));
			$outp[]=$temp;
		}
		return $outp;
	}

	function handle_disp($post_data,$actionarg=null){
		global $_ginfo;
		if($actionarg!=null)
			$post_data["action"]=$actionarg;
		$a=new Actiondisp();
		$outp=array("ec"=>-7);
		if(isset($post_data["action"])  ){
			$isvalid=isvalid_action($post_data);
			if(!($isvalid>0))
				$outp["ec"]=$isvalid;
			else{
				$func=$post_data["action"];
				if( method_exists($a,$post_data["action"])){
					$a->$func($post_data,$actionarg==null);
					return;
				}
				else if(islset($_ginfo,array("autoscroll",$post_data["action"]))) {
					$as_handle = autoscroll($post_data);
					$outp["data"]=Fun::getflds(array("min", "max", "minl", "maxl"), $as_handle);
					$outp["ec"]=1;
					if($actionarg==null)
						echo json_encode($outp)."\n";
					load_view($as_handle["load_view"], array("qresult"=>$as_handle["qresult"]));
					return;
				}
			}
		}
		if($actionarg==null)
			echo json_encode($outp)."\n";
	}

	function isvalid_action($post_data){
		global $_ginfo;
		if(isset($_ginfo["action_constrain"][$post_data["action"]])){
			$sarr=$_ginfo["action_constrain"][$post_data["action"]];
			$sarr=Fun::mergeifunset($sarr,array("users"=>"","need"=>array()));
			if(!(($sarr["users"]=="all" && User::islogin()) || $sarr["users"]=="" || in_array(User::loginType(), $sarr["users"]) ))
				return -2;
			if(!Fun::isAllSet($sarr["need"], $post_data))
				return -9;
		}
		return true;
	}

	function islset($data,$arr){
		for($i=0;$i<count($arr);$i++){
			if(!isset($data[$arr[$i]]))
				return false;
			$data=$data[$arr[$i]];
		}
		return true;
	}
	function getmyneed($fname){
		global $_ginfo;
		return $_ginfo["action_constrain"][$fname]["need"];
	}

	function handle_request($post_data){
		global $_ginfo;
		$b=new Actions();
		if(User::isloginas('u'))
			$a=new Userc();
		else if(User::isloginas('a'))
			$a=new Admin();
		else if(User::isloginas('s'))
			$a=new Store();
		else
			$a=$b;
		$outp=array("ec"=>-11);
		if(isset($post_data["action"])  ){
			$isvalid=isvalid_action($post_data);
			if(!($isvalid>0))
				$outp["ec"]=$isvalid;
			else{
				$func=$post_data["action"];
				if( method_exists($a,$post_data["action"]))
					$outp=$a->$func($post_data);
				else if( method_exists($b,$post_data["action"]))
					$outp=$b->$func($post_data);
				else if(islset($_ginfo,array("autoinsert",$post_data["action"]))) {
					$action_spec=$_ginfo["autoinsert"][$post_data["action"]];
					$action_spec=Fun::mergeifunset($action_spec,array("fixed"=>array(),"add"=>array()));
					$ins_data=Fun::getflds(getmyneed($post_data["action"]) , $post_data );
					$ins_data=Fun::mergeifunset($ins_data,$action_spec["add"]);
					$fixvalues=array("time"=>time(),"uid"=>User::loginId());
					foreach($action_spec["fixed"] as $i=>$val){
						$ins_data[$val]=$fixvalues[$val];
					}
					$outp["data"]=Sqle::insertVal($action_spec["table"],$ins_data);
					$outp["ec"]=1;
				}
			}
		}
		return $outp;
	}
	function resizeimg($filename,$tosave, $max_width, $max_height){
		$imginfo=getimagesize($filename);
		list($orig_width, $orig_height) = $imginfo;
		$type=$imginfo[2];


		$crop_width=$orig_width;
		$crop_height=$orig_height;
		if($orig_width*$max_height <= $orig_height*$max_width){
			$crop_height=$orig_width*$max_height/$max_width;
		}
		else{
			$crop_width=$orig_height*$max_width/$max_height;
		}

		$image_p = imagecreatetruecolor($max_width, $max_height);
		switch($type){
			case "1": 
				$image = imagecreatefromgif($filename); 
				$transparent = imagecolorallocatealpha($image_p, 0, 0, 0, 127);
				imagefill($image_p, 0, 0, $transparent);
				imagealphablending($image_p, true); 				
				break;
			case "2": $image = imagecreatefromjpeg($filename);break;
			case "3": 
				$image = imagecreatefrompng($filename);
				imagealphablending($image_p, false);
				imagesavealpha($image_p, true);
				break;
			default:  $image = imagecreatefromjpeg($filename);
		}
		imagecopyresampled($image_p, $image, 0, 0, ($orig_width-$crop_width)/2, ($orig_height-$crop_height)/2, $max_width, $max_height, $crop_width, $crop_height);

		$ext=pathinfo($tosave, PATHINFO_EXTENSION);

		switch($ext){
			case "gif": imagegif($image_p,$tosave); break;
			case "jpg": imagejpeg($image_p,$tosave,100); break;
			case "jpeg": imagejpeg($image_p,$tosave,100); break;
			case "png": imagepng($image_p,$tosave,0);break;
			default: imagejpeg($image_p,$tosave,100);
		}
		chmod($tosave,0777);
	}
	function genfilearr($name,$len,$start=1){
		$outp=array();
		for($i=$start;$i<$start+$len;$i++){
			$outp[]=str_replace("%d", $i, $name);
		}
		return $outp;
	}
	function getepm($inp=array()){
		return json_encode(Fun::mergeifunset($_POST,$inp));
	}
	function getegm(){
		return json_encode(Fun::mergeifunset($_GET,$inp));
	}
	function lastelm($arr){
		if(count($arr)==0)
			return null;
		else
			return $arr[count($arr)-1];
	}
	function firstelm($arr){
		if(count($arr)==0)
			return null;
		else
			return $arr[0];
	}
	function curfilename(){
		$cfname=firstelm(explode(".",lastelm(explode("/",$_SERVER['SCRIPT_FILENAME']))));
		if($cfname=='')
			$cfname="index";
		return $cfname;
	}
	function dict2keyval($arr){
		$outp=array();
		foreach($arr as $key=>$val)
			$outp[]=array("key"=>$key,"val"=>$val);
		return $outp;
	}
	function rquery($str,$data){
		preg_match_all("|{[^}]+}|U",$str,$matches);
		$matches=$matches[0];
		for($i=0;$i<count($matches);$i++){
			$key=substr($matches[$i],1,strlen($matches[$i])-2);
			$str=str_replace($matches[$i],$data[$key],$str);
		}
		return $str;
	}
	function myexplode($n,$st){
		$temp=explode($n,$st);
		return (count($temp)==1 && $temp[0]=="") ? array() : $temp;
	}
	function smilymsg($data){
		$data=str_replace("<3", ":heart:",$data );
		$data=htmlspecialchars($data);
		$exp=array(':)'=>'smile.png',':-)'=>'smile.png',':p'=>'p.png',':P'=>'p.png',':/'=>'angry.png',';)'=>'eye.png',':('=>'sad.png',':o'=>'question.png',':O'=>'question.png','<3'=>'heart.png',':*'=>'kiss.png',':-*'=>'kiss.png',':heart:'=>'heart.png');
		$exp1=array("\n"=>"<br>", "  "=>"&nbsp;&nbsp;", "\t"=>"&nbsp;&nbsp;&nbsp;");
		foreach($exp1 as $key=>$val){
			$data=str_replace($key, $val ,$data);
		}
		foreach($exp as $key=>$val){
			$data=str_replace($key,"<img  style='margin-bottom:-4px;' src='photo/usefull/".$val."' />"  ,$data);
		}
		return $data;
	}

	function setifunset(&$data,$key,$val){
		if(!isset($data[$key]))
			$data[$key]=$val;
		return $data;
	}

	function mergeifunset(&$a,$b){
		$keys=array_keys($b);
		for($i=0;$i<count($keys);$i++){
			if(!isset($a[$keys[$i]]))
				$a[$keys[$i]]=$b[$keys[$i]];
		}
		return $a;
	}
	function rit($toprint, $cond=true, $toprint_false=''){
		if($cond)
			return $toprint;
		else
			return $toprint_false;
	}
	function errormsg($ec,$cnd=true){
		global $_ginfo;
		return (($ec<0 && $cnd) ?getval($ec, $_ginfo["error"], "Error : ".$ec):"");
	}
	function convchars($inp){
		$conv=array("&" => "&amp;", '"' => "&quot;", "'" => "&#039;", "<" => "&lt;", ">" => "&gt;");
		foreach($conv as $i => $val) {
			$inp=str_replace($i, $val, $inp);
		}
		return $inp;
	}

	function mergeforce(&$a,$b){
		$keys=array_keys($b);
		for($i=0;$i<count($keys);$i++){
			$a[$keys[$i]]=$b[$keys[$i]];
		}
		return $a;
	}

	function msvalprint($inp) {//recursive function.
		if(gettype($inp) == "array") {
			$isnindex = (array_keys($inp) == Fun::oneToN(count($inp)-1, 0));//is natural indexed
			$otext = map(array_keys($inp), function($ind) use($isnindex, $inp) {
				return ($isnindex?"":"'".$ind."'=>").msvalprint($inp[$ind]);
			});
			return "array(".implode(", ", $otext).")";
		} else if(gettype($inp) == 'integer') {
			return $inp;
		} else {
			$inp = str_replace("'", "\\'", "".$inp);
			return "'".$inp."'";
		}
	}

	function g($inp) {
		global $$inp;
		return $$inp;
	}

	function s($inp, $val=null) {
		global $$inp;
		$$inp = $val;
	}

	function gi($inp) {
		return getval($inp, g("_ginfo"));
	}

	function getrefarr(&$inp) {
		$outp=array();
		foreach($inp as $i=>$val){
			$outp[] = &$inp[$i];
		}
		return $outp;
	}

	function gget() {
		$args = func_get_args();
		$args[0] = g(getval(0, $args));
		return call_user_func_array("listget", $args);
	}

	function giget() {
		$args = func_get_args();
		$args[0] = gi(getval(0, $args));
		return call_user_func_array("listget", $args);
	}
	
	function filter($list, $boolfunc) {
		$outp = array();
		foreach($list as $i => $val) {
			if($boolfunc($val, $i) === true) {
				$outp[] = $val;
			}
		}
		return $outp;
	}

	function map($list ,$func, $custom=array()) {
		mergeifunset($custom, array("isindexed" => false, "ismapkey"=>false));
		$outp = array();
		foreach($list as $i => $val) {
			if($custom["ismapkey"] )
				$outp[ $func($i) ] = $val;
			else
				$outp[($custom["isindexed"]?$val:$i)] = $func($val, $i);
		}
		return $outp;
	}

	function add($a, $b) {
		if(gettype($a) == "array" && gettype($b) == "array" ) {
			return Fun::array_append($a, $b);
		} else if (gettype($a) == "array" && gettype($b) == "integer") {
			return Fun::array_addinall($a, $b);
		}
	}

	function msimplode($glue, $inp, $defval=null) {
		 return (count($inp) == 0 && $defval != null ) ? $defval : implode($glue, $inp);
	}

	function intexplode($ex, $inp) {
		$temp = myexplode($ex,$inp);
		foreach($temp as $i=>$val){
			$temp[$i] = 0+$val;
		}
		return $temp;
	}
	function intexplode_t2($inp, $limit=-1, $ex='-'){
		$temp=myexplode($ex,$inp);
		$outp=array();
		foreach($temp as $i=>$val){
			$val=0+$val;
			if(1<=$val &&  ($limit==-1 || $val<=$limit) )
				$outp[]=$val;
		}
		return $outp;
	}


?>