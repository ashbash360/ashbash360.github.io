<!DOCTYPE html>
<html lang="en-us">

<head>

	<title>Chit Chat</title>
	<meta charset="utf-8">
  <style>
  .hidden{
		display: none;
	}
  h1{
  text-align: center;
  }
  </style>

</head>
<body>

<h1>Let's Chat!</h1>


<div id="homeP">
  <h3>Name:</h2>
      <input type="text" id="nickname">
      <button id='chat'>Chat!</button>
      <br>
</div>

<div id="cRoom">
  <textarea id="text" rows="20
" cols="30"></textarea>
<hr>

  <input type="text" name="text" id="newMess">
  <button id="send">Send Message</button>
	<p id= 'ntoUser'></p>

</div>
  <script src="js/jquery-3.3.1.min.js"></script>

	<script type="text/javascript">

	//make textbox show bottom
		textarea.scrollTop = textarea.scrollHeight;

	//refs to main home page
		var homeP = document.getElementById("homeP");
		var nickname = document.getElementById("nickname");
		var chat = document.getElementById('chat');

		//refs to chat room page
		var cRoom = document.getElementById("cRoom");
	  var textarea = document.querySelector("textarea");
		var newMess = document.getElementById("newMess");
		var send = document.getElementById("send");

		var ntoUser = document.getElementById('ntoUser');

		$(document).ready(function() {

			var $textarea = $('text');
			if (name!== "null" && name !==""){
				homeP.style.display = "none";
				cRoom.style.display = "auto";
				nickname.value = name;
				console.log(name);
			}

			chat.onclick = function(event){
				if (nickname.value == "") {
                    alert("You must enter a nickname to ntoUser!");
                }
				else{
					event.prevent.Default();
					chat.display = "none";
					cRoom.style.display = "block";
					localStorage.setItem("nickname", nickname.value);

				}
			}

		send.onclick = function(event){
			$.ajax({
				type: 'POST',
      	url: 'newMess.php',

        data: {
          nickname: nickname.value,
          message: newMess.value
      },

      	success: function(data, status) {
                      console.log(data);

        },

        error: function(request, data, status) {
                      console.log(data);
                      alert("Error");
        }

        });
				event.preventDefault()

				}

</body>
</html>
