function AllTime() {
    window.location.assign("http://ec2-18-218-86-230.us-east-2.compute.amazonaws.com/CS2830%20Final/HTML/AllTimePlayers.php")
}

function Current() {
    window.location.assign("http://ec2-18-218-86-230.us-east-2.compute.amazonaws.com/CS2830%20Final/HTML/FavPlayers.php")
}

function doSubmit() {
        var xmlHttp = new XMLHttpRequest();
		xmlHttp.onload = function() {
            if (xmlHttp.status == 200) {
				var formbox = document.getElementById("formbox");
					formbox.innerHTML = xmlHttp.responseText;
				}
			}
        var name = encodeURIComponent(document.getElementById("name").value);
        var player = encodeURIComponent(document.getElementById("player").value);
        var position = encodeURIComponent(document.getElementById("position").value);
        var params = "name=" + name + "&player=" + player + "&position=" + position;
        xmlHttp.open("POST", "process.php", true);
        xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlHttp.send(params);
}