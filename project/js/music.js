function setHaftVolume(){
    var music = document.getElementById(audio1);
    music.Volume = 0.02;
}
function Play(){
  var music = document.getElementById("audio1");
  if(music.paused) {
      music.play();
  }
  else {
     music.pause();
  }
}