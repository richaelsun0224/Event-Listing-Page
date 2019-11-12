<?php 
/*
Template Name: Events V2
*/ 
?>

<?php get_header(); ?>

<style type="text/css">
::selection {
	background:rgba(0,0,0,0);
}

*.unselectable {
   -moz-user-select: none;
   -khtml-user-select: none;
   -webkit-user-select: none;
   -ms-user-select: none;
   user-select: none;
}

.q_logo {
	visibility:hidden;
}

.q_logo .normal {
	visibility:visible;
}

.banner-container {
	position: relative;
	height:300px; 
	width:100vw; 
	margin-top:100px; 
	background-color:rgb(0,0,0);
}

.banner {
	position:relative;
	height:100%; 
	width:100vw; 
	margin-top:100px; 
	background-image: url('https://cdn.newsday.com/polopoly_fs/1.31109990.1558009167!/httpImage/image.jpg_gen/derivatives/landscape_768/image.jpg'); 
	opacity: 0.25; 
	background-position: 50% 45%; 
	background-repeat:no-repeat; 
	background-size:100vw; 
}

.title-text {
	margin:0px;
	padding:0px;
	position:absolute; 
	height:300px; 
	width:100vw;
	text-align:center;
	transform: translate(0,-60%);
}

.title-text h1{
	font-family:'Oswald'; 
	font-size:68px;
	line-height:68px;
	background-color:rgba(255,255,255,1); 
	-webkit-background-clip: text; 
	-webkit-text-fill-color: transparent;
}

.filterDiv {
  float: left;
  background-color: #2196F3;
  color: #ffffff;
  height: 200px;
  width:45%;
  min-width:700px;
  text-align: left;
  margin:auto;
  margin-bottom:20px; 
  padding:auto;
  display: table;
  transition:all 0.1s ease-in;
}

.filterDiv open {
	transition:all 0.3s ease-out;
}

.show {
  display: table;
}

.card-deck {
  margin-top: 20px;
  overflow: hidden;
}

.date {
	height:200px; 
	line-height:200px;
	width:150px; 
	z-index:2;
	text-align:middle;
}

.event {
	display:table-cell; 
	height:200px; 
	width:100%; 
}

.event-info {
	position:relative; 
	height:200px; 
	width:100%; 
	background-color:rgba(0,0,0,0.7);
}

.dd {
	color:white; 
	font-family:'Oswald'; 
	font-size:68px;
	line-height:68px; 
	font-weight:600;
	padding:0px;
	margin:0px;
}

.mm {
	color:white; 
	font-family:'Oswald'; 
	font-size:36px; 
	line-height:36px;
	font-weight:600;
	padding:0px;
	margin:0px;
}

.arrow {
	position:absolute; 
	right:-45px; 
	height:200px; 
	width:180px; 
	padding:60px;
	opacity:0.7; 
	visibility:visible;
}

.description {
	height:100px; 
	width:40%; 
	border-left: white solid 2px; 
	margin:20px; 
	padding-left:20px; 
	right:4%;  
	visibility:hidden;
}

.description p {
	color:white;
	height:65px; 
	max-height:65px; 
	display:-webkit-box; 
	-webkit-box-orient:vertical; 
	-webkit-line-clamp:3; 
	overflow:hidden; 
	text-overflow:ellipsis; 
	font-family:'Open Sans';
	font-style: normal;
	font-weight:300;
}

.headline {
	padding:20px; 
	left:145px;
}

.locImg {
	height:20px; 
	width:20px;
}

.location {
	padding-top:10px; 
	font-size:calc(14px + 0.2vw); 
	line-height:20px;
	font-family:'Open Sans';
	font-weight:400;
}

.event-title {
	width:25vw;
	min-width:205px;
	font-family:'Open Sans';
	font-weight:600;
}

.signUpBtn {
	position:absolute;
	border:none; 
	margin-left:170px;
	margin-top:150px;
}

.btn1 {
	width:120px; 
	height:30px; 
	border:none; 
	background-color:rgb(250,40,40); 
	color:white; 
}

#btn1 {
	width:120px; 
	height:30px; 
	border:none; 
	background-color:rgb(250,40,40); 
	color:white; 
}

#btn2 {
	width:120px; 
	height:30px; 
	border:none; 
	background-color:rgb(250,40,40); 
	color:white; 
}

.signUpBtn p {
	font-family:'Open Sans'; 
	color:white; 
	font-size:16px; 
	font-weight:600;
	line-height:26px;
}

.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #fff;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}

