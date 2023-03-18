const video = document.getElementById("video");
const button = document.getElementById("button");

video.addEventListener("timeupdate", () => {
  if (video.currentTime >= 25 && video.currentTime <= 35) {
    button.style.display = "block";
  } else {
    button.style.display = "none";
  }
})
