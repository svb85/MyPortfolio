window.onload = function(){
	var lh = document.getElementById('list-html5').addEventListener('click', push);
        var ln = document.getElementById('list-wordpress').addEventListener('click', push1);
}
function push(){   
    var tx = document.getElementById('text').style.display = "none";
    var line = document.getElementById('line').style.display = "none";
    var lw = document.getElementById('list-wordpress').style.backgroundColor = "#fff";
    var lh = document.getElementById('list-html5').style.backgroundColor = "#64e66d";
    var lineH5 = document.getElementById('line-html5').style.display = "block";
    var txHtml5 = document.getElementById('text-html5').style.display = "block";
};
function push1(){
    var txHtml5 = document.getElementById('text-html5').style.display = "none";
    var lineH5 = document.getElementById('line-html5').style.display = "none";
    var lw = document.getElementById('list-wordpress').style.backgroundColor = "#64e66d";
    var lh = document.getElementById('list-html5').style.backgroundColor = "#fff";
    var line = document.getElementById('line').style.display = "block";
    var tx = document.getElementById('text').style.display = "block";
 
};