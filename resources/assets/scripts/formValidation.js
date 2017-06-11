'use strict';
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
  const messageFullName = 'Ogiltiga tecken, endast bokstäver tillåtet';

  // querySelector for phonenumber in contact form
  const contactPhoneNumber = document.querySelector('.contactPhoneNumber');
  const spanPhoneNumber = document.querySelector('.spanPhoneNumber');
  const messageNumber = 'Ogiltiga tecken, endast siffror tillåtet';

  // querySelector for fullName in contact form
  const contactEmail = document.querySelector('.contactEmail');
  const spnaEmail = document.querySelector('.spnaEmail');
  const messageEmail = 'Ingen gilltig e-post adress';

  // querySelector for commpany in contact form
  const contactCommpany = document.querySelector('.contactCommpany');
  const spanCompany = document.querySelector('.spanCompany');
  const commpanyMessage = 'Ogiltiga tecken, endast bokstäver och siffror tillåtet';

  // querySelector for message in contact form
  const contactMessage = document.querySelector('.contactMessage');
  const spanMessage = document.querySelector('.spanMessage');
  const messageMessage = 'Ogiltiga tecken, endast bokstäver och siffror tillåtet';

  function validation(input, regex, error, message) {
    input.addEventListener('keyup', validateForm => {
      if (!input.value) {
        return false;
      }
      if (!regex.test(input.value)) {
        error.innerHTML = message;
        return false;
      }

      error.innerHTML = '';
      return true;
    });
  }
  validation(contactFullName, textRegex, spanFullName, messageFullName);
  validation(contactPhoneNumber, numbersRegex, spanPhoneNumber, messageNumber);
  validation(contactEmail, emailRegex, spnaEmail, messageEmail);
  validation(contactCommpany, anyLetterOrNumberRegex, spanCompany, commpanyMessage);
  validation(contactMessage, anyLetterOrNumberRegex, spanMessage, messageMessage);

} // end if
