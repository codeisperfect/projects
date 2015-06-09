import requests,BeautifulSoup,urllib,urlparse,sys,os;

bp="www.w3schools.com";
num=0;
urlLists={};
pageLists={};
downloadedPages={};



def elc(c):
	f=os.popen(c);
	data=f.read();
	f.close();
	return data;

def writefile(fn,data):
	f=open(fn,'w');
	f.write(data);
	f.close();


def readfile(fn):
	f=open(fn);
	data=f.read();
	f.close();
	return data;

def downloadObj(url,ext):
	global num;
	num+=1;
	fn="files/file"+str(num)+'.'+ext;
	c="timeout 10 wget '"+url+"' -o /tmp/null -O "+fn;
	elc(c);
	return fn;


def urlrename(ov,ahref=''):
	if(len(ov)>0 and ov[0]=='#'):
		return (ov,'');
	x=urlparse.urlparse(ov);
	if(x.scheme=='javascript'):
		return (ov,'');
	scheme=x.scheme if(x.scheme!='') else 'http' ;
	netloc=x.netloc if(x.netloc!='') else bp;
	path=x.path if(x.path=='' or x.path[0]=='/') else '/'+x.path;
	query='?'+x.query if (x.query!='') else '' 
	url1=(scheme+"://"+netloc if (ahref=='' or (x.path==path )) else ahref)+path+query;
	if(path.split('/')[-1].find('.')!=-1):
		ext=path.split('/')[-1].split('.')[-1];
	else:
		ext='mohit';
	url="";
	for i in url1:
		if(i!=' ' and i!='\t' and i!='\n' and i!='\r' ):
			url+=i;
	return (url,ext);


def changeval(ov):
	if(urlLists.has_key(ov) ):
		return urlLists[ ov];
	(url,ext)=urlrename(ov);
	if(ext!=''):
		fn=downloadObj(url,ext);
		urlLists[ov]=''+fn;
		return urlLists[ov];
	else:
		return url;

def hrefval(ov,baseurl):
	(url,ext)=urlrename(ov,baseurl);
	if(pageLists.has_key(url) ):
		return pageLists[url];
	if(ext!=''):
		fn="page"+str(len(pageLists))+".html"
		pageLists[url]=''+fn;
		return pageLists[url];
	else:
		return url;


	# return slink+"?"+urllib.urlencode({'url':url});



def download(url,fn):
	if(downloadedPages.has_key(url)):
		return;
	r=requests.get(url);
	soup=BeautifulSoup.BeautifulSoup(r.text);
	allTags=soup.findAll();
	for i in allTags:
		temp1=i.attrs;
		tags={};
		for (t,v) in temp1:
			tags[t]=v;
		if(tags.has_key('src')):
			i['src']= (changeval(i['src']) );
		if(tags.has_key('href') and i.name=='link' ):
			i['href']= (changeval(i['href']) );
		if(tags.has_key('href') and i.name=='a' ):
			i['href']= (hrefval(i['href'],url[::-1].split('/',1)[-1][::-1] ));
	writefile(fn,str(soup).replace("&lt;","<").replace("&gt;",">").replace("&amp;","&"));
	downloadedPages[url]=fn;

def download_reqfiles(depth=1):
	for j in range(depth):
		req=dict(pageLists);
		for i in req:
			download(i,req[i]);

pageLists={"http://www.w3schools.com/jquery/default.asp":"jquery.html"};
download_reqfiles(2);



#download('http://www.w3schools.com/jquery/default.asp','jquery.html');
