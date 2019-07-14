// JavaScript Document
urls="";


function wait(){
	$("#wait").show();
}

function back1(){
	 window.location="#page1";
}

function back2(){
	 window.location="#chat";
}

sc=0;

function f1(){
	sc=1;
			 window.location="#chat";	
		document.URL=document.URL+"#page1";
	//alert("one");
	chatarea();
	
}

function f2(){
	sc=2;
	window.location="#chat";
	//alert("two");
	chatarea();
	
}
function f3(){
	sc=3;
	window.location="#chat";
	//alert("three");
	chatarea();
}
function f4(){
	sc=4;
	window.location="#chat";
	//alert("four");
	chatarea();
}
function f5(){
	sc=5;
	window.location="#chat";
	//alert("five");
	chatarea();
}
function f6(){
	sc=6;
	window.location="#chat";
	//alert("six");
	chatarea();
}

function f7(){
	sc=7;
	window.location="#chat";
	//alert("six");
	chatarea();
}
function f8(){
	sc=8;
	window.location="#chat";
	//alert("six");
	chatarea();
}
function f9(){
	sc=9;
	window.location="#chat";
	//alert("six");
	chatarea();
}
function f10(){
	sc=10;
	window.location="#chat";
	//alert("six");
	chatarea();
}
function f11(){
	sc=11;
	window.location="#chat";
	//alert("six");
	chatarea();
}
function f12(){
	sc=12;
	window.location="#chat";
	//alert("six");
	chatarea();
}
function f13(){
	sc=13;
	window.location="#chat";
	//alert("six");
	chatarea();
}
function f14(){
	sc=14;
	window.location="#chat";
	//alert("six");
	chatarea();
}
function f15(){
	sc=15;
	window.location="#chat";
	//alert("six");
	chatarea();
}
function f16(){
	sc=16;
	window.location="#chat";
	//alert("six");
	chatarea();
}
function f17(){
	sc=17;
	window.location="#chat";
	//alert("six");
	chatarea();
}
function f20(){
	sc=20;
	window.location="#chat";
	//alert("six");
	chatarea();
}
function f21(){
	sc=21;
	window.location="#chat";
	//alert("six");
	chatarea();
}
function f22(){
	sc=22;
	window.location="#chat";
	//alert("six");
	chatarea();
}
function f23(){
	sc=23;
	window.location="#chat";
	//alert("six");
	chatarea();
}
function f24(){
	sc=24;
	window.location="#chat";
	//alert("six");
	chatarea();
}
function f25(){
	sc=25;
	window.location="#chat";
	//alert("six");
	chatarea();
}
	
function showc(){
//alert(sc);
 var ajaxRequest;  // The variable that makes Ajax possible!
	var str="" ;
 try{
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
 }catch (e){
   // Internet Explorer Browsers
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser broke!");
         return false;
      }
   }
 }
 // Create a function that will receive data 
 // sent from the server and will update
 // div section in the same page.
 ajaxRequest.onreadystatechange = function(){
   if(ajaxRequest.readyState == 4){
      var ajaxDisplay = document.getElementById('prev_chat');
      ajaxDisplay.innerHTML = ajaxRequest.responseText;  prevChat=ajaxRequest.responseText;//$("#prev_chat").html();
	  //alert("prevChat = " + prevChat);
	load_chat();
	 // window.open("index.html#ajaxDiv");
   }
 }
type="show_header_profile";
 var queryString = "?type=" + type ;
 queryString +=  "&sc=" + sc;
 ajaxRequest.open("GET", urls + "included/api1.php" + 
                              queryString, true);
 ajaxRequest.send(null); 
 	
}





