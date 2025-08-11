function toggleAccordion(button){
    const container = button.parentElement;
    container.classList.toggle('active');
}
//--------------------------------------------------------

//------------------------1° slider--------------------------------
const slider = document.querySelectorAll('.slider');
const btnPrev = document.getElementById('prev-button');
const btnNext = document.getElementById('next-button');

let currentSlide = 0;

function hideSlider() {
  slider.forEach(item => item.classList.remove('on'))
}

function showSlider() {
  slider[currentSlide].classList.add('on')
}

function prevSlider() {
  hideSlider()
  if(currentSlide === 0){
    currentSlide = slider.length -1
  }else{
    currentSlide--
  }
  showSlider()
}


function nextSlider() {
  hideSlider()
  if(currentSlide === slider.length -1){
    currentSlide = 0
  }else{
    currentSlide++
  }
  showSlider()
}


btnNext.addEventListener('click', () => console.log('clicado'))
btnPrev.addEventListener('click', () => console.log('clicado'))

console.log(slider)

currentSlide = currentSlide + 1
currentSlide = currentSlide - 1
//-----------------------------------------------------

//------------------------2° slider--------------------------------
const slider2 = document.querySelectorAll('.slider2');
const btnPrev2 = document.getElementById('prev-button2');
const btnNext2 = document.getElementById('next-button2');

let currentSlide2 = 0;

function hideSlider2() {
  slider2.forEach(item => item.classList.remove('on'))
}

function showSlider2() {
  slider2[currentSlide2].classList.add('on')
}

function prevSlider2() {
  hideSlider2()
  if(currentSlide2 === 0){
    currentSlide2 = slider2.length -1
  }else{
    currentSlide2--
  }
  showSlider2()
}


function nextSlider2() {
  hideSlider2()
  if(currentSlide2 === slider2.length -1){
    currentSlide2 = 0
  }else{
    currentSlide2++
  }
  showSlider2()
}


btnNext2.addEventListener('click', () => console.log('clicado'))
btnPrev2.addEventListener('click', () => console.log('clicado'))

console.log(slider2)

currentSlide2 = currentSlide2 + 1
currentSlide2 = currentSlide2 - 1

//------------------------3° slider--------------------------------
const slider3 = document.querySelectorAll('.slider3');
const btnPrev3 = document.getElementById('prev-button3');
const btnNext3 = document.getElementById('next-button3');

let currentSlide3 = 0;

function hideSlider3() {
  slider3.forEach(item => item.classList.remove('on'))
}

function showSlider3() {
  slider3[currentSlide3].classList.add('on')
}

function prevSlider3() {
  hideSlider3()
  if(currentSlide3 === 0){
    currentSlide3 = slider3.length -1
  }else{
    currentSlide3--
  }
  showSlider3()
}


function nextSlider3() {
  hideSlider3()
  if(currentSlide3 === slider3.length -1){
    currentSlide3 = 0
  }else{
    currentSlide3++
  }
  showSlider3()
}


btnNext3.addEventListener('click', () => console.log('clicado'))
btnPrev3.addEventListener('click', () => console.log('clicado'))

console.log(slider3)

currentSlide3 = currentSlide3 + 1
currentSlide3 = currentSlide3 - 1

//------------------------4° slider--------------------------------
const slider4 = document.querySelectorAll('.slider4');
const btnPrev4 = document.getElementById('prev-button4');
const btnNext4 = document.getElementById('next-button4');

let currentSlide4 = 0;

function hideSlider4() {
  slider4.forEach(item => item.classList.remove('on'))
}

function showSlider4() {
  slider4[currentSlide4].classList.add('on')
}

function prevSlider4() {
  hideSlider4()
  if(currentSlide4 === 0){
    currentSlide4 = slider4.length -1
  }else{
    currentSlide4--
  }
  showSlider4()
}


function nextSlider4() {
  hideSlider4()
  if(currentSlide4 === slider4.length -1){
    currentSlide4 = 0
  }else{
    currentSlide4++
  }
  showSlider4()
}


btnNext4.addEventListener('click', () => console.log('clicado'))
btnPrev4.addEventListener('click', () => console.log('clicado'))

console.log(slider4)

currentSlide4 = currentSlide4 + 1
currentSlide4 = currentSlide4 - 1

//------------------------3° slider--------------------------------
const slider5 = document.querySelectorAll('.slider5');
const btnPrev5 = document.getElementById('prev-button5');
const btnNext5 = document.getElementById('next-button5');

let currentSlide5 = 0;

function hideSlider5() {
  slider5.forEach(item => item.classList.remove('on'))
}

function showSlider5() {
  slider5[currentSlide5].classList.add('on')
}

function prevSlider5() {
  hideSlider5()
  if(currentSlide5 === 0){
    currentSlide5 = slider5.length -1
  }else{
    currentSlide5--
  }
  showSlider5()
}


function nextSlider5() {
  hideSlider5()
  if(currentSlide5 === slider5.length -1){
    currentSlide5 = 0
  }else{
    currentSlide5++
  }
  showSlider5()
}


btnNext5.addEventListener('click', () => console.log('clicado'))
btnPrev5.addEventListener('click', () => console.log('clicado'))

console.log(slider5)

currentSlide5 = currentSlide5 + 1
currentSlide5 = currentSlide5 - 1

//------------------------6° slider--------------------------------
const slider6 = document.querySelectorAll('.slider6');
const btnPrev6 = document.getElementById('prev-button6');
const btnNext6 = document.getElementById('next-button6');

let currentSlide6 = 0;

function hideSlider6() {
  slider6.forEach(item => item.classList.remove('on'))
}

function showSlider6() {
  slider6[currentSlide6].classList.add('on')
}

function prevSlider6() {
  hideSlider6()
  if(currentSlide6 === 0){
    currentSlide6 = slider6.length -1
  }else{
    currentSlide6--
  }
  showSlider6()
}


function nextSlider6() {
  hideSlider6()
  if(currentSlide6 === slider6.length -1){
    currentSlide6 = 0
  }else{
    currentSlide6++
  }
  showSlider6()
}


btnNext6.addEventListener('click', () => console.log('clicado'))
btnPrev6.addEventListener('click', () => console.log('clicado'))

console.log(slider6)

currentSlide6 = currentSlide6 + 1
currentSlide6 = currentSlide6 - 1