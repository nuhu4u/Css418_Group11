const form = document.getElementById('selection-form');
const message = document.getElementById('message');

form.addEventListener('submit', (event) => {
  event.preventDefault();

  const matricNumber = document.getElementById('matric-number').value;
  const level = document.getElementById('level').value;

  if (matricNumber === '2021/2/2354cs') {
    window.location.href = `../level/level${level}.html`; // Redirect to level page
  } else if (matricNumber === '2021/2/6798cs') {
    window.location.href = '../payment/payment.html'; // Redirect to payment page
  } else {
    message.textContent = 'Invalid Matric Number';
  }
});