var xmlHttp=createXmlHttpRequestObject();

function createXmlHttpRequestObject()
{
	var xmlHttp;
	if(window.ActiveXObject)
	{
		try{
			xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch(e){
			xmlHttp=false;
		}
	}
	else
	{
		try{
			xmlHttp=new XMLHttpRequest();
		}
		catch(e){
			xmlHttp=false;
		}
	}
	if(!xmlHttp)
		alert('Something went wrong 1');
	else
		return xmlHttp;
}

function process()
{
	
	document.getElementById('output').value="Running!!! Please Wait...";
	
	var code=document.getElementById("code").value;
	var input=document.getElementById("input").value;
	//alert(input);
	var newcode=encodeURIComponent(code);
	var newinput=encodeURIComponent(input);
	
	//var newcode=code.replace(re,"%26");
	
	
	xmlHttp.onreadystatechange = function() 
	{
		if (xmlHttp.readyState == 4 && xmlHttp.status==200) 
		{	
			var data =xmlHttp.responseText.split('#');
			if(data[0]==1)
				document.getElementById("output").style.color='blue';
			else
				document.getElementById("output").style.color='red';
			document.getElementById("output").value = data[1];
			
			
			
			//document.getElementById("output").value = xmlHttp.responseText;
		}
			//document.getElementById("output").value = xmlHttp.responseText;
			//alert(xmlHttp.responseText)
	}
	var data='content='+newcode+'&input='+input;
	//var data='content='+newcode;
	xmlHttp.open("POST", "php/compile.php", true);	
	xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlHttp.send(data);
}
function save()
{/*
	var code=document.getElementById("code").value;*/
	var name=document.getElementById("save_name").value;
	alert(name);
	//var newcode=encodeURIComponent(code);
	//var newinput=encodeURIComponent(input);
	
	//var newcode=code.replace(re,"%26");
	
	/*
	xmlHttp.onreadystatechange = function() 
	{
		if (xmlHttp.readyState == 4 && xmlHttp.status==200) 
			//document.getElementById("output").value = xmlHttp.responseText;
			alert(xmlHttp.responseText)
	}
	var data='content='+newcode+'&save_name='+name;
	//var data='content='+newcode;
	xmlHttp.open("POST", "php/save.php", true);	
	xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlHttp.send(data);*/
}