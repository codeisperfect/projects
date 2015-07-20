from plex import *
import copy;


def tokenize(filename):
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
	resword = Str("if", "then", "else", "end", "for", "<?php", "?>", "=>", "::", "&&", "||", "==", "!==", "===", "!=", "++", "--", "+=", "*=", "-=", "/=" ) | Any("+-!@$%^&*()+=/?><.,[]{};:|")


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


#	filename = "/var/www/player/php/func.php"
#	filename = "func.php"
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
	return outp;



"name number phpvar resword string"

rules = [
"exp : number",
"exp : phpvar",
"exp : string",
"exp : name",
'exp : exp "+" exp',
'exp : exp "-" exp',
'exp : exp "*" exp',
'exp : exp "/" exp',
'exp : exp "%" exp',
'exp : exp "&&" exp',
'exp : exp "||" exp',
'exp : exp "==" exp',
'exp : exp "===" exp',
'exp : exp "!=" exp',
'exp : exp "!==" exp',
'exp : exp "&" exp',
'exp : exp "|" exp',
'exp : exp "^" exp',
'exp : exp "." exp',
'exp : "(" exp ")"',
];

def exprules(inpp):
	inp = list(inpp);
	for j in range(len(inp)):
		i = inp[j];
		trule = i.split();
		trule.remove(":");
		rrule = list( ( [i,""] if i[:1]!='"' else ["resword", i[1:-1] ] ) for i in trule );
		inp[j] = rrule;
	return inp;

def ismatch(yrule, inplist):
	if(len(yrule) == len(inplist)):
		for i in range(len(yrule)):
			if (not(yrule[i][0] == inplist[i][0] and (yrule[i][1] == '' or yrule[i][1] == inplist[i][1]) )):
				return False;
		return True;
	else:
		return False;

def applyrule(yrule, inplist):
	while(True):
		modfinplist=[];
		i=0;
		while(i<len(inplist)):
			if( ismatch( yrule[1:], inplist[i:i+len(yrule[1:])]) ):
				modfinplist.append([ yrule[0][0], inplist[i:i+len(yrule[1:])] ]);
				i+=len(yrule[1:])-1;
			else:
				modfinplist.append(inplist[i]);
			i+=1;
		if( list(i[0] for i in modfinplist) == list(i[0] for i in inplist) ):
			break;
		inplist = modfinplist;
	return inplist;


def reduse(yrules, inplist):
	for k in range(len(yrules)):
		while(True):
			terms = list(i[0] for i in inplist);
			pp=0;
			for j in yrules[:1+k]:
				print "Apply well rule ", rules[pp];
				inplist = applyrule(j, inplist);
				pp+=1;
			termsnow = list(i[0] for i in inplist);
			if(terms == termsnow):
				break;
	return inplist;

#def recreate()

def printtoken(outp):
	f=open("mohit.php", "w");
	f.write("--------------------\n".join(list( str(i[0])+":"+str(i[1]) for i in outp)));
	f.close();




yrules = exprules(rules);
a = tokenize("func.php");


b = reduse(yrules, list(a));

printtoken(b);



