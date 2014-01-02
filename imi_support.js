function handleResponse_period()
{
    if (xhr.readyState != 4)
    {
        return;
    }
    if (xhr.status != 200 && xhr.status != 0)
        // 200: web server "OK"; 0: local file
    {
        alert("No data! Status = " + status);
        return;
    }
    // We have data!

    data = xhr.responseText;

    spot = document.getElementById("dataloc");
    if (!spot)
    {
        alert("Could not find id \"dataloc\"");
        return;
    }
    // We have a place to put the data

    // Put it there
    spot.innerHTML = data;
}
function sendForTime()
{
	if (window.XMLHttpRequest)
    {
        xhr = new XMLHttpRequest();
    }
    else
    {  // For IE 5 & 6
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xhr.onreadystatechange = handleResponse_period;
                 // Set up event handler
    xhr.open("GET", "data_time.txt", true);
                 // Make request: type, resource, async?
    xhr.send();  // Send request
}

function sendForSeason()
{
	if (window.XMLHttpRequest)
    {
        xhr = new XMLHttpRequest();
    }
    else
    {  // For IE 5 & 6
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xhr.onreadystatechange = handleResponse_period;
                 // Set up event handler
    xhr.open("GET", "data_season.txt", true);
                 // Make request: type, resource, async?
    xhr.send();  // Send request
}


function changePeriod()
{
	if(document.spaceweather.period_type.value==1)
	{
		sendForTime();
	}
	if(document.spaceweather.period_type.value==2)
	{
		sendForSeason();
	}
}

function handleResponse_onscreen()
{
if (xhr.readyState != 4)
    {
        return;
    }
    if (xhr.status != 200 && xhr.status != 0)
        // 200: web server "OK"; 0: local file
    {
        alert("No data! Status = " + status);
        return;
    }
    // We have data!

    data = xhr.responseText;

    spot = document.getElementById("loc_moreinf");
    if (!spot)
    {
        alert("Could not find id \"loc_moreinf\"");
        return;
    }
    // We have a place to put the data

    // Put it there
    spot.innerHTML = data;

}

function putform()
{
if (window.XMLHttpRequest)
    {
        xhr = new XMLHttpRequest();
    }
    else
    {  // For IE 5 & 6
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xhr.onreadystatechange = handleResponse_onscreen;
                 // Set up event handler
    xhr.open("GET", "data_onscreen.txt", true);
                 // Make request: type, resource, async?
    xhr.send();  // Send request

//	document.spaceweather.tod.disabled=false;
}

function handleResponse_graph()
{
if (xhr.readyState != 4)
    {
        return;
    }
    if (xhr.status != 200 && xhr.status != 0)
        // 200: web server "OK"; 0: local file
    {
        alert("No data! Status = " + status);
        return;
    }
    // We have data!

    data = xhr.responseText;

    spot = document.getElementById("loc_moreinf");
    if (!spot)
    {
        alert("Could not find id \"loc_moreinf\"");
        return;
    }
    // We have a place to put the data

    // Put it there
    spot.innerHTML = data;	
}

function putgraphform()
{
if (window.XMLHttpRequest)
    {
        xhr = new XMLHttpRequest();
    }
    else
    {  // For IE 5 & 6
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xhr.onreadystatechange = handleResponse_graph;
                 // Set up event handler
    xhr.open("GET", "data_graph.txt", true);
                 // Make request: type, resource, async?
    xhr.send();  // Send request
    
}

function handleResponse_time()
{
if (xhr.readyState != 4)
    {
        return;
    }
    if (xhr.status != 200 && xhr.status != 0)
        // 200: web server "OK"; 0: local file
    {
        alert("No data! Status = " + status);
        return;
    }
    // We have data!

    data = xhr.responseText;

    spot = document.getElementById("time_info");
    if (!spot)
    {
        alert("Could not find id \"time_info\"");
        return;
    }
    // We have a place to put the data

    // Put it there
    spot.innerHTML = data;	
}

function changeTime()
{
if(document.spaceweather.tod.value == 2)
{
if (window.XMLHttpRequest)
    {
        xhr = new XMLHttpRequest();
    }
    else
    {  // For IE 5 & 6
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xhr.onreadystatechange = handleResponse_time;
                 // Set up event handler
    xhr.open("GET", "data_periodoftime.txt", true);
                 // Make request: type, resource, async?
    xhr.send();  // Send request
}

else if(document.spaceweather.tod.value == 3)
{
if (window.XMLHttpRequest)
    {
        xhr = new XMLHttpRequest();
    }
    else
    {  // For IE 5 & 6
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xhr.onreadystatechange = handleResponse_time;
                 // Set up event handler
    xhr.open("GET", "data_zangle.txt", true);
                 // Make request: type, resource, async?
    xhr.send();  // Send request
}

else
{
	if (window.XMLHttpRequest)
    {
        xhr = new XMLHttpRequest();
    }
    else
    {  // For IE 5 & 6
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xhr.onreadystatechange = handleResponse_time;
                 // Set up event handler
    xhr.open("GET", "data_blank.txt", true);
                 // Make request: type, resource, async?
    xhr.send();  // Send request
}
}

function handleResponse_kpvalue()
{
if (xhr.readyState != 4)
    {
        return;
    }
    if (xhr.status != 200 && xhr.status != 0)
        // 200: web server "OK"; 0: local file
    {
        alert("No data! Status = " + status);
        return;
    }
    // We have data!

    data = xhr.responseText;

    spot = document.getElementById("kpvalue_spot");
    if (!spot)
    {
        alert("Could not find id \"kpvalue_spot\"");
        return;
    }
    // We have a place to put the data

    // Put it there
    spot.innerHTML = data;	
}

function addkpvalue()
{
if(document.spaceweather.kpvalue.checked==true)
{
if (window.XMLHttpRequest)
    {
        xhr = new XMLHttpRequest();
    }
    else
    {  // For IE 5 & 6
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xhr.onreadystatechange = handleResponse_kpvalue;
                 // Set up event handler
    xhr.open("GET", "data_kpvalue.txt", true);
                 // Make request: type, resource, async?
    xhr.send();  // Send request
}
else
{
if (window.XMLHttpRequest)
    {
        xhr = new XMLHttpRequest();
    }
    else
    {  // For IE 5 & 6
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xhr.onreadystatechange = handleResponse_kpvalue;
                 // Set up event handler
    xhr.open("GET", "data_blank.txt", true);
                 // Make request: type, resource, async?
    xhr.send();  // Send request

}
}

function handleResponse_bzvalue()
{
if (xhr.readyState != 4)
    {
        return;
    }
    if (xhr.status != 200 && xhr.status != 0)
        // 200: web server "OK"; 0: local file
    {
        alert("No data! Status = " + status);
        return;
    }
    // We have data!

    data = xhr.responseText;

    spot = document.getElementById("bzvalue_spot");
    if (!spot)
    {
        alert("Could not find id \"bzvalue_spot\"");
        return;
    }
    // We have a place to put the data

    // Put it there
    spot.innerHTML = data;	
}

function addbzvalue()
{
if(document.spaceweather.bzvalue.checked==true)
{
if (window.XMLHttpRequest)
    {
        xhr = new XMLHttpRequest();
    }
    else
    {  // For IE 5 & 6
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xhr.onreadystatechange = handleResponse_bzvalue;
                 // Set up event handler
    xhr.open("GET", "data_bzvalue.txt", true);
                 // Make request: type, resource, async?
    xhr.send();  // Send request
}
else
{
if (window.XMLHttpRequest)
    {
        xhr = new XMLHttpRequest();
    }
    else
    {  // For IE 5 & 6
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xhr.onreadystatechange = handleResponse_bzvalue;
                 // Set up event handler
    xhr.open("GET", "data_blank.txt", true);
                 // Make request: type, resource, async?
    xhr.send();  // Send request

}
}
