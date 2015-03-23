var result;
function fw_connect(url,params)
{
var fw_connection; // The variable that makes Ajax possible!
try{// Opera 8.0+, Firefox, Safari
fw_connection = new XMLHttpRequest();}
catch (e){// Internet Explorer Browsers
try{
fw_connection = new ActiveXObject("Msxml2.XMLHTTP");}
catch (e){
try{
fw_connection = new ActiveXObject("Microsoft.XMLHTTP");}
catch (e){// Something went wrong
return false;}}}
fw_connection.open("POST", url, true);
fw_connection.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
fw_connection.setRequestHeader("Content-length", params.length);
fw_connection.setRequestHeader("fw_connection", "close");
fw_connection.send(params);
return(fw_connection);
}
function Calculate()
{
result='';
document.getElementById('feedback').innerHTML='';
var height = parseFloat(document.frm.txtHeight.value);
var neck = parseFloat(document.frm.txtNeck.value);
var waist = parseFloat(document.frm.txtWaist.value);
var hip = parseFloat(document.frm.txtHip.value);
var weight = parseFloat(document.frm.txtWeight.value);
var age = parseInt(document.frm.txtAge.value);
var sexfemale=false;
var errors='';
var err;
if (document.frm.opGender.value == "1"){sexfemale=true;}
if (document.frm.opHeight.value == "1") {height = height * 2.54;}
if (document.frm.opNeck.value == "1") {neck = neck * 2.54;}
if (document.frm.opWaist.value == "1") {waist = waist * 2.54;}
if (document.frm.opHip.value == "1") {hip = hip * 2.54;}
if (document.frm.opWeight.value == "1") {weight = weight * 0.4536;}
if ((height < 122) || (height > 230) || isNaN(height)) {
err=((document.frm.opHeight.value == "1")? '48inches to 90inches' : '122cm to 230cm');
errors+='Enter height between '+err+'!\n';}
if ((neck < 15) || (neck > 50) || isNaN(neck)) {
err=((document.frm.opNeck.value == "1")? '6inches to 20inches' : '15cm to 50cm');
errors+='Enter neck between '+err+'!\n';}
if ((waist < 50) || (waist > 200) || isNaN(waist)) {
err=((document.frm.opWaist.value == "1")? '20inches to 80inches' : '50cm to 150cm');
errors+='Enter waist between '+err+'!\n';}
if ((weight < 30) || (weight > 150) || isNaN(weight)) {
err=((document.frm.opWeight.value == "1")? '67lb to 333lb' : '30Kg to 150Kg');
errors+='Enter weight between '+err+'!\n';}
if ((age < 19) || (age > 70) || isNaN(age)) {
err='19yrs to 70yrs';
errors+='Enter age between '+err+'!\n';}
if (sexfemale==true){
if ((hip < 50) || (hip > 250) || isNaN(hip)) {
err=((document.frm.opHip.value == "1")? '20inches to 100inches' : '50cm to 250cm');
errors+='Enter hip between '+err+'!\n';}}
if (errors){
alert('The following error(s) occurred:\n'+errors);
return false;}
result="height="+height+"&weight="+weight+"&neck="+neck+"&age="+age+"&waist="+waist+"&opweight="+document.frm.opWeight.value+"&activity="+document.frm.opActivity.value+"&hip=";
if(sexfemale==true){result+=hip;}
var url="count.php";
var fw_connection=fw_connect(url,result);
fw_connection.onreadystatechange = function(){
if(fw_connection.readyState == 4 && fw_connection.status == 200){
document.getElementById('feedback').innerHTML = "<fieldset style='padding: 2px 5px;'><legend>Result:</legend>"+fw_connection.responseText+"</fieldset>";
document.frm.btnDownload.disabled=false;}}
}
function resetAll(){
document.getElementById('feedback').innerHTML="";
document.frm.btnDownload.disabled=true;
result='';
return true;
}
function download(){
location.href="count.php?" + result;
}