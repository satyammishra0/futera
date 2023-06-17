let item = document.getElementsByClassName("slide")[0];
item.addEventListener("mousemove", move);
item.addEventListener("mousedown", dragdown);
item.addEventListener("mouseup", dragup);
let down = false;
let prevpage;
let prevscroll;
function move(e) {
  e.preventDefault();
  if (!down) {
    return;
  } else {
    let position = e.pageX - prevpage;
    item.scrollLeft = prevscroll - position;
  }
}
function dragdown(e) {
  down = true;
  prevpage = e.pageX;
  prevscroll = item.scrollLeft;
}
function dragup() {
  down = false;
}

////////////////////////////////////////////////////////////////////////////////

let icon = document.getElementsByClassName("icon");
let sliderbox = item.getElementsByClassName("slide-box");
let total = sliderbox.length;
console.log(total);
firstImg = item.getElementsByClassName("slide-box")[0];
let srcremove = document.getElementsByClassName("responsive-iframe");
let srcopen = srcremove[0].src;
console.log(srcopen);
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
      console.log(currentActive);
      item.scrollLeft += firstImgWidth;
    } else {
      if (currentActive == 0) {
        currentActive == 0;
        return;
      }
      currentActive -= 1;
      console.log(currentActive);
      item.scrollLeft -= firstImgWidth;
    }
  });
}

////////////////////////////////////////////////////////////////////////////////
let slidebox = document.getElementsByClassName("slide-box");
let play = document.querySelectorAll(".dark i");
let videopage = document.querySelectorAll(".slide-box .video-page");

for (let i = 0; i < slidebox.length; i++) {
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
    srcremove[i].src = srcopen;
  });
}

/////////////////////////////////////////////////////////////////////////////
