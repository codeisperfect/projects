from plex import *


#General Tokens
letter = Range("AZaz")
digit = Range("09")
name = (letter | Any("_")) + Rep(letter | digit | Any("_") )
number = Rep1(digit)
space = Any(" \t\n")
linecomment = (Str("//") + Rep(AnyBut("\n")) + Eol )
astring = (Str('"') + Rep( (Str('/')+AnyBut('"')) | AnyBut('"') ) + Str('"')) | (Str("'") + Rep( (Str('/')+AnyBut("'")) | AnyBut("'") ) + Str("'"));

#php tockens
phpvar = Rep1(Str("$")) + name
resword = Str("if", "then", "else", "end", "for", "<?php", "?>", "=>", "::" ) | Any("+-!@$%^&*()+=/?><.,")


phpparser = Lexicon([
	State("comment_started", [
		(Str("*/"), Begin("")),
		(AnyBut(""), IGNORE)
		]),
	(resword, ["resword", TEXT]),
	(phpvar, ["phpvar", TEXT]),
	(name, ["name", TEXT]),
	(astring, ["string", TEXT]),
	(Str("/*"), Begin("comment_started")),
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





f=open("mohit.php", "w");
f.write("--------------------\n".join(list(i[1] for i in parsedfile)));
f.close();