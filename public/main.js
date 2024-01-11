// js untuk pop up email
document.getElementById('subscribeForm').addEventListener('submit', function(event) {
    event.preventDefault();

    alert('Terima kasih telah berlangganan!');
    document.getElementById('inputEmail').value = '';
  });

// js untuk whatApp Link
function welcome(e) {
  window.open("https://wasap.at/0zMjp9")
}