/*
*   Author @ https://HandelsMarketing.se
*
*   (c) Mashallahgruppen
*
*/

'use strict';

/*
* js for changing language in the manu
*/
// const languages = [
//   'Svenska',
//   'English',
//   'Arabic'
// ];
// const languageChange = document.querySelector('.languageChange');
//
// for (let i = 0; i < languages.length; i++) {
//   function changeLanguage() {
//     languageChange.innerHTML = languages[i];
//     setTimeout(3000)
//   }
//
//   changeLanguage();
// }


/*
*   js for contact form
*/
const alert = document.querySelector('.alert-success');

function removeBanner() {
  alert.remove();
}

if (alert !== null && alert !== '') {
  setTimeout(removeBanner, 4000);
}
