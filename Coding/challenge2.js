console.log("Challeng 2");
var Johnscore1=98, Johnscore2=127, Johnscore3=114;
var Mikescore1=116, Mikescore2=94, Mikescore3=123;
var Maryscore1=105, Maryscore2=130, Maryscore3=117;

var johnAvg = (Johnscore1 + Johnscore2 + Johnscore3) / 3;
var mikeAvg = (Mikescore1 + Mikescore2 + Mikescore3) / 3;
var maryAvg = (Maryscore1 + Maryscore2 + Maryscore3) / 3;
if(johnAvg>mikeAvg && johnAvg>maryAvg){
    console.log("John is the winner with average score of: "+johnAvg);
}
else if(johnAvg<mikeAvg && maryAvg<mikeAvg){
    console.log("Mike is the winner with average score of: "+mikeAvg);
}
else{
    console.log("Mary is the winner with average score of: "+maryAvg);
}