console.log("Challenge 3")
var john=[124, 48, 268];
var tip=[]
var billAmt=[];

for(i=0;i<john.length;i++)
{
    if(john[i]<50)
    {
        tip[i] = john[i] * 0.2;
    }
    else if(john[i]>=50 && john[i]<=200)
    {
        tip[i] = john[i] * 0.15;
    }
    else
    {
        tip[i] = john[i] * 0.1
    }
}
function tipCalculator()
{
    for(i=0;i<john.length;i++)
    {
        billAmt[i] = john[i] + tip[i];
          
    }
}
tipCalculator();
console.log("All the three tips paid by john: "+tip);
console.log("All the bills paid by john including tips: "+billAmt);