
var first_date=document.getElementById("first_date");
var add_date=document.getElementById("add_date");
var output_date=document.getElementById("output_date");
var button=document.getElementById("check_it");



//if(button){
// button.addEventListener('click', swapper, false);

button.addEventListener("click",function(e){
	e.preventDefault();
  //convert given date into milliseconds
  var given_date=new Date(first_date.value).getTime();
  //convert given months to milliseconds 
  var given_month=2592000000*add_date.value; 
  //have to add day. it's weired but it's worked  
  var one_day=1000*60*60*24;
  var value=given_date+given_month+one_day;
  var new_date=new Date(value);   
  console.log(value);
  output_date.value=new_date.getFullYear()+"/"+(new_date.getMonth()+1)+"/"+new_date.getDate();
  
});


//}
