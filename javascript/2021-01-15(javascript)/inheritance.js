var john={
    name: 'john',
    lastname: 'smith',
    DOB: 1995,
    job: 'teacher'
};


var Person=function (name, lastname, DOB, job){
    this.name = name;
    this.lastname = lastname;
    this.DOB=DOB;
    this.job = job;
}

Person.prototype.CalcAge=function(){
    console.log(2020- this.DOB);
};

Person.prototype.collegeName='ABC';
var john=new Person('john', 'smith', 1995, 'techer');
var mark=new Person('mark', 'smith', 1990, 'designer');

john.CalcAge();
mark.CalcAge();

console.log(john.collegeName);
console.log(mark.collegeName);




var jane=new Person('jane', 'smith', 1968, 'doctor');
jane.CalcAge();
console.log(jane.collegeName);


var stud1={
    name: 'stud1',
    clas: 10,
    DOB: 1999,
    School: 'fchs',
    subjects: ['math', 'science', 'physics'],
    marks: [75, 89, 56]
};

var Students=function(name, clas, DOB, School, subjects, marks){
    this.name=name;
    this.clas=clas;
    this.DOB=DOB;
    this.School=School;
    this.subjects=subjects;
    this.marks=marks;
};
Students.prototype.CalcAverage=function(){
    var avg, sum=0;
    for(i=0;i<this.marks.length;i++){
        sum+=this.marks[i];
    }
    avg = sum / 3;
    console.log("average is: " +avg);
};

var stud1=new Students('stud1', 10, 1999, 'fchs', ['math', 'science', 'physics'], [75, 89, 56]);
var stud2=new Students('stud2', 12, 1997, 'fchs', ['math', 'science', 'physics'], [82, 85, 96]);

console.log(stud1);
console.log(stud2);

stud1.CalcAverage();
stud2.CalcAverage();


//object.create

var people={
    calculateAge: function(){
        console.log(2020- this.BirthYear);
    }
};

var Jose=Object.create(people);
Jose.Fullname='Jose Doe';
Jose.BirthYear=1992;

var Jack=Object.create(people, {
    Fullname: {value: 'Jack Doe'},
    BirthYear: {value: 1987}
});

Jose.calculateAge();
Jack.calculateAge();