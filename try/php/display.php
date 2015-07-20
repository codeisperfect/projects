<?php

	function param2str($data = array()){
		global $_ginfo;
		$params="";
		$temp=$_ginfo["attributes"];
		$keymap=$_ginfo["attrs_shortcut"];
		$keys=array_keys($data);
		for($i=0;$i<count($keys);$i++){
			if( in_array($keys[$i],$temp) || substr($keys[$i],0,5) === "data-" || substr($keys[$i],0,2) === "on" ){
				if(!($data[$keys[$i]]==="" && in_array($keys[$i],$_ginfo["shoudnotnull"])  )){
					$params.=(" ".(isset($keymap[$keys[$i]])?$keymap[$keys[$i]]:$keys[$i])."='".$data[$keys[$i]]."' ");
				}
			}
		}
		return $params;
	}

	function opent($tag = 'div', $params=array()) {
		echo "<".$tag." ".param2str($params)." >";
	}

	function closet($tag = 'div'){
		echo "</".$tag.">";
	}

	function ocloset($tag = 'div', $content='', $params=array()){
		opent($tag,$params);
		echo $content;
		closet($tag);
	}
	function hinp($name,$val){
		return "<input type=hidden name='$name' value='$val' />";
	}
	function hidinp($name, $val='', $params=array()){
		$params=Fun::mergeifunset($params,array("type"=>"hidden","name"=>$name,"value"=>$val));
		opent("input",$params);
	}
	function print_name_link($name,$link=HOST,$attrs=array()){
		return "<a href='$link' ".paramdict_to_str($attrs)." >$name</a>";
	}
	function span($inp,$attrs=array()){
		$attrs=Fun::setifunset($attrs,"lname","span");
		opent($attrs["lname"],$attrs);
		echo Fun::displayMsgBody($inp);
		closet($attrs["lname"]);
	}

	function draw($obj,$depth=0){
		if(gettype($obj)=='array'){
			$obj=Fun::mergeifunset($obj,array('tag'=>'div','params'=>array(),'cl'=>array()));
			echo str_repeat(" ",$depth);
			opent($obj['tag'],$obj['params']);
			echo "\n";
			foreach($obj["cl"] as $newc){
				draw($newc,$depth+1);
				echo "\n";
			}
			echo str_repeat(" ",$depth);
			closet($obj['tag']);
		}
		else{
			echo str_repeat(" ",$depth);
			$obj->disp();
		}
	}


	function clear(){
		ocloset("div","",array("class"=>"clear"));
	}
	function addcss($href){
		opent("link",array("type"=>"text/css","rel"=>"stylesheet","href"=>$href));
	}
	function addjs($src){
		ocloset("script",'',array("type"=>"text/javascript","src"=>$src));
	}
	function addall_js($arr){
		foreach($arr as $i=>$src)
			addjs($src);
	}
	function addall_css($arr){
		foreach($arr as $i=>$src)
			addcss($src);
	}
	function disp_olist($inp,$option=array()){
		$option=Fun::mergeifunset($option,array('selected'=>'','selectalltext'=>''));
		if($option['selectalltext']!=''){
			array_unshift($inp,array('val'=>'','disptext'=>$option['selectalltext']));
		}
		$olist=$inp;
		foreach($olist as $key=>$val){
			$param=array("value"=>$val["val"]);
			if($option["selected"]==$val["val"])
				$param["selected"]="";
			ocloset("option",$val["disptext"],$param);
		}
	}
	function addmycss(){
		addall_css(array("css/lib.css", "css/main.css" ));
	}
	function addmyjs(){
		global $_ginfo;//Assuming Bootstrap & Jquery are already added
		opent("script");
	?>
			var ecn=<?php echo json_encode($_ginfo["error"]); ?>;
	<?php
		closet("script");
		addall_js(array("js/lib.js","js/mohit.js","js/mohitlib.js","js/main.js"));
	}
	function readmorecontent($content,$len=100){//assuming $content is not changed to smily already ! 
		$llen=(strlen($content)>$len ? $len-10:$len);
		$fhalf=Fun::smilymsg(substr($content,0,$llen));
		opent("span");
		ocloset("span",$fhalf);
		if(strlen($content)>$len){
			ocloset("a"," Read more",array("onclick"=>"a.readmore(this);"));
			$shalf=Fun::smilymsg(substr($content,$llen));
			ocloset("span",$shalf,array("style"=>"display:none;"));
		}
		closet("span");
?>
<?php	
	}
	function rating($name,$n=5,$total=5){
		opent("div",array("data-selected"=>$n,"onmouseout"=>"rating.goout(this);","style"=>"cursor:pointer;"));
		for($i=1;$i<=$total;$i++){
?>
     <i class="fa fa-star" <?php if($i<=$n) echo "style='color:#FFD700;'"; ?> onmouseover='rating.selectn($(this).parent()[0],<?php echo $i; ?>);' >
     </i>
<?php			
		}
		hidinp($name,$n);
		closet("div");
	}
	function dummyheight($inp,$params=array()){
		$inp=0+$inp;
		mergeifunset($params,array("style"=>"height:".$inp."px",'innerHTML'=>''));
		ocloset("div",$params['innerHTML'],$params);
	}
	function dit($cond=false){
		echo ((!$cond)?"display:none;":"");
	}
	function disperror($error,$params=array()){
		mergeifunset($params,array("style"=>"color:red;"));
		ocloset("div",$error,$params);
	}
	function pit($toprint, $cond=true, $toprint_false=''){
		echo rit($toprint, $cond, $toprint_false);
	}

	function msprint($inp) {
		echo msvalprint($inp);
	}
?>