/*
*   Author @ https://HandelsMarketing.se
*
*   (c) Mashallahgruppen
*
*/


/*
* js for changing language in the manu
*/
const languages = [
  'Svenska',
  'English',
  'Arabic'
];
const languageChange = document.querySelector('.languageChange');

for (let i = 0; i < languages.length; i++) {
  function changeLanguage() {
    languageChange.innerHTML = languages[i];
    setTimeout(3000)
  }

  changeLanguage();
}







// LOGGA 1,5 timmar
