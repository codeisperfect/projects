#include <bits/stdc++.h>
#define fl(i,n) for(int i=0;i<n;i++)

using namespace std;
#include "use.h"


string password="mohit.mv.341 :)";
//string password="0";

string allowdchar="!\"#$%&\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\\]^_`abcdefghijklmnopqrstuvwxyz{|}~";

string configfile=".msvconfig";
string datafile=".msvdata";

int ec=1;
string ecn[]={
	"File not found",
};

class filedetails{
public:
	string name,lastupdated;
	filedetails(string n,string l){
		name=n;
		lastupdated=l;
	}
};

class lastmodf{
public:
	string importfile;
	vector<filedetails*> lmfiles;
	lastmodf(){
		importfile=datafile;
	}
	bool import_file(){
		ifstream f1(importfile.c_str());
		if(f1 != NULL){
			string line1, line2;
			while(getline(f1, line1) && getline(f1, line2) ){
				line2+="\n";
				lmfiles.push_back(new filedetails(line1, line2));
			}
		}
		f1.close();
	}
	bool export_file(){
		ofstream f1(importfile.c_str());
		fl(i,lmfiles.size()){
			f1<<lmfiles[i]->name<<"\n"<<lmfiles[i]->lastupdated<<flush;
		}
		f1.close();
	}
	int search(string fn){
		fl(i,lmfiles.size()){
			if(lmfiles[i]->name==fn)
				return i;
		}
		return -1;
	}
	string getlmtime(string inp){
		int ind=search(inp);
		return ind!=-1? lmfiles[ind]->lastupdated : "";
	}
	int setlmtime(string inp){
		int ind=search(inp);
		if(ind==-1){
			lmfiles.push_back( new filedetails( inp,getmodftime(inp)));
		}
		else{
			lmfiles[ind]->lastupdated=getmodftime(inp);
		}
	}
};

lastmodf lmf;


string encode(string inp){
	int plen=password.length();
	string outp="";
	int wlen=allowdchar.length();
	for(int i=0;i<inp.length();i++){
		int pos=instring(allowdchar,inp[i]);
		if(pos!=-1){
			outp+=allowdchar[modn(pos+password[i%plen], wlen)];
		} else{
			outp+=inp[i];
		}
	}
	return outp;
}

string decode(string inp){
	int plen=password.length();
	string outp="";
	int wlen=allowdchar.length();
	for(int i=0;i<inp.length();i++){
		int pos=instring(allowdchar,inp[i]);
		if(pos!=-1){
			outp+=allowdchar[modn(pos-password[i%plen], wlen)];
		} else{
			outp+=inp[i];
		}
	}
	return outp;
}


string getallchar(vector<string>inp){
	int chars[256];
	memset(chars,0,sizeof(chars));
	fl(i,inp.size()){
		string rf=read_file(inp[i]);
		fl(j,rf.length()){
			chars[(int)rf[j]]++;
		}
	}
	string outp="";
	fl(i,256){
		if(chars[i]!=0)
			outp+=(char)i;
	}
	return outp;
}

vector<string> getneededfile(){
	ec=1;
	vector<string>outp;
	ifstream f1(configfile.c_str());
	if(f1!=NULL){
		int numtoread;
		f1>>numtoread;
		for(int i=0;i<numtoread;i++){
			string s;
			f1>>s;
			outp.push_back(s);
		}
	}
	else
		ec=0;
	f1.close();
	return outp;
}

int encodeall(vector<string>inp){
	vector<string>modfiles;
	lmf.import_file();
	fl(i,inp.size()){
		pair<string, string> fl=getfext(inp[i]);
		if(getmodftime(inp[i])!=lmf.getlmtime(inp[i])){
			write_file(fl.first+".msv"+fl.second, encode(read_file(inp[i])));
			modfiles.push_back(inp[i]);
			lmf.setlmtime(getmodftime(inp[i]));
		}
	}
	lmf.export_file();
	cout<<" Encoded "<<modfiles.size()<<" Files"<<endl;
	print_svector(modfiles,"\n");
}



int main(int argc, char *argv[]){

//	cout<<elc("stat -c %y main.cpp")<<"---"<<endl;


	lmf.import_file();
	lmf.setlmtime("main.cpp");
	lmf.setlmtime("use.h");
	lmf.export_file();




	if(argc<2){
		cout<<"Are.. kuchh Arguments to do ?"<<endl;
	} else{
		string cmd=argv[1];
		if(cmd=="g"){
			vector<string>inp;
			fl(i,argc-2){
				inp.push_back(argv[i+2]);
			}
			print_svector(inp,"\n");
			cout<<getallchar(inp)<<endl;
		} else if(cmd=="gall"){
			cout<<elc(string("./msv g ")+implode(getneededfile()," "));
		} else if(cmd=="earg"){
			vector<string>inp;
			fl(i,argc-2){
				inp.push_back(argv[i+2]);
			}
			encodeall(inp);
		} else{
		}
	}



//	write_file("main.msvcpp1",encode(read_file("main.cpp")));
//	write_file("main.msvcpp_de",decode(read_file("main.msvcpp")));





	return 0;
	if(false){
		vector<string>gnf=getneededfile();
		vector<string> v;
		v.push_back(configfile);
		cout<< getallchar(v) <<endl;
	}
}
