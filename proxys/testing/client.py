import socket,sys

if(len(sys.argv)>1):
	HOST=sys.argv[1];
else:
	print "Provide IP address at argument1";
	exit(0);
#HOST = '10.208.20.213';
PORT = 1113
s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
s.connect((HOST, PORT))
while True:
	cmd=raw_input("$ : ");
	if(cmd==''):
		continue;
	s.send(cmd)
	if(cmd=="logout"):
		break;
	leng = int(s.recv(15));
	s.send('y');
	data=s.recv(leng);
	print data,;

print "Bye Bye..";
s.close()

