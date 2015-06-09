import sys,time
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.proxy import *
from BeautifulSoup import BeautifulSoup
import time,os,json,urllib


u="mohitsaini1196@gmail.com";
p="mohit->mansi();"


# def calgrade(u,p):
driver = webdriver.Firefox()
def runjscode(jscode):
	maxtry=10;
	for i in range(maxtry):
		try:
			driver.execute_script(jscode);
			break;
		except:
			time.sleep(1);
url="https://koding.com/Login";
driver.get(url);
driver.find_elements_by_name("username")[0].send_keys(u);
driver.find_elements_by_name("password")[0].send_keys(p);
runjscode('document.getElementsByClassName("lf")[0].getElementsByTagName("button")[0].click();');
print "Trying to clicking on turn-on button";
runjscode('document.getElementsByClassName("turn-on")[0].click();');
time.sleep(5);
driver.close()
