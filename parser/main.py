from plex import *

#General Tokens
letter = Range("AZaz")
digit = Range("09")
name = (letter | Any("_")) + Rep(letter | digit | Any("_") )
number = (Str("-") | Str("")) +Rep1(digit)
space = Any(" \t\n")
linecomment = (Str("//") + Rep(AnyBut("\n")) + Eol )
astring = (Str("'") + Rep( (Str('/')+AnyBut("'")) | AnyBut("'") ) + Str("'"));

in_string = Rep( (Str('/')+AnyBut('"$')) | AnyBut('"$'))
dstring = Str('"') + in_string + Str('"');

#php tockens
phpvar = Rep1(Str("$")) + name
resword = Str("if", "then", "else", "end", "for", "<?php", "?>", "=>", "::", "&&", "||", "==", "!==", "===", "!=" ) | Any("+-!@$%^&*()+=/?><.,[]{};:|")


phpparser = Lexicon([
	State("comment_started", [
		(Str("*/"), Begin("")),
		(AnyBut(""), IGNORE)
		]),
	State("dstring_started", [
		(Str('"'), Begin("")),
		(phpvar, ["ins_phpvar", TEXT]),
		(in_string, ["ins_string", TEXT]),
		(AnyBut(""), IGNORE)
		]),
	(resword, ["resword", TEXT]),
	(phpvar, ["phpvar", TEXT]),
	(number, ["number", TEXT]),
	(name, ["name", TEXT]),
	(astring | dstring, ["string", TEXT]),
	( Str("/*"), Begin("comment_started")),
	( Str('"'), Begin("dstring_started") ),
	(space | linecomment , IGNORE),
	(AnyBut("") , ['wth', TEXT]),
]);


filename = "/var/www/player/php/func.php"
filename = "func.php"
f = open(filename, "r")
scanner = Scanner(phpparser, f, filename)
parsedfile = [];
while 1:
		token = scanner.read()
		if token[0] is None:
				break
		parsedfile.append(token);
f.close();


outp = [];
islastins = 0;
for i in range(len(parsedfile)):
	if(parsedfile[i][0][0][:4] == 'ins_'):
		if(islastins):
			outp.append(["resword", "."]);
		islastins = 1;
	else:
		islastins = 0;
	if(parsedfile[i][0][0]=='ins_string'):
		outp.append(["string", '"'+parsedfile[i][1]+'"'] );
	elif(parsedfile[i][0][0]=='ins_phpvar'):
		outp.append(['phpvar', parsedfile[i][1]]);
	else:
		outp.append([parsedfile[i][0][0], parsedfile[i][1]]);





f=open("mohit.php", "w");
f.write("--------------------\n".join(list( str(i[0])+":"+str(i[1]) for i in outp)));
f.close();

