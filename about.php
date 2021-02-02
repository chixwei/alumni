<DOCTYPE! html>
<html>
<head>
<style>

ul{
	padding: 5px;
	margin: 0px;
	list-style: none;
}

ul li{
	float: left;
	background-color: rgba(56,105,255);
	width: 19.8%;
	height: 50px;
	line-height: 30px;
	text-align: center;
	margin: 1px;
}

ul li ul li{
	display:none;
	width:100%;
	margin:unset;
}

ul li:hover ul li{
	display:block;
}

ul li:hover{
	transition: 0.1s;
}

ul li ul li:hover{
	background-color: grey;
}

div.gallery{
	margin:1%;
	border: 1px solid white;
	float:left;
	width:22.8%;
}

div.gallery:hover{
	border: 1px solid black;
}

div.gallery img{
	width: 100%;
	height: 200px;
}

div.desc {
	padding:10px;
	text-align: center;
}

</style>
</head>

<body>
<ul>
<li>Home</li>
<li>About
<ul>

<li>Our Team</li>
<li>Camp Sites</li>
<li>Mission & Vision</li>
<li>Resources</li>
</ul>

<li>Things to do</li>
<li>Contact</li>
<li>News</li>
</ul>