class  rom{
public:
	struct tm dob;
	string name;
	vector<
	rom(){
		memset(&dob,0,sizeof(dob));
		strptime("1996-9-11", "%Y-%m-%dT", &dob);
		name="Mohit Saini";
	}
	float get_age(){
		time_t temp=time(0);
		struct tm now=*(localtime(&temp));
		return (now.tm_year-dob.tm_year)+(now.tm_mon-dob.tm_mon)/12.0+(now.tm_mday-dob.tm_mday)/365;
	}
};
