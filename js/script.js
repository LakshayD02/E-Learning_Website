let body = document.body;

let profile = document.querySelector('.header .flex .profile');

document.querySelector('#user-btn').onclick = () =>{
   profile.classList.toggle('active');
   searchForm.classList.remove('active');
}

let searchForm = document.querySelector('.header .flex .search-form');

document.querySelector('#search-btn').onclick = () =>{
   searchForm.classList.toggle('active');
   profile.classList.remove('active');
}

let sideBar = document.querySelector('.side-bar');

document.querySelector('#menu-btn').onclick = () =>{
   sideBar.classList.toggle('active');
   body.classList.toggle('active');
}

document.querySelector('.side-bar .close-side-bar').onclick = () =>{
   sideBar.classList.remove('active');
   body.classList.remove('active');
}

document.querySelectorAll('input[type="number"]').forEach(InputNumber => {
   InputNumber.oninput = () =>{
      if(InputNumber.value.length > InputNumber.maxLength) InputNumber.value = InputNumber.value.slice(0, InputNumber.maxLength);
   }
});

window.onscroll = () =>{
   profile.classList.remove('active');
   searchForm.classList.remove('active');

   if(window.innerWidth < 1200){
      sideBar.classList.remove('active');
      body.classList.remove('active');
   }

}

let toggleBtn = document.querySelector('#toggle-btn');
let darkMode = localStorage.getItem('dark-mode');

const enabelDarkMode = () =>{
   toggleBtn.classList.replace('fa-sun', 'fa-moon');
   body.classList.add('dark');
   localStorage.setItem('dark-mode', 'enabled');
}

const disableDarkMode = () =>{
   toggleBtn.classList.replace('fa-moon', 'fa-sun');
   body.classList.remove('dark');
   localStorage.setItem('dark-mode', 'disabled');
}

if(darkMode === 'enabled'){
   enabelDarkMode();
}

toggleBtn.onclick = (e) =>{
   let darkMode = localStorage.getItem('dark-mode');
   if(darkMode === 'disabled'){
      enabelDarkMode();
   }else{
      disableDarkMode();
   }
}