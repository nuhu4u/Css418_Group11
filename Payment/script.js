document.getElementById('paymentForm').addEventListener('submit', function(event) {
  event.preventDefault();
  
  const matricNumber = document.getElementById('matricNumber').value;

  if (matricNumber === '2021/2/2354cs') {
    // Successful payment message and course registration prompt
    alert('Payment Successful!\n\nName: Nuhu Amodu\nDepartment: Cyber Security Science');
    const registerCourse = confirm('Do you want to register for courses?');
    if (registerCourse) {
      window.location.href = '../verify/verify.html';
    } else {
      window.location.href = '../dashboard.html';
    }
  } else if (matricNumber === '2021/2/6798cs') {
    // Unsuccessful payment message and RRR generation
    const rrr = generateRRR();
    alert(`Payment Unsuccessful!\n\nRRR: ${rrr}`);
    const proceedToPay = confirm('Do you want to proceed to pay online?');
    if (proceedToPay) {
      window.location.href = 'payment_link.html';
    } else {
      window.location.href = '../dashboard.html';
    }
  } else {a
    alert('Invalid Matric Number');
  }
});

function generateRRR() {
  // Generate a random 12-digit number
  const rrr = Math.floor(Math.random() * 1000000000000).toString().padStart(12, '0');
  return rrr;
}
