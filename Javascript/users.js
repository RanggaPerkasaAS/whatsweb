const searchBar = document.querySelector(".users .searc input"),
searchBtn = document.querySelector(".users .searc button");

searchBtn.onlcick = ()=>{
  searchBar.classList.toggle("active");
  searchBar.focus();
  searchBtn.classList.toggle("active");
}