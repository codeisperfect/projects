// document.getElementsByClassName("PSLEVEL1GRID").length;



// document.getElementsByClassName("PSLEVEL1GRID")[0].childNodes[1].childNodes[4].innerHTML;

newl='\n';
function getgrage(){
	temp=document.getElementsByClassName("PSHYPERLINKDISABLED");
	temp1=document.getElementsByClassName("PABOLDTEXT");
	grades="";
	if(temp.length==temp1.length){
		for(i=0;i<temp.length;i++){
			grades+=(temp[i].innerHTML+"-"+temp1[i].innerHTML+","+newl);
		}
	}
	return grades;
}
function cgpa_sgpa(){
	temp=document.getElementsByClassName("PSLEVEL1GRIDWBO")[1].childNodes[1].childNodes;
	if(temp[temp.length-2].nodeName=="TR" && temp[temp.length-2].getElementsByClassName("PSEDITBOXLABEL")[0].innerHTML=="= GPA"   ){
		temp1=temp[temp.length-2].getElementsByClassName("PSEDITBOXLABEL");
		return "SGPA="+temp1[1].innerHTML+",CGPA="+temp1[3].innerHTML;
	}
	else
		return "";
}
function mainf(){
	name=document.getElementById("DERIVED_SSTSNAV_PERSON_NAME").innerHTML;
	document.body.innerHTML=(name+newl+cgpa_sgpa()+newl+getgrage()).replace(/&nbsp;/g, " ");
}
mainf();
