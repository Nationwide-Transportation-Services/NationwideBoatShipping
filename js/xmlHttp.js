 //Boolean variable to check for valid Internet Explorer instance.
var xmlhttp = false;
//Check if we are using IE.
try{
  //if the javascript version is greater than 5.
  xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
}
catch(e){
  try {
      //if we are using Internet Exploer.
      xmlhttp=new ActiveXobject("Microsoft.XMLHTTP") ;
  }  catch(e) {
      // else we must be using non-IE browser
      xmlhttp = false;
      
  }
}
//Else we can use the native javascript handler
if(!xmlhttp && typeof XMLHttpRequest != 'undefined'){
    xmlhttp = new XMLHttpRequest();
}
function makerequest(serverPage,objID){
  
  var obj = document.getElementById(objID);
  xmlhttp.open("GET",serverPage);
  xmlhttp.onreadystatechange = function() { 
  if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      obj.innerHTML = xmlhttp.responseText;
  }
  }
  xmlhttp.send(null);
}
function makerequest_Value(serverPage,objID){
  var obj = document.getElementById(objID);
  xmlhttp.open("GET",serverPage);
  xmlhttp.onreadystatechange = function() { 
  if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      obj.value = xmlhttp.responseText;
  }
  }
  xmlhttp.send(null);
}
function makerequest_Split(serverPage,objID){
  var obj = document.getElementById(objID);
  xmlhttp.open("GET",serverPage);
  xmlhttp.onreadystatechange = function() { 
  if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      var myresp = xmlhttp.responseText;
      var myresp = myresp.split("|");
      obj.value = myresp[0] ;
     /* alert(myresp[0] + " " + myresp[1]); */
      document.getElementById("AreaArea_ovr").value=myresp[1];
      
  }
  }
  xmlhttp.send(null);
}
function showLoadMsg(msg){
    hidden=document.getElementById('loadpanel');
    hidden.innerHTML = '<img src="images/indicator.gif" alt="" />';
}

function makerequest_spcl(serverPage,objID){
  var obj = document.getElementById(objID);
  xmlhttp.open("GET",serverPage);
  xmlhttp.onreadystatechange = function() { 
  if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      if(xmlhttp.responseText=="Upload CSV File successful."){
         document.getElementById("kmz01").style.visibility="visible"; 
      }
      obj.innerHTML = xmlhttp.responseText;
  }
  }
  xmlhttp.send(null);
}

function setSession(serverPage){
  xmlhttp.open("GET",serverPage);
  xmlhttp.onreadystatechange = function() { 
  if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      
  }
  }
  xmlhttp.send(null);
}