@media only screen and (max-width: 600px) {
	.banner-container {
		height: 150px;
		width: auto;
		margin-top: 0px;
	}

	.banner {
		height: 150px;
		width: auto;
		margin-top: 0px;
	}

	.title-text {
		height: 50px;
		top: 70px;
	}

	.title-text h1{
		font-size: 50px;
	}

	.filterDiv {
		height: 130px;
		width: 95%;
		min-width: 100px;
	}

	.filterDiv open {
		transition:all 0.3s ease-out;
	}

	.date {
		height:130px;
		line-height:100px;
		width:80px; 		
	}

	.event {
		height:100%;
		padding:0px;
	}

	.event-info {
		height:100%;
	}

	.dd {
		font-size:40px;
		line-height:40px;
	}

	.mm {
		font-size:22px;
		line-height:22px;
	}

	.arrow {
		visibility: hidden;
	}

	.headline {
		height:215px;
		padding:12px; 
		padding-left:15px;
		left:80px;
	}

	.locImg {
		height:15px; 
		width:15px;
	}

	.location {
		padding-top:5px; 
		font-size:14px; 
		font-weight:400;
		line-height:16px;
	}

	.event-title {
		width:60vw;
	}

	.description {
		height:110px; 
		max-height:none; 
		width:70%; 
		border-left: white solid 0px; 
		margin:0px; 
		top:85px;
		left:70px;
		padding-left:30px; 
		right:5%; 
		color:white; 
		display:-webkit-box; 
		-webkit-box-orient:vertical; 
		-webkit-line-clamp:8; 
		overflow:hidden; 
		text-overflow:ellipsis; 
		visibility:hidden;
		font-size:12px;
		line-height:14px;
	}

	.description p {
		font-size:12px;
	}

	.signUpBtn {
		position:relative;
		width:100%; 
		height:30px;
		margin:0px;
		padding:0px;
		background:none; 
		color:white; 
		z-index:2;
		transform: translate(0,333.3%);
	}

	.btn1 {
		float:left;
		border-right:1px solid black;
		width:33.3%;
		height:100%;
		margin:0px;
		padding:0px;	
	}

	#btn1 {
		float:left;
		border-right:1px solid black;
		width:33.3%;
		height:100%;
		margin:0px;
		padding:0px;	
	}

	#btn2 {
		float:left;
		border-right:1px solid black;
		width:50%;
		height:100%;
		margin:0px;
		padding:0px;	
	}

	.signUpBtn p {
		font-size:15px; 
		line-height:26px;
	}
}
</style>

<div class="banner-container">
	<div class="banner"></div>
	<div class="title-text">
		<h1>UPCOMING EVENTS</h1>
	</div>
</div>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div id="myBtnContainer" class="btn-group" style="position:relative; width:80vw; max-width:600px; margin:0px; margin-top:60px; margin-bottom:60px; left:50%; transform:translate(-50%, 0%);">
	<button class="btn active" onclick="filterSelection('New York')">ALL</button>
	<button class="btn" onclick="filterSelection('Manhattan')">Manhattan</button>
	<button class="btn" onclick="filterSelection('Brooklyn')">Brooklyn</button> 
	<button class="btn" onclick="filterSelection('Queens')">Queens</button> 
	<button class="btn" onclick="filterSelection('Bronx')">Bronx</button> 
	<button class="btn" onclick="filterSelection('Long Island')">Long Island</button> 
