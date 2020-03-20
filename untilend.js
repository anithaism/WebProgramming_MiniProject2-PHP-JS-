function DayDiff(CurrentDate)
{
var TYear=CurrentDate.getFullYear();
var TDay=new Date("April, 27, 2020");
TDay.getFullYear(TYear);
var DayCount=(TDay-CurrentDate)/(1000*60*60*24);
DayCount=Math.round(DayCount); 
return(DayCount);
}

var Today = new Date();
var z1 = DayDiff(Today);
document.write("There are " + z1 + " days left until Semester end.<br>");
 