import os
import sys

def elc(c):
	f=os.popen(c);
	data=f.read();
	f.close();
	return data;

def readfile(filen):
	f=open(filen,'r');
	data=f.read();
	f.close();
	return data;

def writefile(filen,data):
	f=open(filen,'w');
	f.write(data);
	f.close();


def get_python_code(inp):
	if(inp==""):
		return "";
	outp='sys.stdout.write("""';
	if(inp!="" and inp[-1]=='"' ):
		outp+=inp[:-1];
		outp+='"""+chr(34));\n';
	else:
		outp+=inp;
		outp+='""");\n';
	return outp;


def cleanline(myline):
	def clear_starting(thisline):
		outp="";
		gotvalidchar=False;
		for i in thisline:
			if( gotvalidchar or not(i in " \t" )):
				outp+=i;
				gotvalidchar=True;
		return outp;
	return clear_starting(clear_starting(myline)[::-1])[::-1];


def bracket(deep,inp):
	lines=inp.split("\n");
	outp="";
	for i in range(len(lines)):
		thisline=cleanline(lines[i]);
		if(thisline!='' and thisline[-1]=='{'):
			outp+=('\t'*deep)+thisline[:-1]+":"+"\n"
			deep+=1;
		elif(thisline!='' and thisline[-1]=='}'):
			deep-=1;
		else:
			outp+=('\t'*deep)+thisline+"\n";

	return (deep,outp);

def interleave(inp):
	additional="""<?py

									import sys
def echo(st){
	sys.stdout.write(str(st));
}

?>""";
	inp=additional+inp;

	cur=0;
	occurence=[];
	while(True):
		ei=inp.find("<?py",cur);
		if(ei!=-1):
			si=inp.find("?>",ei+4);
			cur=si+2;
			occurence.append((ei+4,si));
		else:
			break;
	outp="";

	deep=0;
	outp+=get_python_code(inp[0:( occurence[0][0]-4 if len(occurence)>0 else len(inp) )]);
	for i in range(len(occurence)):
		(a,b)=occurence[i];
		(deep,addcode)=bracket(deep,inp[a:b]);
		outp+=addcode;
		outp+="\t"*deep+get_python_code(inp[b+2:(occurence[i+1][0]-4 if i+1<len(occurence) else len(inp) ) ]);
	return "import sys\n"+outp;


if(len(sys.argv)>=2):
	wfile=".a.py";
	writefile( sys.argv[2]+".py" if len(sys.argv)>=3 else wfile , interleave(readfile(sys.argv[1]) ) );
	print  "Done";
else:
	print "No Argument";




