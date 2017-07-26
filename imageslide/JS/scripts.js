

var arr=["1","2","3"];


function changeToNext()
{
	var s=document.getElementById("image").src;
	var l=s.length;
	var i,ind;
	var ind=s.lastIndexOf('/');
	var dot=s.lastIndexOf('.');
	var sub=s.substring(ind+1,dot);
	var indexis=arr.indexOf(sub);
	if(indexis==(arr.length-1))
		indexis=0;
	else
		indexis=indexis + 1;
	var two=arr[indexis];
	var one=s.substring(0,ind+1);
	var three=s.substring(dot,l);
	document.getElementById("image").src=one+two+three;

}
function changeToPrev()
{
	var s=document.getElementById("image").src;
	var l=s.length;
	var i,ind;
	var ind=s.lastIndexOf('/');
	var dot=s.lastIndexOf('.');
	var sub=s.substring(ind+1,dot);
	var indexis=arr.indexOf(sub);
	if(indexis==0)
		indexis=arr.length-1;
	else
		indexis=indexis - 1;
	var two=arr[indexis];
	var one=s.substring(0,ind+1);
	var three=s.substring(dot,l);
	document.getElementById("image").src=one+two+three;

}