import sys,time
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.proxy import *
from BeautifulSoup import BeautifulSoup
import time,os,json,urllib

def calgrade(u,p):
	driver = webdriver.Firefox()
	def runjscode(jscode):
		while 1:
			try:
				driver.execute_script(jscode);
				break;
			except:
				time.sleep(1);
	#url="https://campus1.iitd.ac.in/psc/hcmprod1/EMPLOYEE/HRMS/c/SA_LEARNER_SERVICES.SSR_SSENRL_LIST.GBL?Page=SSR_SSENRL_LIST&Action=A&ACAD_CAREER=UENG&EMPLID=2012CS10233&INSTITUTION=IITD&STRM=1401";
	url="https://campus1.iitd.ac.in/psc/hcmprod1/EMPLOYEE/HRMS/c/SA_LEARNER_SERVICES.SSR_SSENRL_GRADE.GBL?Page=SSR_SSENRL_GRADE&Action=A";
	driver.get(url);
	driver.find_element_by_id("userid").send_keys(u);
	driver.find_element_by_id("pwd").send_keys(p);
	runjscode("submitAction(document.login);");
	runjscode('document.getElementsByClassName("PSLEVEL1GRID").length;');
	content=driver.page_source.encode("utf8");
	driver.close()

	def remdust(data):
		soup=BeautifulSoup(data);
		name=soup.find(attrs={'id':"DERIVED_SSTSNAV_PERSON_NAME"}).text;
		cg1=soup.find(attrs={'id':"STATS_ENRL$13"}).text;
		cg2=soup.find(attrs={'id':"STATS_CUMS$13"}).text;
		soup=soup.findAll(attrs={"class":"PSLEVEL1GRID"})[0];
		soup['width']='';
		a=soup.findAll();
		for i in a:
			lst=[];
			needs=["class","align"];
			for j in needs:
				if(i.has_key(j)):
					lst.append((j,i[j]));
				i.attrs=lst;
		temp=str(soup);
		temp1="";
		for i in temp:
			if i!='\xc2':
				temp1+=(i);
		return """<!doctype html>
		<html dir='ltr' lang='en'>
		<head>
		<link rel='stylesheet' type='text/css' href='temp.css' />
		</head>
		<body>
		"""+ temp1+  """
		</body>
		</html>
		""";
	return remdust(content);


u="cs1120233";
p="myMansi";

print calgrade(u,p);

