import thread
import os,sys,time,socket;

from usemohit import *;

listen_port=1114;

def serv():
	sock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
	try:
		sock.bind(('',listen_port))
	except:
		print "FileSender Already running :)";
		exit(0);
	sock.listen(1);
	def talk(conn,client_address):
		print "a Client connected me ",client_address;
		fn=conn.recv(1024);
		f=open(fn,'r');
		while True:
			sdata=f.read(1024*10);
			if not len(sdata):
				break;
			conn.send('y');
			conn.sendall(sdata);
			conf=conn.recv(1);
			if(conf!='y'):
				break;
		conn.send('n');
		print client_address," client closed connection";
	while True:
		print "Waiting...";
		conn, client_address = sock.accept();
		thread.start_new_thread(talk,(conn,client_address));
	sock.close();
serv();
