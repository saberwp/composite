const form = document.getElementById('register-form');
const name = document.getElementById('name');
const email = document.getElementById('email');
const password = document.getElementById('password');
const passwordConfirm = document.getElementById('password_confirm');

form.addEventListener('submit', (event) => {
  event.preventDefault();

  const formData = new FormData();
  formData.append('action', 'registration_process');
  formData.append('name', name.value);
  formData.append('email', email.value);
  formData.append('password', password.value);
  formData.append('password_confirm', passwordConfirm.value);

  if (password.value !== passwordConfirm.value) {
    alert('Passwords do not match!');
    return;
  }

  const xhr = new XMLHttpRequest();
  xhr.open("POST", "/wp-admin/admin-ajax.php");
  xhr.onreadystatechange = function () {
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
      const data = JSON.parse(this.responseText);
      if (data.success) {
        alert('Registration successful');
      } else {
        alert('Registration failed');
      }
    }
  };
  xhr.send(formData);
});
