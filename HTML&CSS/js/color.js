const target = document.getElementById('target');

//ON
target.addEventListener('mouseenter', () => {
　　target.style.color = "red";
}, false);

//OUT
target.addEventListener('mouseleave', () => {
　　target.style.color = "white";
  
}, false);