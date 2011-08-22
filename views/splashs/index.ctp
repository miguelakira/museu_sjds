<script language="javascript" type="text/javascript">
 function playSound(soundfile) {
 document.getElementById("dummy").innerHTML=
 "<embed src=\""+soundfile+"\" hidden=\"true\" autostart=\"true\" loop=\"false\" />";
 var mySoundTime = 3000; // length of sound in milliseconds
  setTimeout("document.location='http://localhost/cakephp/museu/pages/index'", mySoundTime);
 }
 </script>

<div id = "centralize">
</div>
