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
	def getgrade():
		temp=driver.find_elements_by_class_name("PSHYPERLINKDISABLED");
		temp1=driver.find_elements_by_class_name("PABOLDTEXT");
		grades="";
		if(len(temp)==len(temp1)):
			for i in range(len(temp)):
				grades+=temp[i].text+"-"+temp1[i].text+",\n";
		return grades;
	def getcgpa():
		return driver.find_elements_by_class_name("PSLEVEL1GRIDWBO")[1].find_elements_by_tag_name("tbody")[0].find_elements_by_tag_name("tr")[-1].text;
	def getname():
		return driver.find_element_by_id("DERIVED_SSTSNAV_PERSON_NAME").text;
	datao=getname()+"\n"+getcgpa()+"\n"+getgrade();
	driver.close()
	return datao;


u="cs1120233";
p="newpasswd";

print calgrade(u,p);

