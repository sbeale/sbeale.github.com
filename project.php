<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<title>Stonington High Mobile Site</title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="java/style.css">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1"  />
<title>Untitled Document</title>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

</head>
<script>

function display(tier){
switch(tier){
		
		case 2:
				document.getElementById('t3am').style.left = "-100%";
				document.getElementById('t3abu').style.left = "-100%";
				document.getElementById('t3agi').style.left ="-100%";
				document.getElementById('t3as').style.left ="-100%";
				document.getElementById('t3asl').style.left ="-100%";
				document.getElementById('t3gg').style.left = "-100%";
				document.getElementById('t3pf').style.left = "-100%";
				document.getElementById('t3sf').style.left ="-100%";
				document.getElementById('t3ppsg').style.left = "-100%";
				document.getElementById('t3ssi').style.left = "-100%";
				document.getElementById('t3gde').style.left ="-100%";
				document.getElementById('t3ath').style.left ="-100%"
				document.getElementById('t3atf').style.left ="-100%"
				display(10.1);
				break;
		case 10:
				var x = document.getElementsByClassName("t2");
				var i;
				for (i = 0; i < x.length; i++) {
    				x[i].style.overflow = "hidden";
				}
				break;
				display(.1);
				display(.2);
				display(.3);
				display(.4);
				display(.5);
				display(.6);
		case 10.1:
				var x = document.getElementsByClassName("t2");
				var i;
				for (i = 0; i < x.length; i++) {
    				x[i].style.overflow = "auto";
				}
				break;
		case 1:
				if(document.getElementById('t2a').style.left == "2%"||
				document.getElementById('t2d').style.left == "2%"||
				document.getElementById('t2g').style.left == "2%"||
				document.getElementById('t2s').style.left == "2%"||
				document.getElementById('t2at').style.left == "2%"||
				document.getElementById('t2p').style.left == "2%")
				{
				document.getElementById('t1').style.left = "2%";
				document.getElementById('t2a').style.left = "-100%";
				document.getElementById('t2at').style.left = "-100%";
				document.getElementById('t2d').style.left = "-100%";
				document.getElementById('t2g').style.left = "-100%";
				document.getElementById('t2p').style.left = "-100%";
				document.getElementById('t2s').style.left = "-100%";
				display(2);
				}
				else{
					document.getElementById('t1').style.left = "-100%"
				}
				
				break;
		case 0:/*opens nav*/
				if(document.getElementById('t1').style.left < "2%"){
				document.getElementById('t1').style.left = "2%";
				document.getElementById('t2a').style.left = "-100%";
				document.getElementById('t2d').style.left = "-100%";
				document.getElementById('t2g').style.left = "-100%";
				document.getElementById('t2p').style.left = "-100%";
				document.getElementById('t2at').style.left ="-100%";
				document.getElementById('t2s').style.left = "-100%";
				display(2);
				}
				else if(document.getElementById('t1').style.left == "2%"){
				document.getElementById('t1').style.left = "-100%";
				document.getElementById('t2a').style.left = "-100%";
				document.getElementById('t2d').style.left = "-100%";
				document.getElementById('t2at').style.left = "-100%";
				document.getElementById('t2g').style.left = "-100%";
				document.getElementById('t2p').style.left ="-100%";
				document.getElementById('t2s').style.left = "-100%";
				display(2);
				}
				break;
		case .1:/*opens administration*/
				if(document.getElementById('t2a').style.left < "2%"){
					document.getElementById('t2a').style.left = "2%"
				}
				else if(document.getElementById('t3am').style.left == "2%"||
				document.getElementById('t3abu').style.left == "2%"||
				document.getElementById('t3agi').style.left == "2%"||
				document.getElementById('t3as').style.left == "2%"||
				document.getElementById('t3asl').style.left == "2%"){
					display(2);
				}
				else if(document.getElementById('t3am').style.left < "2%"&&
				document.getElementById('t3abu').style.left < "2%"&&
				document.getElementById('t3agi').style.left < "2%"&&
				document.getElementById('t3as').style.left < "2%"&&
				document.getElementById('t3asl').style.left < "2%"){
					document.getElementById('t2a').style.left = "-100%"
				}
				break;
			case .11:
					
					document.getElementById('t3am').style.left = "2%"
					display(10);
					
					var myDiv = document.getElementById('t2a');
					myDiv.scrollTop = 0;
					break;
			case .13:
					
					document.getElementById('t3abu').style.left = "2%"
					display(10);
					
					var myDiv = document.getElementById('t2a');
					myDiv.scrollTop = 0;
					break;
			case .15:
					document.getElementById('t3agi').style.left = "2%"	
					display(10);
					
					var myDiv = document.getElementById('t2a');
					myDiv.scrollTop = 0;
					break;
			case .17:	
					document.getElementById('t3as').style.left = "2%"	
					display(10);
					
					var myDiv = document.getElementById('t2a');
					myDiv.scrollTop = 0;
					break;
			case .19:	
					document.getElementById('t3asl').style.left = "2%"	
					display(10);
					
					var myDiv = document.getElementById('t2a');
					myDiv.scrollTop = 0;
					break;
		case .2:/*opens parents*/
				if(document.getElementById('t2p').style.left < "2%"){
					document.getElementById('t2p').style.left = "2%"
				}
				else if(document.getElementById('t3pf').style.left == "2%"||
				document.getElementById('t3ppsg').style.left == "2%"){
					display(2);
				}
				else if (document.getElementById('t3pf').style.left  < "2%" &&
				document.getElementById('t3ppsg').style.left < "2%"){
					document.getElementById('t2p').style.left ="-85%"
				}
				break;
				
			case .21:
				document.getElementById('t3pf').style.left = "2%"
				display(10);
					
				var myDiv = document.getElementById('t2p');
				myDiv.scrollTop = 0;
				break;
			case .22:
				document.getElementById('t3ppsg').style.left = "2%"
				display(10);
					
				var myDiv = document.getElementById('t2p');
				myDiv.scrollTop = 0;
				break;
				
		case.3:/*opens students*/
		if(document.getElementById('t2s').style.left < "2%"){
			document.getElementById('t2s').style.left = "2%"
			}
		else if(document.getElementById('t3sf').style.left == "2%"||
				document.getElementById('t3ssi').style.left == "2%"){
				display(2);
			}
		else if (document.getElementById('t3sf').style.left  < "2%" &&
				document.getElementById('t3ssi').style.left < "2%"){
				document.getElementById('t2s').style.left ="-85%"
			}
				break;
				
			case .36:
				document.getElementById('t3sf').style.left = "2%"
				display(10);
					
				var myDiv = document.getElementById('t2s');
				myDiv.scrollTop = 0;
				break;
			case .39:
				document.getElementById('t3ssi').style.left = "2%"
				display(10);
					
				var myDiv = document.getElementById('t2s');
				myDiv.scrollTop = 0;
				break;
				
				
				
		case.4:/*opens directory*/
				if(document.getElementById('t2d').style.left < "2%"){
			document.getElementById('t2d').style.left = "2%"
			}
		else{
			document.getElementById('t2d').style.left = "-100%"
		}
				break;
				
				
				
		case.5:/*opens guidance*/
				if(document.getElementById('t2g').style.left < "2%"){
			document.getElementById('t2g').style.left = "2%"
			}
		else if(document.getElementById('t3gg').style.left == "2%"||
				document.getElementById('t3gde').style.left == "2%"){
				display(2);
			}
		else if (document.getElementById('t3gg').style.left  < "2%" &&
				document.getElementById('t3gde').style.left < "2%"){
				document.getElementById('t2g').style.left ="-85%"
			}
				break;
			case .51:
				document.getElementById('t3gg').style.left = "2%"
				display(10);
					
				var myDiv = document.getElementById('t2g');
				myDiv.scrollTop = 0;
				break;
			case.53:
				document.getElementById('t3gde').style.left = "2%"
				display(10);
					
				var myDiv = document.getElementById('t2g');
				myDiv.scrollTop = 0;
				break;
				
		case .6:
		if(document.getElementById('t2at').style.left < "2%"){
			document.getElementById('t2at').style.left = "2%"
			}
		else if(document.getElementById('t3atf').style.left == "2%"||
		document.getElementById('t3ath').style.left == "2%"){
				display(2);
			}
		else if (document.getElementById('t3atf').style.left  < "2%"&&
		document.getElementById('t3ath').style.left  < "2%"){
				document.getElementById('t2at').style.left ="-85%"
			}
				break;
			case .61:
				document.getElementById('t3atf').style.left = "2%"
				display(10);
					
				var myDiv = document.getElementById('t2at');
				myDiv.scrollTop = 0;
				break;
			case .62:
				document.getElementById('t3ath').style.left = "2%"
				display(10);
					
				var myDiv = document.getElementById('t2at');
				myDiv.scrollTop = 0;
				break;
}};
</script>
<body>

