var Years=[1990, 1965, 1937, 2005, 1998];


function arraycalc(arr, fn){
    var Res=[];

    for(i=0;i<arr.length;i++){
        Res[i]=fn(arr[i]);
    }
    return Res;
}

function CalcAge(age){
    return 2020-age;
}

function CanVote(age){
    return age>=18;
}

function HeartRate(age){
    if(age>=18 && age<=81){
        return Math.round(206.9 - (0.67 * age));
    }else{
        return -1;
    }
}

var ages=arraycalc(Years, CalcAge);
console.log(ages);

var vote=arraycalc(ages, CanVote);

console.log(vote);

var rate=arraycalc(ages, HeartRate);
console.log(rate);



/*var array=[52, 25, 23, 56, 87, 92];

function sort(arr, fn){
    var array2=[];
    for(i=0;i<arr.length;i++){
        array2.push(fn(arr[i]));
    }
    return array2;
}

function filter(arr){
    for(i=0;i<arr.length;i++){
        if(arr[i]>=20 && arr[i]<30){
            return arr[1];
        }
    }
}

console.log(array);
var store=sort(array, filter);
console.log(store);
console.log(array);*/