<?py
import os;



	add="";
	for i in range(44){
		add+=str(i)+",";
	}


for j in ["mohit","saini"]{
	if(j=="mohit"){
?>
		This is Specially Written by mr.mohit whose full name is <?py echo(j); ?>
<?py
	}
?>
This is real Code by mohit Saini. Writter = <?py echo(j); ?>
<?py
}
		echo("mohit.Saini"+add);
		print "";



?>