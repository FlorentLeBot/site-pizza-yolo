
const { createClient } = supabase;
supabase = createClient(
  "https://muojfjwnlxgyigwvseag.supabase.co",
  "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJvbGUiOiJhbm9uIiwiaWF0IjoxNjQyNTk2MDM2LCJleHAiOjE5NTgxNzIwMzZ9.GZiT7weBvBZCX7twpVOrl3E__Zw-G1O3rI5JCp9g6sM"
);
console.log(supabase)
const form = document.querySelector("#form");
// console.log(form);

// let civilite = document.getElementsByName("civilite");

// if(civilite.value == true){

// }

form.addEventListener("submit", async (event) => {
  event.preventDefault();

  const formInputs = form.querySelectorAll("input, radio, textarea"); 

  let submission = {};

  formInputs.forEach((element) => {
    const { value, name } = element;
    if (value) {
      submission[name] = value;
    }
  });
  // console.log(submission);
  const { error } = await supabase
    .from("formulaire")
    .insert([submission]);
  if (error) {
    alert("erreur");
  } else {
    alert("merci");
  }
  
  formInputs.forEach((element) => (element.value = ""));
  // console.log({ error, data });
});
