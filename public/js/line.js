
anime({
  targets: "#line path",
  strokeDashoffset: [anime.setDashoffset, 0],
  easing: "easeInOutSine",
  duration: 600,
  // loop: true,
  // direction: "alternate",
  delay: (el, i) => {
    return i * 30;
  }
});




// 押されたボタン取得
let btns = document.getElementsByClassName('hoge');


for (let btn of btns) {
console.log(1, btn);
btn.addEventListener('click', function () {
  let input = document.getElementById('title');
 
  console.log(input);

  
  // this.xxxxxx



  input.value = (btn.getAttribute('data-price'));
})
}

// 押されたボタンにたいおうした値を取得
// text = btn.text;