window.setInterval("alarm();",10000);
var i=1;
var j=100;
var noble=new Array();
var f=1;
var sum=0;
var num1;
var sors;
var num2;
var total;
var result;
var nxt;
var v,nu;
var di;
var cl;
var n;
var Mon_No_0f_Lect;
var day;
var userid=1;
var phoneN;
var main_number;
var prevChat;
var reciever_phone;
var sender_phone;
var reciever_u;
var sender_u;
var sr;
var get_form="";
var typee;
var phone;
var onlin_status;
var e="ff";
var gp_type;
var get_frm;
function stringToUppercase(inputString)
{
  return inputString.toUpperCase();
}




	///////////////////////////for contacts//////////////////////////////////////////////
	
	  var deviceReady = false;

    //-------------------------------------------------------------------------
    // Contacts
    //-------------------------------------------------------------------------
    function getContacts() {
        obj = new ContactFindOptions();
        // show all contacts, so don't filter
        obj.multiple = true;
        navigator.contacts.find(
            ["displayName", "name", "phoneNumbers", "emails", "urls", "note"],
            function(contacts) {
                var s = "";
                if (contacts.length == 0) {
                    s = "No contacts found";
                }
                else {
                    s = "Number of contacts: "+contacts.length+"<br><table width='100%'><tr><th>Name</th><td>Phone</td><td>Email</td></tr>";
                    for (var i=0; i<contacts.length; i++) {
                        var contact = contacts[i];
                        s = s + "<tr><td>" + contact.name.formatted + "</td><td>";
                        if (contact.phoneNumbers && contact.phoneNumbers.length > 0) {
                            s = s + contact.phoneNumbers[0].value;
                        }
                        s = s + "</td><td>"
                        if (contact.emails && contact.emails.length > 0) {
                            s = s + contact.emails[0].value;
                        }
                        s = s + "</td></tr>";
                    }
                    s = s + "</table>";
                }
                document.getElementById('contacts_results').innerHTML = s;
            },
            function(e) {
                document.getElementById('contacts_results').innerHTML = "Error: "+e.code;
            },
            obj);
    };

    function addContact(){
        console.log("addContact()");
        try{
            var contact = navigator.contacts.create({"displayName": "Dooney Evans"});
            var contactName = {
                formatted: "Dooney Evans",
                familyName: "Evans",
                givenName: "Dooney",
                middleName: ""
            };

            contact.name = contactName;

            var phoneNumbers = [1];
            phoneNumbers[0] = new ContactField('work', '512-555-1234', true);
            contact.phoneNumbers = phoneNumbers;

            contact.save(
                function() { alert("Contact saved.");},
                function(e) { alert("Contact save failed: " + e.code); }
            );
            console.log("you have saved the contact");
        }
        catch (e){
            alert(e);
        }

    };
    
    /**
     * Function called when page has finished loading.
     */
    function init() {
        document.addEventListener("deviceready", function() {
                deviceReady = true;
                console.log("Device="+device.platform+" "+device.version);
            }, false);
        window.setTimeout(function() {
        	if (!deviceReady) {
        		alert("Error: Apache Cordova did not initialize.  Demo will not run correctly.");
        	}
        },1000);
    }
	
	//////////////////////////////////////////////////////////////////////////




//Browser Support Code
function ajaxFunction(){
	//alert(urls);
	var user=document.getElementById('username').value;
	var pass=document.getElementById('password').value;
//alert(user + pass);
if(user=="" || pass==""){
	$("#ajaxDiv").html("All Fields are required !");
}

	else{
		//$("#wait").show();
 var ajaxRequest;  // The variable that makes Ajax possible!
	var str="" ;
 try{
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
 }catch (e){
   // Internet Explorer Browsers
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser broke!");
         return false;
      }
   }
 }
 // Create a function that will receive data 
 // sent from the server and will update
 // div section in the same page.
 ajaxRequest.onreadystatechange = function(){
   if(ajaxRequest.readyState == 4){
      var ajaxDisplay = document.getElementById('ajaxDiv');
      ajaxDisplay.innerHTML = ajaxRequest.responseText;
phoneN=document.getElementById('phonenum').innerHTML;
$("#pic_number").val(phoneN);
online_status=document.getElementById('status').innerHTML;
	 // alert("PhoneN = " + phoneN);
	  //numck=phoneN;
///significat place :: call of home_page function/////
home_page();
		contacts();
	  window.location="#page1";
	  
	  
/////////////////////////////////////////////////////
	main_number=phoneN
	//alert("main number: " + phoneN);
	 // alert(online_status);
	  if((phoneN=="") || (online_status=="onlinee")){
		 $("#ajaxDiv").html("Invalid Login Details..."); alert("Invalid Login Details...");
	  }
	  else{
		// document.open()
		//$.mobile.changePage( "#page3");
		//$("#Page").html($("#page1").html());
		//alert("here");
		 window.location="#page1";	
		//$('#test2 span').trigger('click');//Works
		//document.getElementById('tes').click();
		//document.write($("#cc").html());
		//$("#page1");
		document.URL=document.URL+"#page1";
	  }
	 // window.open("index.html#ajaxDiv");
   }
 }
 // Now get the value from user and pass it to
 // server script.
 var password = document.getElementById('password').value;
 var username = document.getElementById('username').value;
