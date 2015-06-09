import socket
from usemohit import *;



PORT = 1113
#HOST = '10.208.20.213';
def isworking(ip):
	try:
		s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
		s.settimeout(3);
		s.connect((ip, PORT))
		s.send("islogin")
		leng = int(s.recv(15));
		s.send('y');
		data=s.recv(leng);
		s.send("logout");
		s.close()
		return data;
	except:
		return "";

def getall(filer,filew):
	data=readfile(filer).split('\n')[:-1];
	outp="";
	for i in data:
		temp=(elc('date "+%d-%m-%Y %H:%M:%S"')[:-1]+"\t"+str(i)+"\t"+isworking(i)+"\n" );
		print temp,
		outp+=temp;
	writefile(filew,outp);


#print isworking("10.208.20.218");
getall("data/ips","data/proxylogin"),;