<div id="fix">
</div>

<div id="header">
		<a href="index.html"><img src="resources/Logo.png"></a>
</div>
<div id="nav">
	<ul id="menu">
        <a href="#"><li><button id="T1" onClick="display(0)"><img src="resources/menu.png" /></button></li></a>
    	<a href="https://stonington.powerschool.com/public/"><li><img src="resources/powerschool.png"/></li></a>
    	<a href="#"><li><img src="resources/contact-book'.png" /></li></a>
    	<a href="#"><li id="lastItem"><img src="resources/calender-icon.png" /></li></a>
    </ul>
</div>

<div id="mainInfo">


<div id="t1" class="t1">
<button  id="title" onClick="display(1)"><p>Menu</p></button>
<ul>
	<button  onClick="display(.1)"><a href="#"><li>Administration</li></a></button>
    <hr>
    <button  onClick="display(.2)"><a href="#"><li>Parents</li></a></button>
    <hr>
 	<button  onClick="display(.3)"><a href="#"><li>Students</li></a></button>
    <hr>
    <button  onClick="display(.4)"><a href="#"><li>Directory</li></a></button>
    <hr>
    <button  onClick="display(.6)"><a href="#"><li>Athletics</li></a></button>
    <hr>
    <button  onClick="display(.5)"><a href="#"><li>Guidance</li></a></button>