// var sex = document.getElementById('sex').value;
 var queryString = "?password=" + password ;
 queryString +=  "&username=" + username;
 ajaxRequest.open("GET", urls + "included/ajax-example.php" + 
       queryString, true);
 ajaxRequest.send(null); 
 
// home_page();
 
	}
	
}



function chatarea(){
//alert(sc);
	
var ajaxRequest;  // The variable that makes Ajax possible!
	var str="" ;
 try{
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
 }catch (e){
   // Internet Explorer Browsers
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser broke!");
         return false;
      }
   }
 }
 // Create a function that will receive data 
 // sent from the server and will update
 // div section in the same page.
 ajaxRequest.onreadystatechange = function(){
   if(ajaxRequest.readyState == 4){
      var ajaxDisplay = document.getElementById('chat_profile');
      ajaxDisplay.innerHTML = ajaxRequest.responseText;
	  str= ajaxRequest.responseText;
	  var sstr=$("#chat_profile").html();
	  load_chat();
	 // alert(sstr);
	  //alert(str);

		// document.open()
		//$.mobile.changePage( "#page3");
		//$("#Page").html($("#page1").html());
		//document.write($("#cc").html());
	  }
	 // window.open("index.html#ajaxDiv");
   }

 
 typee="show_header_profile";
 //alert("reciever_phone = " + phoneR);
//alert("phone = " + phoneN);
// var sex = document.getElementById('sex').value;
 var queryString = "?sc=" + sc ;
 queryString +=  "&type=" + typee;
 ajaxRequest.open("GET", urls + "included/api1.php" + 
                              queryString, true);
 ajaxRequest.send(null); 
 	
}


function load_chat(){
//alert("welcome to load_chat"); 
document.getElementById('prev_chat').value="loading previous chat...";
 var ajaxRequest;  // The variable that makes Ajax possible!
	var str="" ;
 try{
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
 }catch (e){
   // Internet Explorer Browsers
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser broke!");
         return false;
      }
   }
 }
 // Create a function that will receive data 
 // sent from the server and will update
 // div section in the same page.
 ajaxRequest.onreadystatechange = function(){
   if(ajaxRequest.readyState == 4){
      var ajaxDisplay = document.getElementById('prev_chat');
      ajaxDisplay.innerHTML = ajaxRequest.responseText;  prevChat=ajaxRequest.responseText;//$("#prev_chat").html();
	  //alert("prevChat = " + prevChat);
	
	 // window.open("index.html#ajaxDiv");
   }
 }
 // Now get the value from user and pass it to

  //alert("main number : " + main_number);
 //alert("sender_phone1 = " + sender_phone);
 //alert("reciever_phone = " + reciever_phone);
// var sex = document.getElementById('sex').value;
//alert(phoneN);
 var queryString = "?sc=" + sc ;
 queryString +=  "&phoneN=" + phoneN;
 ajaxRequest.open("GET", urls + "included/load_chat.php" + 
                              queryString, true);
 ajaxRequest.send(null); 
 	
}




