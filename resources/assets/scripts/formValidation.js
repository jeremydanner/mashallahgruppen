'use strict';
// BUG: Contact form. If the validation on one field passes validation in javascript the form will be submitted....

/*
* this script onaly appers on the contact.php page. /kontakt
*   js for contact form
*/
const contactFormContainer = document.querySelector('.contactFormContainer');

if (contactFormContainer) {

  const alert = document.querySelector('.alert-success');

  function removeBanner() {
    alert.remove();
  }

  if (alert !== null && alert !== '') {
    setTimeout(removeBanner, 7000);
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

  // querySelector for the form. is used when preventDefault is calld to latere submit form
  const contactForm = document.querySelector('.contactForm');

  // prevents the form from submitting if it dosent passes validation
  function preventSubmit(event) {
    event.preventDefault(contactSubmit);
  }

  let fullName = false;
  let phoneNumber = false;
  let email = false;
  let commpany = false;
  let message = false;

  // check if name is text
  contactFullName.addEventListener('keyup', () => {
    if (!textRegex.test(contactFullName.value) && contactFullName.value === '') {
      spanFullName.innerHTML = 'Endast bokstäver tillåtet A-Ö';
      console.log(contactFullName.value);
      contactSubmit.addEventListener('click', preventSubmit);
    } else {
      spanFullName.innerHTML = '';

      fullName = true;
    }
  });

  // check if number is number
  contactPhoneNumber.addEventListener('keyup', () => {
    if (!numbersRegex.test(contactPhoneNumber.value)) {
      spanPhoneNumber.innerHTML = 'Endast siffror tillåtet 0-9';
      contactSubmit.addEventListener('click', preventSubmit);
    } else {
      spanPhoneNumber.innerHTML = '';

      phoneNumber = true;
    }
  });

  // check if email is email
  contactEmail.addEventListener('keyup', () => {
    if (!emailRegex.test(contactEmail.value)) {
      spnaEmail.innerHTML = contactEmail.value + ' är en ogiltig epost adress';
      contactSubmit.addEventListener('click', preventSubmit);
    } else {
      spnaEmail.innerHTML = '';

      email = true;
    }
  });

  // check if company is letter or number
  contactCommpany.addEventListener('keyup', () => {
    if (!anyLetterOrNumberRegex.test(contactCommpany.value)) {
      spanCompany.innerHTML = 'Endast bokstäver & siffror tillåtet A-Ö 0-9';
      contactSubmit.addEventListener('click', preventSubmit);
    } else {
      spanCompany.innerHTML = '';

      commpany = true;
    }
  });

  // check if message is letter or number
  contactMessage.addEventListener('keyup', () => {
    if (!anyLetterOrNumberRegex.test(contactMessage.value)) {
      spanMessage.innerHTML = 'Endast bokstäver & siffror tillåtet A-Ö 0-9';
      contactSubmit.addEventListener('click', preventSubmit);
    } else {
      spanMessage.innerHTML = '';

      message = true;
    }
  });

  contactSubmit.addEventListener('click', submitForm => {
    if (
      fullName === true &&
      phoneNumber === true &&
      email === true &&
      commpany === true &&
      message === true
    ) {
      contactForm.submit();
    }
  });

} // end if