</ul>
</div>

    <div id="t2a" class="t2" >
    	<button  id="title" onClick="display(.1)"><p>Administration<p></button>
        <ul >
        	<button onClick="display(.11)"><a href="#"><li>Mission</li></a></button>
            <hr>
            <button><a href="#"><li>Academic Achievements</li></a></button>
            <hr>
            <button><a href="#"><li>Admin Team</li></a></button>
            <hr>
            <button onClick="display(.13)"><a href="#"><li>Building Usage</li></a></button>
            <hr>
            <button ><a href="#"><li>ESLs</li></a></button>
            <hr>
            <button onClick="display(.15)"><a href="#"><li>General Information</li></a></button>
            <hr>
            <button ><a href="#"><li>Report an act of Bullying</li></a></button>
            <hr>
            <button onClick="display(.17)"><a href="#"><li>schedules</li></a></button>
            <hr>
            <button ><a href="#"><li>Stonington Public Schools</li></a></button>
            <hr>
            <button onClick="display(.19)"><a href="#"><li>Staff Links</li></a></button>
          
        </ul>
    </div>
    
    <div id="t2p" class="t2" >
    <button  id="title" onClick="display(.2)"><p>Parents</p></button>
    	<ul>
        <button  onClick="display(.21)"><a href="#"><li>Forms</li></a></button>
        <hr>
        <button  onClick="display(.22)"><a href="#"><li>Project Safe Grad</li></a></button>
        <hr>
        <button><a href="#"><li>Report Cards</li></a></button>
        <hr>
        <button><a href="#"><li>Senior Privilege</li></a></button>
        <hr>
        <button><a href="#"><li>Statement of CT Health Assessment</li></a></button>
    </ul>
    </div>
    
    
    <div id="t2s" class="t2">
    <button  id="title" onClick="display(.3)"><p>Students</p></button>
        <ul>
        <button><a href="#"><li>Course Descriptions</li></a></button>
        <hr>
        <button><a href="#"><li>Exam Schedule</li></a></button>
        <hr>
        <button onClick="display(.36)"><a href="#"><li>Forms</li></a></button>
        <hr>
        <button><a href="#"><li>National Honor Society</li></a></button>
        <hr>
        <button><a href="#"><li>Opportunities Handbook</li></a></button>
        <hr>
        <button><a href="#"><li>Senior Project</li></a></button>
        <hr>
        <button><a href="#"><li>Student Agenda</li></a></button>
        <hr>
        <button><a href="#"><li>Student Guidelines</li></a></button>
        <hr>
        <button  onClick="display(.39)"><a href="#" id="hassub"><li>Summer Information</li></a></button>
        <hr>
        <button><a href="#" id="hassub"><li>TurnItIn</li></a></button>
        <br><br>
    </ul>
    </div>

    
    <div id="t2d" class="t2">
    <button  id="title" onClick="display(.4)"><p>Directory</p></button>
        <ul>
        <button><a href="#"><li>Administration</li></a></button>
        <hr>
        <button><a href="#"><li>Guidance</li></a></button>
        <hr>
        <button><a href="#"><li>Support Staff</li></a></button>
        <hr>
        <button><a href="#"><li>Teachers A-Z</li></a></button>
        <hr>
        <button><a href="#"><li>Teachers by Subject</li></a></button>
    </ul>
    </div>
    
    
    <div id="t2at" class="t2">
    <button  id="title" onClick="display(.6)"><p>Athletics</p></button>
        <ul>
        <button onClick="display(.62)"><a href="#"><li>Home</li></a></button>
        <hr>
        <button><a href="#"><li>Athletic&nbsp;Announcements</li></a></button>
        <hr>
        <button><a href="#"><li>Athletics&nbsp;events</li></a></button>
        <hr>
        <button><a href="#"><li>CIAC</li></a></button>
        <hr>
        <button><a href="#"><li>Boosters</li></a></button>
        <hr>
        <button><a href="#"><li>Coaches</li></a></button>
		<hr>
        <button><a href="#"><li>Directors</li></a></button>
		<hr>
        <button><a href="#"><li>ECC&nbsp;Stie</li></a></button>
		<hr>
        <button onClick="display(.61)"><a href="#"><li>Forms</li></a></button>
		<hr>
        <button><a href="#"><li>Handbook</li></a></button>
		<hr>
        <button><a href="#"><li>Hall&nbsp;Of&nbsp;Fame</li></a></button>
		<hr>
        <button><a href="#"><li>App&nbsp;Download</li></a></button>
		<hr>
        <button><a href="#"><li>Twitter</li></a></button>

    </ul>
    </div>
    
    
    <div id="t2g" class="t2">
    <button  id="title" onClick="display(.5)"><p>Guidance</p></button>
        <ul>
        <button onClick="display(.51)"><a href="#"><li>Grade</li></a></button>
        <hr>
        <button><a href="#"><li>Transcript Requests</li></a></button>
        <hr>
        <button onClick="display(.53)"><a href="#"><li>Dual Enrollment</li></a></button>
        <hr>
        <button><a href="#"><li>Career Center</li></a></button>
        <hr>
        <button><a href="#"><li>Naviance</li></a></button>
        <hr>
        <button><a href="#"><li>SAT and ACT</li></a></button>
        <hr>
        <button><a href="#"><li>Student Success Plan</li></a></button>
        <hr>
        <button><a href="#"><li>College and Post Grad Planning</li></a></button>
        <br><br>
    </ul>
    </div>
    
