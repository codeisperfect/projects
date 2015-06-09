import thread
import os,sys,time,socket;

from usemohit import *;

proxys=[21,22,62,82,61];#61 is phd
listen_port=3128;


def serv(ptype):
	sock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
	sock.bind(('',listen_port))
	sock.listen(1);
	def talk(conn,client_address):
		print "a Client connected me ",client_address;
		s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
		s.connect(("proxy"+str(ptype)+".iitd.ernet.in", 3128));
		req=conn.recv(1024);
		print req;
		s.send(req);
		data="";
	        while(1):
			try:
				a=s.recv(1024);
			except:
				break;
	                if not len(a):
	                        break;
#			data+=a;
			conn.sendall(a);
		leng=len(data);
#		for i in range(0,leng,1024):
#			conn.sendall(data[i:min(i+1024,leng)]);
#		print len(data),"----",data[-20:];
		s.close();
		conn.close();
		print client_address," client closed connection";
	while True:
		print "Waiting...";
		conn, client_address = sock.accept();
		thread.start_new_thread(talk,(conn,client_address));
	sock.close();


serv("22");