function home_page(){
	
	//alert("welcome to homepage");

	
var ajaxRequest;  // The variable that makes Ajax possible!

 try{
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
 }catch (e){
   // Internet Explorer Browsers
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser broke!");
         return false;
      }
   }
 }
 // Create a function that will receive data 
 // sent from the server and will update
 // div section in the same page.
 ajaxRequest.onreadystatechange = function(){
   if(ajaxRequest.readyState == 4){
      var ajaxDisplay = document.getElementById('home_profile');
      ajaxDisplay.innerHTML = ajaxRequest.responseText;
	  str= ajaxRequest.responseText;
	 // document.open("#page");
	 window.location="#page1";	
	  //var sstr=$("#chat_profile").html();
	 // alert(sstr);
	 // alert(str);
 //phoneN=$("#ajaxDiv").html();
		// document.open(#page");
		//$.mobile.changePage( "#page3");
		//$("#Page").html($("#page1").html());
		//document.write($("#cc").html());
	  }
	 // window.open("index.html#ajaxDiv");
   }

 // Now get the value from user and pass it to
 // server script.
//var phoneR = $("#reciever_phone").val();
// alert("sender_phone2 = " + main_number);
//alert("phone = " + phoneN);
// var sex = document.getElementById('sex').value;
 typee="show_header_profile_home";
 var queryString = "?phoneN=" + phoneN ;
 queryString +=  "&type=" + typee; 
 

 ajaxRequest.open("GET", urls + "included/api1.php" + 
                              queryString, true);
 ajaxRequest.send(null); 
 
	
}





function send_chat(){
	

	//alert("welcome to homepage");
var txt;
txt=$("#txtchat").val();
$("#prev_chat").append("<div>" + txt + "</div>");
var ajaxRequest;  // The variable that makes Ajax possible!
$("#txtchat").val("");

 try{
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
 }catch (e){
   // Internet Explorer Browsers
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser broke!");
         return false;
      }
   }
 }
 // Create a function that will receive data 
 // sent from the server and will update
 // div section in the same page.
 ajaxRequest.onreadystatechange = function(){
   if(ajaxRequest.readyState == 4){
      var ajaxDisplay = document.getElementById('prev_chat');
      ajaxDisplay.innerHTML = ajaxRequest.responseText;
	  str= ajaxRequest.responseText;
	load_chat();
	  }
	 // window.open("index.html#ajaxDiv");
   }

 // Now get the value from user and pass it to
 // server script.
//var phoneR = $("#reciever_phone").val();
// alert("sender_phone2 = " + main_number);
//alert("phone = " + phoneN);
// var sex = document.getElementById('sex').value;
 //typee="sendchat";
 alert(sc + phoneN + txt);
 var queryString = "?phoneN=" + phoneN ;
 queryString +=  "&sc=" + sc; 
 queryString +=  "&txt=" + txt;
 
 

 ajaxRequest.open("GET", urls + "included/send_chat.php" + 
                              queryString, true);
 ajaxRequest.send(null); 
 
	
///////////////////////////////////////////////////////
}


function show(){
var txt=document.getElementById('txtchat').value;

//var us=document.getElementById('username_phone').value;
	
//alert(txt);
//alert(sender_phone);
//alert(reciever_phone);


var s1=document.getElementById(sender_phone).innerHTML
var s2=document.getElementById(reciever_phone).innerHTML
//alert(s1);
//alert(s2);	
}





function profile(){
	
var ajaxRequest;  // The variable that makes Ajax possible!

	var str="" ;
 try{
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
 }catch (e){
   // Internet Explorer Browsers
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser broke!");
         return false;
      }
   }
 }
 // Create a function that will receive data 
 // sent from the server and will update
 // div section in the same page.
 ajaxRequest.onreadystatechange = function(){
   if(ajaxRequest.readyState == 4){
      var ajaxDisplay = document.getElementById('show_profile');
      ajaxDisplay.innerHTML = ajaxRequest.responseText;
	  str= ajaxRequest.responseText;
	  var sstr=$("#chat_profile").html();
	  show_username();
	 // alert(sstr);
	  //alert(str);

		// document.open()
		//$.mobile.changePage( "#page3");
		//$("#Page").html($("#page1").html());
		//document.write($("#cc").html());
	  }
	 // window.open("index.html#ajaxDiv");
   }

 
 typee="show_profile";
 //alert("reciever_phone = " + phoneR);
