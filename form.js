// To handle the form submission
const form = document.querySelector('form');
form.addEventListener('submit', (event) => {
  event.preventDefault();
  const name = form.elements.name.value;
  const email = form.elements.email.value;
  const password = form.elements.password.value;
  
  // Do something with the form data here (e.g. send to a server)
  console.log(`Name: ${name}`);
  console.log(`Email: ${email}`);
  console.log(`Senha: ${password}`);
});