<div id="t3am" class="t3">
    <button id="title" onClick="display(2)"><p>Mission</p></button>
    <ul>
    <a href="#"><li>Core Values</li></a> 
    <hr>
	<a href="#"><li>Beliefs</li></a>
    <hr>
    <a href="#"><li>Student Expectations of Learning</li></a>
</ul>
</div>

    <div id="t3abu" class="t3">
        <button id="title" onClick="display(2)"><p>Building&nbsp;Usage</p></button>
        <ul>
        <a href="#"><li>Calendar</li></a>
        <hr>
        <a href="#"><li>Forms</li></a>
    </ul>
    </div>

<div id="t3agi" class="t3">
    <button id="title" onClick="display(2)"><p>General&nbsp;Information</p></button>
    <ul>
    <a href="#"><li>Advisory</li></a> 
    <hr>
	<a href="#"><li>Mission Statement</li></a>
    <hr>
    <a href="#"><li>Security</li></a>
    <hr>
    <a href="#"><li>Song</li></a>
</ul>
</div>

<div id="t3as" class="t3">
    <button id="title" onClick="display(2)"><p>Schedules</p></button>
    <ul>
    <a id="sub2" href="#"><li>Bell Schedule</li></a>
    <hr>
    <a id="sub2" href="#"><li>District Calendar</li></a>
    <hr>
    <a id="sub2" href="#"><li>Exam Schedule</li></a>
</ul>
</div>

<div id="t3asl" class="t3">
    <button id="title" onClick="display(2)"><p>Staff&nbsp;Links</p></button>
    <ul>
    <a id="sub2" href="#"><li>BLTV</li></a>
    <hr>
    <a id="sub2" href="#"><li>Discipline Report</li></a>
    <hr>
    <a id="sub2" href="#"><li>Email Lession Plans</li></a>
    <hr>
    <a id="sub2" href="#"><li>Forms</li></a>
    <hr>
    <a id="sub2" href="#"><li>ProTaxx</li></a>
    <hr>
    <a id="sub2" href="#"><li>Teacher Handbook</li></a>
</ul>
</div>

