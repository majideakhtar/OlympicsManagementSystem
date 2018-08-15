<style type="text/css">
        *{
            color: white;
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        .navigator a{
            width: 33%;
            float: left;
            border: 1px solid grey; 
            text-align: center;
            padding: 5px 0;
            text-decoration: none;
            color: white;
        }
        .navigator a:hover{
            background: grey;
            color: white;
        }
        table{

            width: 80%;
            margin: 0 auto;

        }
        table tr th,td{
            border: 1px solid grey
        }
        .header{
            color: white;
            margin-bottom: 20px;
            overflow: hidden;
        }
        .cont{
            text-align: center;
        }

body {
  background-image: url("img/4.jpg");
  background-size: cover;
}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="main.js"></script>
    <div class="header">
<div style="border: 1px solid grey;padding: 10px">
	<span><a href="./index.php"><b>Olympics Stats</b></a></span>
	<a href="./admin.php" style="float: right">Admin login</a>
	</div>
	<div class="navigator">
		<a href="./players.php">Players</a>
		<a href="./schedule.php">Schedule</a>
		<a href="./result.php">Results</a>
	</div>
</div>