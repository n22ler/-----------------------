const first = document.getElementById('first');
first.addEventListener('click', ()=>{
    document.getElementById('first_b').classList.toggle('active')
    document.getElementById('first_b').classList.toggle('slide-right')
    document.getElementById('second_b').classList.toggle('active')
    document.getElementById('second_b').classList.toggle('slide-right')
})
const second = document.getElementById('second');
second.addEventListener('click', ()=>{
    document.getElementById('second_b').classList.toggle('active')
    document.getElementById('second_b').classList.toggle('slide-right')
    document.getElementById('first_b').classList.remove('active')
    document.getElementById('first_b').classList.remove('slide-right')
})
const block_1 = document.getElementById('block_1');
block_1.addEventListener('click', ()=>{
    document.getElementById('svg_b1').classList.toggle('rotate')
    document.getElementById('block_1a').classList.toggle('active')
    document.getElementById('block_1a').classList.toggle('slide-right')
})
const block_2 = document.getElementById('block_2');
block_2.addEventListener('click', ()=>{
    document.getElementById('svg_b2').classList.toggle('rotate')
    document.getElementById('block_2a').classList.toggle('active')
    document.getElementById('block_2a').classList.toggle('slide-right')
})
const block_3 = document.getElementById('block_3');
block_3.addEventListener('click', ()=>{
    document.getElementById('svg_b3').classList.toggle('rotate')
    document.getElementById('block_3a').classList.toggle('active')
    document.getElementById('block_3a').classList.toggle('slide-right')
    document.getElementById('block_3.1a').classList.toggle('active')
    document.getElementById('block_3.1a').classList.toggle('slide-right')
    document.getElementById('block_3.2a').classList.toggle('active')
    document.getElementById('block_3.2a').classList.toggle('slide-right')
    document.getElementById('block_3.3a').classList.toggle('active')
    document.getElementById('block_3.3a').classList.toggle('slide-right')
    document.getElementById('block_3.4a').classList.toggle('active')
    document.getElementById('block_3.4a').classList.toggle('slide-right')
    document.getElementById('block_3.5a').classList.toggle('active')
    document.getElementById('block_3.5a').classList.toggle('slide-right')
    document.getElementById('block_3.6a').classList.toggle('active')
    document.getElementById('block_3.6a').classList.toggle('slide-right')
})
function number(){
    if (event.keyCode < 48 || event.keyCode > 57)
    event.returnValue= false;
    
}