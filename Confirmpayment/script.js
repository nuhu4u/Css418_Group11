const form = document.getElementById('payment-form');
const message = document.getElementById('message');

form.addEventListener('submit', (event) => {
  event.preventDefault();

  const matricNumber = document.getElementById('matric-number').value;

  if (matricNumber === '2021/2/2354cs') {
    message.innerHTML = `
      <p class="success">Payment Successful!</p>
      <p>Would you like to:</p>
      <button id="register-course">Register Course</button>
      <button id="go-home">Go to Home</button>
    `;

    const registerCourse = document.getElementById('register-course');
    const goHome = document.getElementById('go-home');

    registerCourse.addEventListener('click', () => {
      window.location.href = '../verify/verify.html'; // Replace with your course registration page
    });

    goHome.addEventListener('click', () => {
      window.location.href = '../dashboard.html'; // Assuming this is your home page
    });
  } else {
    message.textContent = 'Invalid Matric Number'; // Display error for invalid matric number
  }
});
