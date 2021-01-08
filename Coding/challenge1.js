console.log("Challenge 1");
var markMass=70, markHeight=1.71;
var johnMass=65, johnHeight=1.80;

var markBMI = markMass / (markHeight * markHeight);
var johnBMI = johnMass / (johnHeight * johnHeight);
var bool;
if(markBMI>johnBMI){
    bool=true;
}
else{
    bool=false;   
}
console.log("Is Mark's BMI higher than John's? "+bool);