var john={
    fullName: 'John Doe',
    mass: 75,
    height: 1.65,
    calcBMI: function(){
        return this.mass / (this.height * this.height);  
    }
};

john.BMI = john.calcBMI();

var mark={
    fullName: 'Mark Baum',
    mass: 82,
    height: 1.75,
    calcBMI: function(){
        return this.mass / (this.height * this.height);  
    }
};


 mark.BMI=mark.calcBMI();

if(john.BMI>mark.BMI)
{
    console.log("john has the highest BMI: "+ john.BMI);
}
else if(john.BMI==mark.BMI)
{
    console.log("John and mark have equal BMI");
}
else
{
    console.log("mark has the highest BMI: "+ mark.BMI);   
}