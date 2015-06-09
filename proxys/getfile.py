import socket,sys
from usemohit import *;



PORT1 = 1113
#HOST = '10.208.20.213';
def runFileSender(ip):
	try:
		s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
		s.settimeout(3.0);
		s.connect((ip, PORT1))
		s.send("python sendfile.py")
		leng = int(s.recv(15));
		s.send('y');
		data=s.recv(leng);
		s.send("logout");
		s.close()

		return True;
	except:
		return False;



if(len(sys.argv)>3):
	HOST=sys.argv[1];
	fn=sys.argv[2];
	sa=sys.argv[3];
else:
	print "Provide IP address at argument1&filename(to copy) at argument2 and filename (save as) ";
	exit(0);
#HOST = '10.208.20.213';

runFileSender(HOST);

PORT2 = 1114

s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
s.settimeout(5);
s.connect((HOST, PORT2))
s.send(fn)
f=open(sa,'w');
ts=1024*10;
while True:
	try:
		conf=s.recv(1);
		a="";
		if(conf=='y'):
			a=s.recv(ts);
	except:
		break;
	if not len(a):
		break;
#	print a;
	f.write(a);
	s.send('y');
f.close();
s.close()

