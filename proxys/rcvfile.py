import socket,sys

if(len(sys.argv)>3):
	HOST=sys.argv[1];
	fn=sys.argv[2];
	sa=sys.argv[3];
else:
	print "Provide IP address at argument1&filename at argument2";
	exit(0);
#HOST = '10.208.20.213';
PORT = 1114
s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
s.settimeout(5);
s.connect((HOST, PORT))
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

