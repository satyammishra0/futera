let item = document.getElementsByClassName("slide")[0];
item.addEventListener("mousemove", move);
item.addEventListener("touchmove", move);
item.addEventListener("mousedown", dragdown);
item.addEventListener("touchstart", dragdown);
item.addEventListener("mouseup", dragup);
item.addEventListener("touchend", dragup);
let down = false;
let prevpage;
let prevscroll;
function move(e) {
  e.preventDefault();
  if (!down) {
    return;
  } else {
    let position = (e.pageX || e.touches[0].pageX) - prevpage;
    // console.log(position)
    item.scrollLeft = prevscroll - position;
  }
}
function dragdown(e) {
  down = true;
  prevpage = e.pageX || e.touches[0].pageX;
  prevscroll = item.scrollLeft;
}
function dragup() {
  down = false;
  // console.log(prevpage)
  // console.log(prevscroll )
}

////////////////////////////////////////////////////////////////////////////////

let icon = document.getElementsByClassName("icon");
firstImg = item.getElementsByClassName("slide-box")[0];
let sliderbox = item.getElementsByClassName("slide-box");
let srcremove = document.querySelectorAll("source");
let srcopen = srcremove[0].src;
let total = sliderbox.length;
// console.log(srcopen)
let currentActive = 0;
for (let i = 0; i < icon.length; i++) {
  icon[i].addEventListener("click", function () {
    for (let j = 0; j < slidebox.length; j++) {
      videopage[j].classList.remove("block-vedio");
      srcremove[j].src = " ";
    }
    let firstImgWidth = firstImg.clientWidth;
    if (i == 1) {
      currentActive += 1;
      if (currentActive == total) {
        currentActive = 0;
        item.scrollLeft = 0;
        return;
      }
      // console.log(currentActive)
      item.scrollLeft += firstImgWidth;
    } else {
      if (currentActive == 0) {
        currentActive == 0;
        return;
      }
      currentActive -= 1;
      // console.log(currentActive)
      item.scrollLeft -= firstImgWidth;
    }
  });
}

////////////////////////////////////////////////////////////////////////////////
let slidebox = document.getElementsByClassName("slide-box");
let play = document.querySelectorAll(".dark .img");
console.log(play);
let videopage = document.querySelectorAll(".slide-box .video-page");

for (let i = 0; i < 3; i++) {
  slidebox[i].addEventListener("mouseover", function () {
    document.getElementsByClassName("dark")[i].classList.add("dark-image");
    document.getElementsByClassName("play")[i].classList.add("play-button");
  });
  slidebox[i].addEventListener("mouseout", function () {
    document.getElementsByClassName("dark")[i].classList.remove("dark-image");
    document.getElementsByClassName("play")[i].classList.remove("play-button");
  });
  play[i].addEventListener("click", function () {
    videopage[i].classList.add("block-vedio");
    console.log(videopage[i]);
    srcremove[i].src = srcopen;
    console.log(srcremove[i].src);
  });
}

/////////////////////////////////////////////////////////////////////////////