//alert("phone = " + phoneN);
// var sex = document.getElementById('sex').value;
 var queryString = "?sc=" + sc ;
 queryString +=  "&type=" + typee;
 
 ajaxRequest.open("GET", urls + "included/api1.php" + 
                              queryString, true);
 ajaxRequest.send(null); 


///////////End of chatarea() function//////////////////	
	
	
}

function show_username(){
var g;
g=document.getElementById('usname').innerHTML;
//alert("user name = " + g);
	$("#profile_name").html('<div style="color:#036; vertical-align:middle;" data-role="header"><img onClick="back1();" style="border-right:solid 1px #CCCCCC; cursor:pointer; float:left; margin-right:6px; padding:2px; padding-right:5px; height:30px; width:35px;" src="images/backk.png"/><h2>'+ '    '+ g +"'s Profile" +'</h2></div>');	
	
}



function my_profile(){
	
//////////////////chatarea() function//////////////////



//alert("welcome to chatarea");

var ajaxRequest;  // The variable that makes Ajax possible!

	var str="" ;
 try{
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
 }catch (e){
   // Internet Explorer Browsers
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser broke!");
         return false;
      }
   }
 }
 // Create a function that will receive data 
 // sent from the server and will update
 // div section in the same page.
 ajaxRequest.onreadystatechange = function(){
   if(ajaxRequest.readyState == 4){
      var ajaxDisplay = document.getElementById('show_profile');
      ajaxDisplay.innerHTML = ajaxRequest.responseText;
	  str= ajaxRequest.responseText;
	  var sstr=$("#chat_profile").html();
	  show_my_username();
	 // alert(sstr);
	  //alert(str);

		// document.open()
		//$.mobile.changePage( "#page3");
		//$("#Page").html($("#page1").html());
		//document.write($("#cc").html());
	  }
	 // window.open("index.html#ajaxDiv");
   }

 // Now get the value from user and pass it to
 // server script.
 var phoneR = $("#reciever_phone").val();
 typee="show_my_profile";
 //alert("reciever_phone = " + phoneR);
//alert("phone = " + phoneN);
// var sex = document.getElementById('sex').value;
 var queryString = "?phoneR=" + phoneN ;
 queryString +=  "&type=" + typee;
 
 ajaxRequest.open("GET", urls + "included/api1.php" + 
                              queryString, true);
 ajaxRequest.send(null); 


///////////End of chatarea() function//////////////////	
	
	
}

function show_my_username(){
var g;
g=document.getElementById('my_usname').innerHTML;
//alert("user name = " + g);
	$("#my_profile_name").html("<h2><center>My Profile</center></h2>");	
	
}













///////////////////////////////chat updater////////////


setInterval(function update_chat(){
	//alert("Hello")
	
	
	load_chat();
	
	
	}, 4000);


////////////////////end of vhat updater/////////////



function big_img(e){
	//alert(e);
var show_big_img= "0" + e;
$("#show_big_img").html("<img src='picture/" + show_big_img + ".jpg' hieght='100%' width='100%'/>");
}

function chop(){
//alert("on");
$("#page2").html();

}
function logout(){
//alert("put");	
	$("#username").val("");
	$("#password").val("");
	$("#ajaxDiv").html("");
	var vv=$("#ajaxDiv").html();
	$("#wait").hide();
	//alert(vv);
	
//////////////////chatarea() function//////////////////



//alert("welcome to chatarea");

var ajaxRequest;  // The variable that makes Ajax possible!

	var str="" ;
 try{
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
 }catch (e){
   // Internet Explorer Browsers
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser broke!");
         return false;
      }
   }
 }
 // Create a function that will receive data 
 // sent from the server and will update
 // div section in the same page.
 ajaxRequest.onreadystatechange = function(){
   if(ajaxRequest.readyState == 4){
      var ajaxDisplay = document.getElementById('show_profile');
      ajaxDisplay.innerHTML = ajaxRequest.responseText;
	  //str= ajaxRequest.responseText;
	  //var sstr=$("#chat_profile").html();
	  //show_username();
	 // alert(sstr);
	  //alert(str);

		// document.open()
		//$.mobile.changePage( "#page3");
		//$("#Page").html($("#page1").html());
		//document.write($("#cc").html());
	  }
	 // window.open("index.html#ajaxDiv");
   }

 // Now get the value from user and pass it to
 // server script.
 //var phoneR = $("#reciever_phone").val();
 typee="logout";
 //alert("reciever_phone = " + phoneR);
