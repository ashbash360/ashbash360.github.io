var job = ["Artist", "Student", "Baker", "Athlete"];
var city = ["Dallas", "South Korea", "New York", "California"];
var spouse = ["Bob", "Mitch", "Carson", "Skylar"];
var numKids = [0,3,5,1];

var xx = Math.floor(Math.random() * 4)

function tellFortune (job, city, spouse, numKids){
  document.write("You will be a "+ job + " in " + city + ", and married to " + spouse + " with " + numKids + " kids.");
}

tellFortune (job[xx], city[xx], spouse[xx], numKids[xx])
tellFortune (job[xx], city[xx], spouse[xx], numKids[xx])
tellFortune (job[xx], city[xx], spouse[xx], numKids[xx])
