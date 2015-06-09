colors=['white','green','red','blue','pink','yellow'];
connected={'w':['r','g','p','b'],'y':['r','b','p','g'],   'r':['w','b','y','g'],'g':['w','r','y','p'],'p':['w','g','y','b'],'b':['w','p','y','r'] };

def ptostate(l):
	outp={};
	for i in l:
		outp[i[4]]={'e':[i[1],i[5],i[7],i[3]],'c':[i[2],i[8],i[6],i[0]]};#e:edge,c:corner
	return outp;

def isvalid(s):
	if(len(s.keys())==6):
		for i in s:
			s[i]['sum']=0;
		for i in s:
			for j in s[i]['e']+s[i]['c']:
				s[j]['sum']+=1;
			s[i]['sum']+=1;
		for i in s:
			if(s[i]['sum']!=9):
				return False;
		return True;
	else:
		return False;



def ismade(s):
	if(isvalid(s)):
		for i in s:
			if(not(s[i]['e']+s[i]['c']==i*8 ) ):
				return False;
		return True;
	else:
		return False;

def rot(s,c,dir='c'):#s:state,c:color,dir:direction c/a (closewise or anticlockwise)
	shift=-1 if dir=='c' else 1;
	s[c]['e']=s[c]['e'][-shift:]+s[c]['e'][:-shift];
	s[c]['c']=s[c]['c'][-shift:]+s[c]['c'][:-shift];
	




s1=ptostate(["ybgywbbyy","yyryrpbrw","wgwwyrgpy","bbrgpgpgw","pwgrbpbwr","rrppgwgbp"]);
