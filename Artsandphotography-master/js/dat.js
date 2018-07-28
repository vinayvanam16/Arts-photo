

var accopn=document.getElementById("accopn");
var valmon=document.getElementById("valmon");
var accmat=document.getElementById("accmat");
var button=document.getElementById("check_it");


//if(button){
// button.addEventListener('click', swapper, false);

button.addEventListener("click",function(e){
	e.preventDefault();


  //convert given date into milliseconds
  var given_date=new Date(accopn.value).getTime();
  //convert given months to milliseconds 
  var given_month=2592000000*valmon.value; 
  //have to add day. it's weired but it's worked  
  var one_day=1000*60*60*24;
 var value=given_month+one_day+given_date;

  //var value=given_date+given_month+one_day;
  var new_date=new Date(value);   
  console.log(value);
  //accmat.value=new_date.getFullYear()+"/"+(new_date.getMonth()+1)+"/"+new_date.getDate();
  accmat.value=(new_date.getMonth()+1)+"/"+new_date.getDate()+"/"+new_date.getFullYear();
});


//}
