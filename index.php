<!DOCTYPE html>
<html>
<style>
* {
	box-sizing: border-box;
}
h1{
	text-align: center;
	background-color: green;
	color: white;
	font-family: Verdana;
	padding: 20px;
	border: 5px solid gray;
}
a{
	text-decoration:none;
	color: white;
	transition: 0.6s ease;
}
p{
	text-align: center;
	background-color: green;
	color: white;
	font-family: Verdana;
	padding: 10px;
	border: 5px solid gray;
}
.outer-grid{
	display: flex;
	flex-wrap: wrap;
	padding: 0 4px;
}
.inner-grid{
	flex: 25%;
	max-width: 25%;
	padding: 0 4px;
}
.inner-grid img{
	margin-top: 8px;
	width: 100%;
	padding: 10px;
}
@media screen and (max-width: 800px){
	.inner-grid{
		flex: 50%;
		max-width: 50%;
	}
}
@media screen and (max-width: 600px){
	.inner-grid{
		flex: 100%;
		max-width: 100%;
	}
}
</style>
<body>
<h1>MY PERSONAL PHOTO ALBUM</h1>
<div class ="outer-grid">
<div class ="inner-grid">
<a href ="hoami2.html">
<img src="image1.png">
<p>ELEMENTARY DAYS</p>
<img src="h6.jpg" height="222">
</div>

<div class="inner-grid">
<a href ="hoami3.html">
<img src="image1.png">
<p>HIGH SCHOOL DAYS</p>
<img src="e6.jpg" height="222">
</div>

<div class="inner-grid">
<a href ="hoami4.html">
<img src="image1.png">
<p>SENIOR HIGH SCHOOL DAYS</p>
<img src="s4.jpg">
</div>

<div class="inner-grid">
<a href ="hoami5.html">
<img src="image1.png">
<p>COLLEGE DAYS</p>
<img src="c4.jpg" height="222">
</div>
</div>
</body>
</html>