var box;

function zoomIn()
{
  var filename=this.src.split("_thumb.gif");
  box.style.background="url("+filename[0]+ ".gif)";
}

function zoomOut()
{
box.style.background="inherit";
}

function init()
{
	box=document.getElementById("zoomBox");

onload=init;

var guitar=document.getElementById("guitar");
guitar.onmouseover=zoomIn;
guitar.onmouseout=zoomOut;


}
onload=init;