const form = document.getElementById("login-form");
const usernameInput = document.getElementById("username");
const passwordInput = document.getElementById("password");

form.addEventListener("submit", (event) => {
  event.preventDefault();

  const username = usernameInput.value;
  const password = passwordInput.value;

  // Validate the username and password
  if (!username || !password) {
    alert("Username and password are required");
    return;
  }

  // Send an AJAX request to the server with the username and password
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "/wp-admin/admin-ajax.php");
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onload = function() {
    if (xhr.status === 200) {
      const response = JSON.parse(xhr.responseText);
      if (response.success) {
        // Redirect the user to the dashboard page
        window.location.href = "/dashboard";
      } else {
        alert("Sorry, login failed");
      }
    } else {
      alert("An error occurred while processing the login request");
    }
  };
  xhr.send(`action=wp_ajax_login&username=${encodeURIComponent(username)}&password=${encodeURIComponent(password)}`);
});
