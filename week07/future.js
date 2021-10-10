var job = ["Artist", "Student", "Baker", "Athlete"];
var city = ["Dallas", "South Korea", "New York", "California"];
var spouse = ["Bob", "Mitch", "Carson", "Skylar"];
var numKids = [0,3,5,1];

var x1 = Math.floor(Math.random() * 4)
var x2 = Math.floor(Math.random() * 4)
var x3 = Math.floor(Math.random() * 4)

function tellFortune (job, city, spouse, numKids){
  document.write("You will be a "+ job + " in " + city + ", and married to " + spouse + " with " + numKids + " kids.\n");
}

tellFortune (job[x1], city[x1], spouse[x1], numKids[x1])
tellFortune (job[x2], city[x2], spouse[x2], numKids[x2])
tellFortune (job[x3], city[x3], spouse[x3], numKids[x3])
