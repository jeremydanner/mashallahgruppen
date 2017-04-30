/*
*   Author @ https://HandelsMarketing.se
*
*   (c) Mashallahgruppen
*
*/

'use strict';

// TODO: set defalt after prevent defalt is called

/*
* this script onaly appers on the contact.php page. /kontakt
*   js for contact form
*/
const alert = document.querySelector('.alert-success');

function removeBanner() {
  alert.remove();
}

if (alert !== null && alert !== '') {
  setTimeout(removeBanner, 4000);
}

const numbersRegex = /^\d+$/;
const textRegex = /^[a-ö ]+$/i;
const anyLetterOrNumberRegex = /^[A-Ö0-9 .,?!"'%&()]*$/i;
const emailRegex = /^[a-z0-9.-@]*$/i;

// querySelector for fullName in contact form
const contactFullName = document.querySelector('.contactFullName');
const spanFullName = document.querySelector('.spanFullName');

// querySelector for phonenumber in contact form
const contactPhoneNumber = document.querySelector('.contactPhoneNumber');
const spanPhoneNumber = document.querySelector('.spanPhoneNumber');

// querySelector for fullName in contact form
const contactEmail = document.querySelector('.contactEmail');
const spnaEmail = document.querySelector('.spnaEmail');

// querySelector for commpany in contact form
const contactCommpany = document.querySelector('.contactCommpany');
const spanCompany = document.querySelector('.spanCompany');

// querySelector for message in contact form
const contactMessage = document.querySelector('.contactMessage');
const spanMessage = document.querySelector('.spanMessage');

// querySelector for submit button in contact form
const contactSubmit = document.querySelector('.contactSubmit');

function preventSubmit(event) {
  event.preventDefault(contactSubmit);
}

function stopPrevent(event) {
  event.stopPropagation();
}

// check if name is text
contactFullName.addEventListener('keyup', () => {
  if (!textRegex.test(contactFullName.value)) {
    spanFullName.innerHTML = 'Endast bokstäver tillåtet A-Ö a-ö';
    contactSubmit.addEventListener('click', preventSubmit);
  } else {
    spanFullName.innerHTML = '';
  }
});

// check if number is number
contactPhoneNumber.addEventListener('keyup', () => {
  if (!numbersRegex.test(contactPhoneNumber.value)) {
    spanPhoneNumber.innerHTML = 'Endast siffror tillåtet 0-9';
    contactSubmit.addEventListener('click', preventSubmit);
  } else {
    spanPhoneNumber.innerHTML = '';
  }
});

// check if email is email
contactEmail.addEventListener('keyup', () => {
  if (!emailRegex.test(contactEmail.value)) {
    spnaEmail.innerHTML = 'Detta är en ogiltig epost adress';
    contactSubmit.addEventListener('click', preventSubmit);
  } else {
    spnaEmail.innerHTML = '';
  }
});

// check if company is letter or number
contactCommpany.addEventListener('keyup', () => {
  if (!anyLetterOrNumberRegex.test(contactCommpany.value)) {
    spanCompany.innerHTML = 'Endast bokstäver & siffror tillåtet A-Ö 0-9';
    contactSubmit.addEventListener('click', preventSubmit);
  } else {
    spanCompany.innerHTML = '';
  }
});

// check if message is letter or number
contactMessage.addEventListener('keyup', () => {
  if (!anyLetterOrNumberRegex.test(contactMessage.value)) {
    spanMessage.innerHTML = 'Endast bokstäver & siffror tillåtet A-Ö 0-9';
    contactSubmit.addEventListener('click', preventSubmit);
  } else {
    spanMessage.innerHTML = '';
  }
});
