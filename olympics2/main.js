function deletePlayer(id){
	var obj = {'id':id}
	$.ajax({
		type: "POST",
  url: "deletePlayer.php",
  data: obj
}).done(function() {
  location.reload();
});
}

function deleteSchedule(id){
	var obj = {'id':id}
	$.ajax({
		type: "POST",
  url: "deleteSchedule.php",
  data: obj
}).done(function() {
  location.reload();
});
}

function deleteResult(id){
	var obj = {'id':id}
	$.ajax({
		type: "POST",
  url: "deleteResult.php",
  data: obj
}).done(function() {
  location.reload();
});
}