</div>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<?php if( have_rows('event_info') ): ?>
	<div class="card-deck" style="color:white; margin:0 auto; margin-bottom:50px;">

	<?php while ( have_rows('event_info') ): the_row();
		
		$ind = get_row_index();
		$image = get_sub_field('event_img');
		$title = get_sub_field('event_title');
		$city = get_sub_field('city');
		$loc = get_sub_field('event_location');		
		$day = get_sub_field('day');		
		$month = get_sub_field('month');		
		$content = get_sub_field('description');		
		$link = get_sub_field('link');	
		$eventid = get_sub_field('eventid');	
		
		?>
		<!-- <div class="filterDiv <?=$city?>" onclick="show(this,<?=$ind?>)" onmouseout="hide(this,<?=$ind?>)" onclick="location.href='<?php echo $link; ?>'" style="display:table; height:150px; width:45%; min-width:600px; margin:0 auto; margin-bottom:20px; padding:0 auto;"> -->

		<div id="event-card" class="filterDiv <?=$city?>" onclick="clickEvents(this,<?=$ind?>)">

			<div id="event-date<?=$ind?>" class="date" style="display:table-cell; margin:0 auto; background-color:black; float:left; position:absolute;">
				<div class="card-body text-center" id="event-card-body<?=$ind?>" style="display:inline-block; height:auto; width:100%; vertical-align:middle;">
					<p class="mm">
						<?php echo $month; ?>
					</p>
					<p class="dd">
						<?php echo $day; ?>
					</p>
				</div>
			</div>

			<div class="event" style="position:relative; background:url('<?=$image?>') no-repeat 50% 50%/cover;">
				<div class="event-info">
					<div class="headline" unselectable="on" style="position:absolute; margin:0 auto; width:100%;">
						<p class="event-title" style="color:white; margin:0px; padding:0px; padding-left:5px; font-size:calc(16px + 0.6vw); line-height:calc(18px + 0.8vw); "> <?=$title;?> </p>
						<p class="location" style="color:white; margin:0px;"> 
							<img src="https://i.pinimg.com/originals/71/c8/06/71c806428f9d8c76f8dd491ee177382c.png" class="locImg"> 
							<?=$loc;?> 
						</p>
					</div>
					<div class="signUpBtn" id="signUp<?=$ind?>">
						<?php if( $eventid ): ?>
							<button class="btn1" id="example-widget-trigger-<?=$eventid?>" type="button" data-value="1" onclick="checkOut('<?=$eventid?>')">
								<p>Attend</p>
							</button>
							<button class="typeform-share button" id="btn1" href="https://schnepsmedia.typeform.com/to/OJAMtE?event_name=<?=$title?>" data-mode="popup" target="_blank">
								<p>Nominate</p>
							</button>
							<button class="typeform-share button" id="btn1" href="https://schnepsmedia.typeform.com/to/tb5jfh?event_name=<?=$title?>" data-mode="popup" target="_blank">
								<p>Sponsor</p>
							</button>
						<?php else: ?>
							<button class="typeform-share button" id="btn2" href="https://schnepsmedia.typeform.com/to/OJAMtE?event_name=<?=$title?>" data-mode="popup" target="_blank">
								<p>Nominate</p>
							</button>
							<button class="typeform-share button" id="btn2" href="https://schnepsmedia.typeform.com/to/OJAMtE?event_name=<?=$title?>" data-mode="popup" target="_blank">
								<p>Sponsor</p>
							</button>
						<?php endif; ?>
					</div>
					<div class="description" id="event-description<?=$ind?>" style="position:absolute;"> 
						<p><?php echo $content; ?></p>
						<a href="<?php echo $link; ?>" target="_blank">More Details >></a>
					</div> 
					<img src="https://ya-webdesign.com/transparent250_/white-arrow-transparent-png-1.png" class="arrow" id="arrow<?=$ind?>"> 
				</div>
			</div>
		</div>
		
		<?php if( $link ): ?>
				</a>
		<?php endif; ?>

	<?php endwhile; ?>

	</div>

<?php endif; ?>

<script src="https://www.eventbrite.com/static/widgets/eb_widgets.js"></script>

<script>
	filterSelection("New York")
	function filterSelection(c) {
		var x, i;
		x = document.getElementsByClassName("filterDiv");
		if (c == "New York") { c = "";}
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";
			if  (x[i].className.indexOf(c) > -1) {
				x[i].style.display = "table";
			}
		}
	}

	var btnContainer = document.getElementById("myBtnContainer");
	var btns = btnContainer.getElementsByClassName("btn");
	for (var i = 0; i < btns.length; i++) {
	btns[i].addEventListener("click", function(){
		var current = document.getElementsByClassName("active");
		current[0].className = current[0].className.replace(" active", "");
		this.className += " active";
	});
	}

	function clickEvents(x, i) {
	
		if (!x.classList.contains("open")) {
			x.classList.add("open");
			if(window.innerWidth <= 600) {
				x.style.height = "250px";
				document.getElementById('event-date'+i).style.height = "220px";
				document.getElementById('signUp'+i).style.transform = "translate(0,733.3%)";
			} else {
				x.style.width = "95%";
				document.getElementById('arrow'+i).style.visibility = "hidden";
			}
			document.getElementById('event-description'+i).style.visibility = "visible";
		} else {
			x.classList.remove("open");
			if(window.innerWidth <= 600) {
				x.style.height = "130px";
				document.getElementById('event-date'+i).style.height = "100px";
				document.getElementById('signUp'+i).style.transform = "translate(0,333.3%)";
			} else {
				x.style.width = "45%";
				document.getElementById('arrow'+i).style.visibility = "visible";
			}
			document.getElementById('event-description'+i).style.visibility = "hidden";
		}
		
	}

	function checkOut(i) {
		var exampleCallback = function() {
			console.log("Order complete!");
		};

		window.EBWidgets.createWidget({
			widgetType: "checkout",
			eventId: i,
			modal: true,
			modalTriggerElementId: "example-widget-trigger-" + i,
			onOrderComplete: exampleCallback
		});
	}

	(function() { 
		var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm_share", b="https://embed.typeform.com/"; 
		if(!gi.call(d,id)){ 
			js=ce.call(d,"script"); 
			js.id=id; 
			js.src=b+"embed.js"; 
			q=gt.call(d,"script")[0]; 
			q.parentNode.insertBefore(js,q) 
		} 
	})() 

</script>

<?php get_footer(); ?>
