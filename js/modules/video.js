var video = {
 // variables at the top as usual
 videoPlayer : document.querySelector('video'),
 vidThumbs : document.querySelector('.vid_thumb'),
 volumeIndicator : document.querySelector('.vol-indicator'),

 //functionality comes next
 volOn(){
   video.videoPlayer.muted = false;
   video.volumeIndicator.classList.replace('fa-volume-off', 'fa-volume-up');
 },
 volOff(){
   video.videoPlayer.muted = true;
   video.volumeIndicator.classList.replace('fa-volume-off', 'fa-volume-up');
 },

 popOverlay(){
   let overlay = document.querySelector('.vid-overlay');
   overlay.classList.add('show-overlay');

   overlay.querySelector('i').addEventListener('click',video.replayVideo);
 },
replayVideo(){

  video.videoPlayer.currentTime = 0;
  video.videoPlayer.play();

  let overlay = document.querySelector('.vid-overlay');
  overlay.classList.remove('show-overlay');

  overlay.querySelector('i').addEventListener('click',video.replayVideo);
},

 //make sure to separate funcitons with a comma

 init(){
   console.log('added a video module');
   video.videoPlayer.addEventListener('mouseover', video.volOn);
   video.videoPlayer.addEventListener('mouseout', video.volOff);
   video.videoPlayer.addEventListener('ended',video.popOverlay);
 }
}

video.init();
