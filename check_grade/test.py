import sys,time

from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.proxy import *
import time,os,json,urllib


u="cs1120233";
p="mySweetMansi";
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
runjscode("");

time.sleep(4);
print driver.page_source.encode("utf-8");


driver.close()