//alert("phone = " + phoneN);
// var sex = document.getElementById('sex').value;
 var queryString = "?phoneR=" + phoneN ;
 queryString +=  "&type=" + typee;
 
 ajaxRequest.open("GET", urls + "included/api1.php" + 
                              queryString, true);
 ajaxRequest.send(null); 


///////////End of chatarea() function//////////////////	
	
	
}



function update_status(){
	
	//////////////////chatarea() function///////////////

var new_status;
var prev_status
prev_status=$("#status_msg").html();
//alert(prev_status);
new_status=prompt("Previous Status: " + prev_status , "Enter New Status Here...");

//alert("welcome to chatarea");
if((new_status=="")||(new_status=="Enter New Status Here...")){
	alert("Please type new status");
	update_status();
	
}
var ajaxRequest;  // The variable that makes Ajax possible!

	var str="" ;
 try{
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
 }catch (e){
   // Internet Explorer Browsers
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser broke!");
         return false;
      }
   }
 }
 // Create a function that will receive data 
 // sent from the server and will update
 // div section in the same page.
 ajaxRequest.onreadystatechange = function(){
   if(ajaxRequest.readyState == 4){
      var ajaxDisplay = document.getElementById('show_profile');
      ajaxDisplay.innerHTML = ajaxRequest.responseText;
	  
	  str= ajaxRequest.responseText;
	  //alert(str);
	  alert("Update was successfull !");
	  $("#status_msg").html('<div style="font-size:11px; color:#036">' + new_status + "</div>");
	  window.location="#page1";
	  //var sstr=$("#chat_profile").html();
	  //show_username();
	 // alert(sstr);
	  //alert(str);

		// document.open()
		//$.mobile.changePage( "#page3");
		//$("#Page").html($("#page1").html());
		//document.write($("#cc").html());
	  }
	 // window.open("index.html#ajaxDiv");
   }

 // Now get the value from user and pass it to
 // server script.
 var phoneR = phoneN;
 typee="update_status";
 //alert("reciever_phone = " + phoneR);
//alert("phone = " + phoneN);
// var sex = document.getElementById('sex').value;
 var queryString = "?phoneR=" + phoneN ;
 queryString +=  "&type=" + typee;
 queryString +=  "&str=" + new_status;
 ajaxRequest.open("GET", urls + "included/api1.php" + 
                              queryString, true);
 ajaxRequest.send(null); 


///////////End of chatarea() function//////////////////	
	
	
	
}


		
	$("#btnLogin").click(function(){
	var user=$("#username").val();
	var pass=$("#password").val();
	//alert(user);
	//alert (pass);
	document.title="cj interactive";
	document.URL=document.URL+"#page";
	document.getElementById("#page");
	$("#page");
	//$("#Page2").html($("#page").html());	
	});
		
		
function clr(){
	//alert("fgfg");
	$("#username").val("");
	$("#password").val("");
}


function contacts(){
//alert(phoneN); 
 var ajaxRequest;  // The variable that makes Ajax possible!
	var str="" ;
 try{
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
 }catch (e){
   // Internet Explorer Browsers
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser broke!");
         return false;
      }
   }
 }
 // Create a function that will receive data 
 // sent from the server and will update
 // div section in the same page.
 ajaxRequest.onreadystatechange = function(){
   if(ajaxRequest.readyState == 4){
      var ajaxDisplay = document.getElementById('contacts');
      ajaxDisplay.innerHTML = ajaxRequest.responseText; 
	  var  con=ajaxRequest.responseText;
	 // alert(con);
   }
 }
var type="contact";
 var queryString = "?type=" + type ;
  queryString +=  "&phoneR=" + phoneN;
 ajaxRequest.open("GET", urls + "included/api1.php" + 
 
                              queryString, true);
 ajaxRequest.send(null); 
 	
}

////////////////////////////////////////////////////////end of CJ's Code////////////////////////////////////////////////////////




