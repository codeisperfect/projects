#define fl(i,n) for(int i=0;i<n;i++)

string filter(string inp){
	int start=0,end=inp.length();
	if(end-start>0 && inp[0]=='"')
		start=1;
	if(end-start>0 && inp[end-1]=='"')
		end--;
	return inp.substr(start,end-start);
}


int str2int(string s){
	stringstream ss;
	ss<<s;
	int outp;
	ss>>outp;
	return outp;
}

string int2str(int n){
	stringstream ss;
	ss<<n;
	string outp;
	ss>>outp;
	return outp;
}


template<typename T>
void inline print_array(T a,int len){
	for(int i=0;i<len;i++){
		cout<<a[i]<<",";
	}
	cout<<endl;
}

template<typename T>
void print_vector(T v){
	for(int i=0;i<v.size();i++){
		cout<<v[i]<<",";
	}
	cout<<endl;
}


void printv(double*m,int n){
	for(int j=0;j<n;j++){
		printf("%f,",m[j]);
	}
	printf("\n");
}

void printm(double*m,int n){
	for(int i=0;i<n;i++){
		printv(m+i*n,n);
	}
	printf("--------------------\n");
}


string elc(string c){
	FILE*fd=popen(c.c_str(),"r");
	string outp="";
	char chr;
	while((chr=getc(fd))!=EOF ){
		outp+=chr;
	}
	pclose(fd);
	return outp;
}

string read_file(string fn){
	FILE* f=fopen(fn.c_str(),"r");
	if(f==NULL)
		return "";
	char c;
	string outp="";
	while(true){
		c=fgetc(f);
		if(c==EOF)
			break;
		outp+=c;
	}
	fclose(f);
	return outp;
}

int write_file(string fn, string data=""){
	ofstream f1(fn.c_str());
	f1<<data;
	f1.close();
	return 1;
}

vector<string>mysplit(string st,char c){
	vector<string>outp;
	string curs="";
	for(int i=0;i<st.length();i++){
		if(st[i]==c){
			if(curs!=""){
				outp.push_back(curs);
				curs="";
			}
		}
		else{
			curs+=tolower(st[i]);
		}
	}
	if(curs!="")
		outp.push_back(curs);
	return outp;
}

void print_vector(vector<int>v){
	for(int i=0;i<v.size();i++){
		printf("%d,",v[i]);
	}
	printf("\n");
}

void print_svector(vector<string>v,string sep=","){
	for(int i=0;i<v.size();i++){
		cout<<v[i]<<sep;
	}
	printf("\n");
}

int modn(int m,int n){
	return ((m%n)+n)%n;
}




template<typename T>
string tostr(T v){
	string outp;
	stringstream ss(v);
	ss>>outp;
	return outp;
}


template<typename T>
string implode(T v,string c=","){
	string outp="";
	for(int i=0;i<v.size();i++){
		outp+=tostr(v[i]);
		if(i!=v.size()-1)
			outp+=c;
	}
	return outp;
}


int instring(string s, char c){
	fl(i,s.length()){
		if(s[i]==c)
			return i;
	}
	return -1;
}


pair<string, string> getfext(string inp){
	vector<string>temp=mysplit(inp,'.');
	string ext=temp[temp.size()-1];
	string name=inp.substr(0,inp.length()-ext.length()-1);
	pair<string, string>ans(name,ext);
	return ans;
}


string getmodftime(string inp){
	return elc(string("stat -c %y ")+inp);
}


