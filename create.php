<?php
  session_start();
  ob_start();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>BracketForge - Create Bracket</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link src="formats.js">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js">
		/*
		$(document).ready(function() {
			$('#bracketSport').on('change', function() {
				var selectedSport = $(this).val();
				$.ajax({
					url: 'create.php',
					method: 'POST',
					data: { selectedSport: selectedSport },
					success: function(response) {
					}
				});
			});
		});*/

		$(document).ready(function() {
			$('#createForm').submit(function(event) {
				event.preventDefault(); // prevent the form from submitting normally
				
				// get the form data
				var formData = $(this).serialize();
				
				// submit the form using AJAX
				$.ajax({
					url: $(this).attr('action'),
					type: $(this).attr('method'),
					data: formData,
					success: function(response) {
						// handle the response
						console.log(response);
					},
					error: function(jqXHR, textStatus, errorThrown) {
						// handle the error
						console.log(textStatus + ': ' + errorThrown);
					}
				});
			});
		});

	</script>
	<script>
		
		function toggleDark() {
			var btn = document.getElementById("dark");
			var body = document.body;
			if (body.classList.contains("dark-theme")){
				body.classList.remove("dark-theme");
				btn.innerHTML = "Dark mode";
			}
			else{
				body.classList.add("dark-theme");
				btn.innerHTML = "Light mode";
			}
		}
		
		function dropLogin() {
			var loginForm = document.getElementById("loginForm") 
			if(loginForm.classList.contains("show")){
				loginForm.style.display = "none";
				loginForm.classList.remove("show");
			}
			else {
				loginForm.style.display = "block";
				loginForm.classList.add("show");
			}
		}
		
		/*window.onclick = function(event) {
			if (!event.target.matches('.btn-login')) {
				var dropdowns = document.getElementsByClassName("dropdown-content");
				var i;
				for (i = 0; i < dropdowns.length; i++) {
					var openDropdown = dropdowns[i];
					if (openDropdown.classList.contains('show')) {
						openDropdown.classList.remove('show');
						openDropdown.style.display = "none";
					}
				}
			}
		}*/
		
		
		function idCreate(){
			var players = document.getElementsByClassName("participant");

			for (var i = 0; i < players.length; i++) {
				var player = players[i];

				player.setAttribute("id", "participant-" + (i + 1));
			}
		}
		
		function addPlayer() {
			var list = document.getElementById("participants");
			var players = document.getElementsByClassName("participant");
			var newDiv = document.createElement("div");
			var currentDiv = list.lastChild;

			newDiv.classList.add("participant");
			list.appendChild(newDiv);
			newDiv.classList.add("participant-handle", "ui-sortable-handle");
			currentDiv.appendChild(newDiv);
			
			
			for (var i = 0; i < players.length; i++) {
				var player = players[i];

				player.setAttribute("id", "participant-" + (i + 1));
			}
		}

		function openModal() {
		  var form = document.getElementById("createForm");

		  form.addEventListener("submit", function(event) {
			event.preventDefault();
		  });
		  var modal = document.getElementById("createModal");
		  modal.style.display = "block";

		  var body = document.getElementById("body");
		  body.style.overflow = "hidden";
		}


		function createBracket(){
		 	var modal = document.getElementById("createModal");
		 	modal.style.display = "none";
			var pModal = document.getElementById("playerModal");
			pModal.style.display = "block";

			var playerCount = document.getElementById("bracketPCount").value;
			var table = document.getElementById("playerCreate")
			var row1 = table.rows[1];
			var row2 = table.rows[2];
			var row3 = table.rows[3];
			var row4 = table.rows[4];
			var row5 = table.rows[5];
			var row6 = table.rows[6];
			var row7 = table.rows[7];
			var row8 = table.rows[8];
			var row9 = table.rows[9];
			var row10 = table.rows[10];
			var row11 = table.rows[11];
			var row12 = table.rows[12];
			var row13 = table.rows[13];
			var row14 = table.rows[14];
			var row15 = table.rows[15];
			var row16 = table.rows[16];
			var row17 = table.rows[17];
			var row18 = table.rows[18];
			var row19 = table.rows[19];
			var row20 = table.rows[20];
			var row21 = table.rows[21];
			var row22 = table.rows[22];
			var row23 = table.rows[23];
			var row24 = table.rows[24];
			var row25 = table.rows[25];
			var row26 = table.rows[26];
			var row27 = table.rows[27];
			var row28 = table.rows[28];
			var row29 = table.rows[29];
			var row30 = table.rows[30];
			var row31 = table.rows[31];
			var row32 = table.rows[32];
			
			if (playerCount == "2p") {
				row3.remove();
				row4.remove();
				row5.remove();
				row6.remove();
				row7.remove();
				row8.remove();
				row9.remove();
				row10.remove();
				row11.remove();
				row12.remove();
				row13.remove();
				row14.remove();
				row15.remove();
				row16.remove();
				row17.remove();
				row18.remove();
				row19.remove();
				row20.remove();
				row21.remove();
				row22.remove();
				row23.remove();
				row24.remove();
				row25.remove();
				row26.remove();
				row27.remove();
				row28.remove();
				row29.remove();
				row30.remove();
				row31.remove();
				row32.remove();
			}
			else if (playerCount == "4p") {
				row5.remove();
				row6.remove();
				row7.remove();
				row8.remove();
				row9.remove();
				row10.remove();
				row11.remove();
				row12.remove();
				row13.remove();
				row14.remove();
				row15.remove();
				row16.remove();
				row17.remove();
				row18.remove();
				row19.remove();
				row20.remove();
				row21.remove();
				row22.remove();
				row23.remove();
				row24.remove();
				row25.remove();
				row26.remove();
				row27.remove();
				row28.remove();
				row29.remove();
				row30.remove();
				row31.remove();
				row32.remove();

			}
			else if (playerCount == "8p") {
				row9.remove();
				row10.remove();
				row11.remove();
				row12.remove();
				row13.remove();
				row14.remove();
				row15.remove();
				row16.remove();
				row17.remove();
				row18.remove();
				row19.remove();
				row20.remove();
				row21.remove();
				row22.remove();
				row23.remove();
				row24.remove();
				row25.remove();
				row26.remove();
				row27.remove();
				row28.remove();
				row29.remove();
				row30.remove();
				row31.remove();
				row32.remove();

			}
			else if (playerCount == "16p") {
				row17.remove();
				row18.remove();
				row19.remove();
				row20.remove();
				row21.remove();
				row22.remove();
				row23.remove();
				row24.remove();
				row25.remove();
				row26.remove();
				row27.remove();
				row28.remove();
				row29.remove();
				row30.remove();
				row31.remove();
				row32.remove();
			}
		
		}

		function showBracket() {
			var playerform = document.getElementById("playerForm");

			playerform.addEventListener("submit", function(event) {
				event.preventDefault();
			});

			var body = document.getElementById("body");
		  	body.style.overflow = "auto";





			var playerCount = document.getElementById("bracketPCount").value;
			var r32 = document.getElementById("bracket-32p");
			var r16 = document.getElementById("bracket-16p");
			var r8 = document.getElementById("bracket-8p");
			var r4 = document.getElementById("bracket-4p");
			var r2 = document.getElementById("bracket-2p");

			var slot1 = document.getElementById("seed1");
			var slot2 = document.getElementById("seed2");
			var slot3 = document.getElementById("seed3");
			var slot4 = document.getElementById("seed4");
			var slot5 = document.getElementById("seed5");
			var slot6 = document.getElementById("seed6");
			var slot7 = document.getElementById("seed7");
			var slot8 = document.getElementById("seed8");
			var slot9 = document.getElementById("seed9");
			var slot10 = document.getElementById("seed10");
			var slot11 = document.getElementById("seed11");
			var slot12 = document.getElementById("seed12");
			var slot13 = document.getElementById("seed13");
			var slot14 = document.getElementById("seed14");
			var slot15 = document.getElementById("seed15");
			var slot16 = document.getElementById("seed16");

			var player1 = document.getElementById("playerName1").value;
			var player2 = document.getElementById("playerName2").value;
			var player3 = document.getElementById("playerName3").value;
			var player4 = document.getElementById("playerName4").value;
			var player5 = document.getElementById("playerName5").value;
			var player6 = document.getElementById("playerName6").value;
			var player7 = document.getElementById("playerName7").value;
			var player8 = document.getElementById("playerName8").value;
			var player9 = document.getElementById("playerName9").value;
			var player10 = document.getElementById("playerName10").value;
			var player11 = document.getElementById("playerName11").value;
			var player12 = document.getElementById("playerName12").value;
			var player13 = document.getElementById("playerName13").value;
			var player14 = document.getElementById("playerName14").value;
			var player15 = document.getElementById("playerName15").value;
			var player16 = document.getElementById("playerName16").value;
			
			if (playerCount == "2p") {
				r4.remove();
				r8.remove();
				r16.remove();
				r32.remove();
			}
			else if (playerCount == "4p") {
				r2.remove();
				r8.remove();
				r16.remove();
				r32.remove();
			}
			else if (playerCount == "8p") {
				r2.remove();
				r4.remove();
				r16.remove();
				r32.remove();
			}
			else if (playerCount == "16p") {
				r2.remove();
				r4.remove();
				r8.remove();

				slot1.innerHTML = player1;
				slot2.innerHTML = player2;
				slot3.innerHTML = player3;
				slot4.innerHTML = player4;
				slot5.innerHTML = player5;
				slot6.innerHTML = player6;
				slot7.innerHTML = player7;
				slot8.innerHTML = player8;
				slot9.innerHTML = player9;
				slot10.innerHTML = player10;
				slot11.innerHTML = player11;
				slot12.innerHTML = player12;
				slot13.innerHTML = player13;
				slot14.innerHTML = player14;
				slot15.innerHTML = player15;
				slot16.innerHTML = player16;
			}
			
			else {
				r2.remove();
				r4.remove();
				r8.remove();
				r16.remove();
			}
			var pModal = document.getElementById("playerModal");
			pModal.style.display = "none";
		}

		function clearSelect() {
			var selectField = document.getElementById("selectPlayer");
			var firstOption = selectField.querySelector('option:first-child');

			selectField.value = firstOption;
		}


	</script>
