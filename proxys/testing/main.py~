import json,sys,datetime,os
from urlparse import urlparse

import socket


def curl(url,add,port):
        s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
	s.settimeout(3.0);
        s.connect((add,port))
        request=url;
        x=urlparse(request)
        domain=x.netloc
        request='GET '+request+' HTTP/1.1\r\nHost: '+domain+'\r\n\r\n'
        s.send(request)

        data="";
        while(1):
		try:
	                a=s.recv(1024);
		except:
			break;
                if not len(a):
                        break;
                data+=a;
	data=data.split('\r\n\r\n',1)[-1];
	return data;

#print curl("https://www.facebook.com","proxy22.iitd.ernet.in",3128);
#print curl("http://www.shabdkosh.com","10.10.78.22",3128);
print curl("http://www.shabdkosh.com","10.208.20.213",3128);
#print curl("http://www.google.co.in/","10.208.20.213");
#print curl("https://www.facebook.com","proxy22.iitd.ernet.in",3128);

#print curl("www.google.com","proxy22.iitd.ernet.in");
#print curl("www.google.com","10.208.20.213");