<div id="t3pf" class="t3">
    <button id="title" onClick="display(2)"><p>Parent&nbsp;Forms</p></button>
    <ul>
    <a id="sub2" href="#"><li>Athletics and Extracurricular Contact Form</li></a>
    <hr>
    <a id="sub2" href="#"><li>Acetaminophen and<br>Ibuprofen Form</li></a>
    <hr>
    <a id="sub2" href="#"><li>Emergency Care Plan and Medical Authorization Form</li></a>
    <hr>
    <a id="sub2" href="#"><li>Emergency Information Form</li></a>
    <hr>
    <a id="sub2" href="#"><li>Field Trip Permission Slip</li></a>
    <hr>
    <a id="sub2" href="#"><li>Medicine Administration Authorization Form</li></a>
</ul>
</div>

<div id="t3ppsg" class="t3">
    <button id="title" onClick="display(2)"><p>Project&nbsp;Safe&nbsp;Grad</p></button>
    <ul>
    <a id="sub2" href="#"><li>FAQ</li></a>
    <hr>
    <a id="sub2" href="#"><li>Blog</li></a>
</ul>
</div>

<div id="t3sf" class="t3">
    <button id="title" onClick="display(2)"><p>Student&nbsp;Forms</p></button>
   <ul>
    <a id="sub2" href="#"><li>Athletics and<br>Extracurricular<br>Contact Form</li></a>
    <hr>
    <a id="sub2" href="#"><li>Parking Application</li></a>
    <hr>
    <a id="sub2" href="#"><li>Senior Privilege</li></a>
    <hr>
    <a id="sub2" href="#"><li>Working Papers</li></a>
</ul>
</div>

<div id="t3ssi" class="t3">
    <button id="title" onClick="display(2)"><p>Summer&nbsp;Information</p></button>
    <ul>
    <a id="sub2" href="#"><li>Summer Reading</li></a>
    <hr>
    <a id="sub2" href="#"><li>Summer School</li></a>
    <hr>
    <a id="sub2" href="#"><li>Summer Work</li></a>
</ul>
</div>


<div id="t3gg" class="t3">
    <button id="title" onClick="display(2)"><p>Summer&nbsp;Information</p></button>
    </ul>
    <a id="sub2" href="#"><li>Grade 9</li></a>
    <hr>
    <a id="sub2" href="#"><li>Grade 10</li></a>
    <hr>
    <a id="sub2" href="#"><li>Grade 11</li></a>
    <hr>
    <a href="#" id="sub2"><li>Grade 12</li></a>
</ul>
</div>

<div id="t3gde" class="t3">
    <button id="title" onClick="display(2)"><p>Dual&nbsp;Enrollment</p></button>
    <ul>
    <a href="#" id="sub2"><li>AP</li></a>
    <hr>
    <a href="#" id="sub2"><li>ECE</li></a>
    <hr>
    <a href="#" id="sub2"><li>CCP</li></a>
    <hr>
    <a href="#" id="sub2"><li>NEIT</li></a>
</ul>
</div>

<div id="t3ath" class="t3">
	<button id="title" onClick="display(2)"><p>Home</p></button>
    <ul>
    <a href="#" id="sub2"><li>Shs Sports app (iOS)</li></a>
    <hr>
    <a href="#" id="sub2"><li>SHS Sports app (Android)</li></a>
    <hr>
    <a href="#" id="sub2"><li>Family ID Program</li></a>
</ul>
</div>

<div id="t3atf" class="t3">
	<button id="title" onClick="display(2)"><p>Athletic&nbsp;Forms</p></button>
    <ul>
    <a href="#" id="sub2"><li>Cardiac&nbsp;Arrest<br>Forms</li></a>
    <hr>
    <a href="#" id="sub2"><li>Concessions<br>Sign-Up</li></a>
    <hr>
    <a href="#" id="sub2"><li>Concussion<br>Form</li></a>
    <hr>
    <a href="#" id="sub2"><li>Health Questionare</li></a>
    <hr>
    <a href="#" id="sub2"><li>Transportation<br>Form</li></a>
</ul>
</div>



<?php
include ('psg1.php');
include ('../inc/Project Safe Grad/psg2.php');
include ('../inc/Project Safe Grad/psg3.php');
?>

</div>
<footer>
<p>Stonington High School | 176 South Broad Street | Pawcatuck | CT 06379</p>
<p>PHONE&nbsp;860.599.5781 | FAX&nbsp;860.599.5784 | GUIDANCE&nbsp;860.599.2180 |<a href="https://twitter.com/SHSadStaff" class="twitter-follow-button" data-show-count="false">Follow @SHSadStaff</a> 
</p>
</footer>
</p>
</body>
</html>