</head>

<body onload="openModal()" id="body">
	<div class="navbar-container">
		<div class="navbar">
			<div class="navbar-left">
				<a href="/YP/index.php">Home</a>
				<div class="active">Create Bracket</div>
				<a href="/YP/about.php">About</a>
			</div>
			
		</div>
	</div>

		<div id="createModal" class="create modal">
			<div class="modal-content">
			  <form method="post" id="createForm" action="create.php">
				<h2>Create Bracket</h2><br/>
				<p>
					<label for="bracketName">Bracket name: <span style="color:red;">*</span></label>
					<input type="text" id="bracketName" required>
				</p><br/>

				<p>
					<label for="bracketSport">Sport: <span style="color:red;">*</span></label>
					<select id="bracketSport" required>
					  <?php
						require "dbconn.php";
						$sql = "SELECT * FROM sport";
						$result = $dbconn->query($sql);

						while ($row = $result->fetch_assoc()){
					  ?>
							<option value="<?php echo $row["sport_id"];?>">
							  <?php echo $row["sport"];?>
							</option>
					  <?php
						}
						$dbconn->close();
					  ?>
					</select>
				</p><br/>
				<p>
				  <label for="bracketPCount">Player Count: <span style="color:red;">*</span></label>
				  <select id="bracketPCount" required>
					<option value="16p">16 players</option>
				  </select>
				</p><br/>
				<button type="submit" onclick="createBracket()" value="Create Bracket">Create Bracket</button>
			  </form>
			  
			</div>
		</div>

		<div id="playerModal" class="create modal">
			<div class="modal-content">
				<div class="playerTable">
					<form id="playerForm" method="post" action="create.php">
						<table id="playerCreate">
							<tr>
								<th>ID</th>
								<th>Player Name</th>
							</tr>
							<tr class="count-2">
								<td>1</td>
								<td>
								<input type="text" id="playerName1" name="p1">
								</td>
							</tr>
							<tr class="count-2">
								<td>2</td>
								<td>
								<input type="text" id="playerName2" name="p2">
								</td>
							</tr>
							<tr class="count-4">
								<td>3</td>
								<td>
								<input type="text" id="playerName3" name="p3">
								</td>
							</tr>
							<tr class="count-4">
								<td>4</td>
								<td>
								<input type="text" id="playerName4" name="p4">
								</td>
							</tr>
							<tr class="count-8">
								<td>5</td>
								<td>
								<input type="text" id="playerName5" name="p5">
								</td>
							</tr>
							<tr class="count-8">
								<td>6</td>
								<td>
									<input type="text" id="playerName6" name="p6">
								</td>
							</tr>
							<tr class="count-8">
								<td>7</td>
								<td>
									<input type="text" id="playerName7" name="p7">
								</td>
							</tr>
							<tr class="count-8">
								<td>8</td>
								<td>
									<input type="text" id="playerName8" name="p8">
								</td>
							</tr>
							<tr class="count-12">
								<td>9</td>
								<td>
									<input type="text" id="playerName9" name="p9">
								</td>
							</tr>
							<tr class="count-16">
								<td>10</td>
								<td>
									<input type="text" id="playerName10" name="p10">
								</td>
							</tr>
							<tr class="count-12">
								<td>11</td>
								<td>
									<input type="text" id="playerName11" name="p11">
								</td>
							</tr>
							<tr class="count-16">
								<td>12</td>
								<td>
									<input type="text" id="playerName12" name="p12">
								</td>
							</tr>
							<tr class="count-16">
								<td>13</td>
								<td>
									<input type="text" id="playerName13" name="p13">
								</td>
							</tr>
							<tr class="count-16">
								<td>14</td>
								<td>
									<input type="text" id="playerName14" name="p14">
								</td>
							</tr>
							<tr class="count-16">
								<td>15</td>
								<td>
									<input type="text" id="playerName15" name="p15">
								</td>
							</tr>
							<tr class="count-16">
								<td>16</td>
								<td>
									<input type="text" id="playerName16" name="p16">
								</td>
							</tr>
							<tr class="count-32">
								<td>17</td>
								<td>
									<input type="text" id="playerName17" name="p17">
								</td>
							</tr>
							<tr class="count-32">
								<td>18</td>
								<td>
									<input type="text" id="playerName18" name="p18">
								</td>
							</tr>
							<tr class="count-32">
								<td>19</td>
								<td>
									<input type="text" id="playerName19" name="p19">
								</td>
							</tr>
							<tr class="count-32">
								<td>20</td>
								<td>
									<input type="text" id="playerName20" name="p20">
								</td>
							</tr>
							<tr class="count-32">
								<td>21</td>
								<td>
									<input type="text" id="playerName21" name="p21">
								</td>
							</tr>
							<tr class="count-32">
								<td>22</td>
								<td>
									<input type="text" id="playerName22" name="p22">
								</td>
							</tr>
							<tr class="count-32">
								<td>23</td>
								<td>
									<input type="text" id="playerName23" name="p23">
								</td>
							</tr>
							<tr class="count-32">
								<td>24</td>
								<td>
									<input type="text" id="playerName24" name="p24">
								</td>
							</tr>
							<tr class="count-32">
								<td>25</td>
								<td>
									<input type="text" id="playerName25" name="p25">
								</td>
							</tr>
							<tr class="count-32"> 
								<td>26</td>
								<td>
									<input type="text" id="playerName26" name="p26">
								</td>
							</tr>
							<tr class="count-32">
								<td>27</td>
								<td>
									<input type="text" id="playerName27" name="p27">
								</td>
							</tr>
							<tr class="count-32">
								<td>28</td>
								<td>
									<input type="text" id="playerName28" name="p28">
								</td>
							</tr>
							<tr class="count-32">
								<td>29</td>
								<td>
									<input type="text" id="playerName29" name="p29">
								</td>
							</tr>
							<tr class="count-32">
								<td>30</td>
								<td>
									<input type="text" id="playerName30" name="p30">
								</td>
							</tr>
							<tr class="count-32">
								<td>31</td>
								<td>
									<input type="text" id="playerName31" name="p31">
								</td>
							</tr>
							<tr class="count-32">
								<td>32</td>
								<td>
									<input type="text" id="playerName32" name="p32">
								</td>
							</tr>
					
						</table>
					<input type="submit" onclick="showBracket()" value="Show Bracket">
				</div>
			</div>
		</div>

	

		<div id="bracket-16p" class="bracket">
			<div class="round round-16" id="round-16">
					<div class="game" id="game-8">
						<div class="slot slot-top">
							<div class="slot-seed">1</div>
							<div id="seed1" class="slot-name r16 seed-1"><?php echo $_POST['playerName1']; ?></div>
							<div class="slot-score"></div>
						</div>
						<div class="slot slot-bot">
							<div class="slot-seed">16</div>
							<div id="seed16" class="slot-name r16 seed-16"><?php echo $_POST['playerName16']; ?></div>
							<div class="slot-score"></div>
						</div>
					</div>
					<div class="game" id="game-9">
						<div class="slot slot-top">
							<div class="slot-seed">9</div>
							<div id="seed9" class="slot-name r16 seed-9"><?php echo $_POST['playerName9']; ?></div>
							<div class="slot-score"></div>
						</div>
						<div class="slot slot-bot">
							<div class="slot-seed">8</div>
							<div id="seed8" class="slot-name r16 seed-8"><?php echo $_POST['playerName8']; ?></div>
							<div class="slot-score"></div>
						</div>
					</div>
					<div class="game" id="game-10">
						<div class="slot slot-top">
							<div class="slot-seed">5</div>
							<div id="seed5" class="slot-name r16 seed-5"><?php echo $_POST['playerName5']; ?></div>
							<div class="slot-score"></div>
						</div>
						<div class="slot slot-bot">
							<div class="slot-seed">12</div>
							<div id="seed12" class="slot-name r16 seed-12"><?php echo $_POST['playerName9']; ?></div>
							<div class="slot-score"></div>
						</div>
					</div>
					<div class="game" id="game-11">
						<div class="slot slot-top">
							<div class="slot-seed">13</div>
							<div id="seed13" class="slot-name r16 seed-13"><?php echo $_POST['playerName9']; ?></div>
							<div class="slot-score"></div>
						</div>
						<div class="slot slot-bot">
							<div class="slot-seed">4</div>
							<div id="seed4" class="slot-name r16 seed-4"><?php echo $_POST['playerName4']; ?></div>
							<div class="slot-score"></div>
						</div>
					</div>
					<div class="game game-right" id="game-12">
						<div class="slot slot-top">
							<div class="slot-seed">3</div>
							<div id="seed3" class="slot-name r16 seed-3"><?php echo $_POST['playerName3']; ?></div>
							<div class="slot-score"></div>
						</div>
						<div class="slot slot-bot">
							<div class="slot-seed">14</div>
							<div id="seed14" class="slot-name r16 seed-14"><?php echo $_POST['playerName14']; ?></div>
							<div class="slot-score"></div>
						</div>
					</div>
					<div class="game game-right" id="game-13">
						<div class="slot slot-top">
							<div class="slot-seed">11</div>
							<div id="seed11" class="slot-name r16 seed-11"><?php echo $_POST['playerName9']; ?></div>
							<div class="slot-score"></div>
						</div>
						<div class="slot slot-bot">
							<div class="slot-seed">6</div>
							<div id="seed6" class="slot-name r16 seed-6"><?php echo $_POST['playerName6']; ?></div>
							<div class="slot-score"></div>
						</div>
					</div>
					<div class="game game-right" id="game-14">
						<div class="slot slot-top">
							<div class="slot-seed">7</div>
							<div id="seed7" class="slot-name r16 seed-7"><?php echo $_POST['playerName7']; ?></div>
							<div class="slot-score"></div>
						</div>
						<div class="slot slot-bot">
							<div class="slot-seed">10</div>
							<div id="seed10" class="slot-name r16 seed-10"><?php echo $_POST['playerName9']; ?></div>
							<div class="slot-score"></div>
						</div>
					</div>
					<div class="game game-right" id="game-15">
						<div class="slot slot-top">
							<div class="slot-seed">15</div>
							<div id="seed15" class="slot-name r16 seed-15"><?php echo $_POST['playerName15']; ?></div>
							<div class="slot-score"></div>
						</div>
						<div class="slot slot-bot">
							<div class="slot-seed">2</div>
							<div id="seed2" class="slot-name r16 seed-2"><?php echo $_POST['playerName2']; ?></div>
							<div class="slot-score"></div>
						</div>
					</div>
				</div>
				<div class="connectors connectors-8">
					<div class="connector"></div>
					<div class="connector"></div>
					<div class="connector connector-right"></div>
					<div class="connector connector-right"></div>
				</div>
				<div class="round round-8" id="round-8">
					<div class="game" id="game-4">
						<div class="slot slot-top">
							<div class="slot-seed"></div>
							<div class="slot-name r8 seed-1"></div>
							<div class="slot-score"></div>
						</div>
						<div class="slot slot-bot">
							<div class="slot-seed"></div>
							<div class="slot-name r8 seed-8"></div>
							<div class="slot-score"></div>
						</div>
					</div>
					<div class="game" id="game-5">
						<div class="slot slot-top">
							<div class="slot-seed"></div>
							<div class="slot-name r8 seed-5"></div>
							<div class="slot-score"></div>
						</div>
						<div class="slot slot-bot">
							<div class="slot-seed"></div>
							<div class="slot-name r8 seed-4"></div>
							<div class="slot-score"></div>
						</div>
					</div>
					<div class="game game-right" id="game-6">
						<div class="slot slot-top">
							<div class="slot-seed"></div>
							<div class="slot-name r8 seed-3"></div>
							<div class="slot-score"></div>
						</div>
						<div class="slot slot-bot">
							<div class="slot-seed"></div>
							<div class="slot-name r8 seed-6"></div>
							<div class="slot-score"></div>
						</div>
					</div>
					<div class="game game-right" id="game-7">
						<div class="slot slot-top">
							<div class="slot-seed"></div>
							<div class="slot-name r8 seed-7"></div>
							<div class="slot-score"></div>
						</div>
						<div class="slot slot-bot">
							<div class="slot-seed"></div>
							<div class="slot-name r8 seed-2"></div>
							<div class="slot-score"></div>
						</div>
					</div>
				</div>
				<div class="connectors connectors-4">
					<div class="connector"></div>
					<div class="connector connector-right"></div>
				</div>
				<div class="round round-4" id="round-4">
					<div class="game" id="game-2">
						<div class="slot slot-top">
							<div class="slot-seed"></div>
							<div class="slot-name r4 seed-1"></div>
							<div class="slot-score"></div>
						</div>
						<div class="slot slot-bot">
							<div class="slot-seed"></div>
							<div class="slot-name r4 seed-4"></div>
							<div class="slot-score"></div>
						</div>
					</div>
					<div class="game game-right" id="game-3">
						<div class="slot slot-top">
							<div class="slot-seed"></div>
							<div class="slot-name r4 seed-3"></div>
							<div class="slot-score"></div>
						</div>
						<div class="slot slot-bot">
							<div class="slot-seed"></div>
							<div class="slot-name r4 seed-2"></div>
							<div class="slot-score"></div>
						</div>
					</div>
				</div>
				<div class="connectors connectors-2">
					<div class="connector"></div>
				</div>
				<div class="round round-2" id="round-2">
					<div class="game" id="game-1">
						<div class="slot slot-top">
							<div class="slot-seed"></div>
							<div class="slot-name r2 seed-1"></div>
							<div class="slot-score"></div>
						</div>
						<div class="slot slot-bot">
							<div class="slot-seed"></div>
							<div class="slot-name r2 seed-2"></div>
							<div class="slot-score"></div>
						</div>
					</div>
				</div>		
				<div class="round round-finals" id="round-finals">
				<div class="game" id="game-0">
					<div class="slot slot-top">
						<div class="slot-seed"></div>
						<div class="slot-name"></div>
						<div class="slot-score"></div>
					</div>
				</div>
			</div>						
		</div>

		<div id="bracket-8p" class="bracket">
			<div class="round round-8" id="round-8">
					<div class="game" id="game-4">
						<div class="slot slot-top">
							<div class="slot-seed">1</div>
							<div class="slot-name r8 seed-1"></div>
							<div class="slot-score"></div>
						</div>
						<div class="slot slot-bot">
							<div class="slot-seed">8</div>
							<div class="slot-name r8 seed-8"></div>
							<div class="slot-score"></div>
						</div>
					</div>
					<div class="game" id="game-5">
						<div class="slot slot-top">
							<div class="slot-seed">5</div>
							<div class="slot-name r8 seed-5"></div>
							<div class="slot-score"></div>
						</div>
						<div class="slot slot-bot">
							<div class="slot-seed">4</div>
							<div class="slot-name r8 seed-4"></div>
							<div class="slot-score"></div>
						</div>
					</div>
					<div class="game game-right" id="game-6">
						<div class="slot slot-top">
							<div class="slot-seed">3</div>
							<div class="slot-name r8 seed-3"></div>
							<div class="slot-score"></div>
						</div>
						<div class="slot slot-bot">
							<div class="slot-seed">6</div>
							<div class="slot-name r8 seed-6"></div>
							<div class="slot-score"></div>
						</div>
					</div>
					<div class="game game-right" id="game-7">
						<div class="slot slot-top">
							<div class="slot-seed">7</div>
							<div class="slot-name r8 seed-7"></div>
							<div class="slot-score"></div>
						</div>
						<div class="slot slot-bot">
							<div class="slot-seed">2</div>
							<div class="slot-name r8 seed-2"></div>
							<div class="slot-score"></div>
						</div>
					</div>
				</div>
				<div class="connectors connectors-4">
					<div class="connector"></div>
					<div class="connector connector-right"></div>
				</div>
				<div class="round round-4" id="round-4">
					<div class="game" id="game-2">
						<div class="slot slot-top">
							<div class="slot-seed"></div>
							<div class="slot-name r4 seed-1"></div>
							<div class="slot-score"></div>
						</div>
						<div class="slot slot-bot">
							<div class="slot-seed"></div>
							<div class="slot-name r4 seed-4"></div>
							<div class="slot-score"></div>
						</div>
					</div>
					<div class="game game-right" id="game-3">
						<div class="slot slot-top">
							<div class="slot-seed"></div>
							<div class="slot-name r4 seed-3"></div>
							<div class="slot-score"></div>
						</div>
						<div class="slot slot-bot">
							<div class="slot-seed"></div>
							<div class="slot-name r4 seed-2"></div>
							<div class="slot-score"></div>
						</div>
					</div>
				</div>
				<div class="connectors connectors-2">
					<div class="connector"></div>
				</div>
				<div class="round round-2" id="round-2">
					<div class="game" id="game-1">
						<div class="slot slot-top">
							<div class="slot-seed"></div>
							<div class="slot-name r2 seed-1"></div>
							<div class="slot-score"></div>
						</div>
						<div class="slot slot-bot">
							<div class="slot-seed"></div>
							<div class="slot-name r2 seed-2"></div>
							<div class="slot-score"></div>
						</div>
					</div>
				</div>		
			<div class="round round-finals" id="round-finals">
				<div class="game" id="game-0">
					<div class="slot slot-top">
						<div class="slot-seed"></div>
						<div class="slot-name"></div>
						<div class="slot-score"></div>
					</div>
				</div>
			</div>									
		</div>

		<div id="bracket-4p" class="bracket">
			<div class="round round-4" id="round-4">
					<div class="game" id="game-2">
						<div class="slot slot-top">
							<div class="slot-seed">1</div>
							<div class="slot-name r4 seed-1"></div>
							<div class="slot-score"></div>
						</div>
						<div class="slot slot-bot">
							<div class="slot-seed">4</div>
							<div class="slot-name r4 seed-4"></div>
							<div class="slot-score"></div>
						</div>
					</div>
					<div class="game game-right" id="game-3">
						<div class="slot slot-top">
							<div class="slot-seed">3</div>
							<div class="slot-name r4 seed-3"></div>
							<div class="slot-score"></div>
						</div>
						<div class="slot slot-bot">
							<div class="slot-seed">2</div>
							<div class="slot-name r4 seed-2"></div>
							<div class="slot-score"></div>
						</div>
					</div>
				</div>
				<div class="connectors connectors-2">
					<div class="connector"></div>
				</div>
				<div class="round round-2" id="round-2">
					<div class="game" id="game-1">
						<div class="slot slot-top">
							<div class="slot-seed"></div>
							<div class="slot-name r2 seed-1"></div>
							<div class="slot-score"></div>
						</div>
						<div class="slot slot-bot">
							<div class="slot-seed"></div>
							<div class="slot-name r2 seed-2"></div>
							<div class="slot-score"></div>
						</div>
					</div>
				</div>		
				<div class="round round-finals" id="round-finals">
				<div class="game" id="game-0">
					<div class="slot slot-top">
						<div class="slot-seed"></div>
						<div class="slot-name"></div>
						<div class="slot-score"></div>
					</div>
				</div>
			</div>														
		</div>

		<div id="bracket-2p" class="bracket">
			<div class="round round-2" id="round-2">
				<div class="game" id="game-1">
					<div class="slot slot-top">
						<div class="slot-seed">1</div>
						<div class="slot-name r2 seed-1"></div>
						<div class="slot-score"></div>
					</div>
					<div class="slot slot-bot">
						<div class="slot-seed">2</div>
						<div class="slot-name r2 seed-2"></div>
						<div class="slot-score"></div>
					</div>
				</div>
			</div>		
			<div class="round round-finals" id="round-finals">
				<div class="game" id="game-0">
					<div class="slot slot-top">
						<div class="slot-seed"></div>
						<div class="slot-name"></div>
						<div class="slot-score"></div>
					</div>
				</div>
			</div>					
		</div>

	<div class="footer">
		<div>
			Welcome to BracketForge, the start of a new wave of bracket generators!
		</div>
        <div style="margin-top: 50px">
                Created by Sebastian Ljungars 2023
        </div>
	</div>
</body>
</html>
