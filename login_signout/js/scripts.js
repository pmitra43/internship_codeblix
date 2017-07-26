function su_submit()
{
	var a=check_mail("sumail");
	var b=check_password();
	var f=1;
	var s="";
	if(a==0)
	{
		f=0;
		s+="Enter valid mail ID\n";
	}
	if(b==0)
	{
		f=0;
		s+="The passwords do not match\n";
	}
	if(document.getElementById("gen").value=='0')
	{
		f=0;
		s+="Select Gender\n";
	}
	if(f==1)
	{
		document.getElementById("signupform").submit();
		alert("You have successfully signed up!");
	}
	else
	{
		alert(s);
	}
}
function li_submit()
{
	var	a=check_mail("limail");
	if(a==1)
		document.getElementById("loginform").submit();
	else
		alert("Enter a valid mail ID");
}
function signup_click()
{
	document.getElementById('logoutdiv').style.display = 'none';
	document.getElementById('logindiv').style.display = 'none';
	document.getElementById('signupdiv').style.display = 'block';
}
function login_click()
{
	document.getElementById('signupdiv').style.display = 'none';
	document.getElementById('logoutdiv').style.display = 'none';
	document.getElementById('logindiv').style.display = 'block';
}
function logout_click()
{
	document.getElementById('logindiv').style.display = 'none';
	document.getElementById('signupdiv').style.display = 'none';
	document.getElementById('logoutdiv').style.display = 'block';
}
function home_click()
{
	document.getElementById('logindiv').style.display = 'none';
	document.getElementById('logoutdiv').style.display = 'none';
	document.getElementById('signupdiv').style.display = 'none';
}
function check_mail(id)
{
	var s=document.getElementById(id).value;
	var at=s.indexOf('@');
	var dt=s.indexOf('.',at);
	var l=s.length;
	var str=s.substring(at+1,dt);
	if(at<1||(dt-at)<4||(l-dt)<1)
		return 0;
	else
		return 1;
}
function check_password()
{
	var o=document.getElementById("supwd").value;
	var c=document.getElementById("sucnfpwd").value;

	if(o != c || o == "")
		return 0;
	else
		return 1;
}