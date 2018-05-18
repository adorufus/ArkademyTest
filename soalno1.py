import json
import json.encoder

class School:
    myHighschool = "SMK Bhakti Mulya";
    myUniversity = "Not Yet";

class Skills():
    skill = "";
    def __init__(self, mySkills):
        self.skill = mySkills

myName = 'Oktaviano'
myAddress = 'Poris gaga baru'
myHobbies = ["Programming", "Drawing a manga", "Making game"]
is_married = False;
school = School();
mySkill = []
mySkill.append(Skills("Drawing"))
mySkill.append(Skills("Programming"))

to_json = {'name':myName, 'address':myAddress, 'Hobbies':myHobbies, 'Marital status':is_married, 'school':school.myHighschool, 'school':school.myUniversity}

def returnJson():
    py2json = json.dumps(to_json, ensure_ascii=False, indent = 4)
    print(py2json)

returnJson();