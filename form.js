// const supabase = createClient(SUPABASE_URL, process.env.SUPABASE_KEY);
// const SUPABASE_KEY =
//   "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJvbGUiOiJhbm9uIiwiaWF0IjoxNjQyNTk2MDM2LCJleHAiOjE5NTgxNzIwMzZ9.GZiT7weBvBZCX7twpVOrl3E__Zw-G1O3rI5JCp9g6sM";
// const SUPABASE_URL = "https://muojfjwnlxgyigwvseag.supabase.co";

const { createClient } = supabase;
supabase = createClient(
  "https://muojfjwnlxgyigwvseag.supabase.co",
  "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJvbGUiOiJhbm9uIiwiaWF0IjoxNjQyNTk2MDM2LCJleHAiOjE5NTgxNzIwMzZ9.GZiT7weBvBZCX7twpVOrl3E__Zw-G1O3rI5JCp9g6sM"
);

const form = document.querySelector("#formulaire");
form.addEventListener("submit", async (event) => {
  event.preventDefault();

  const formInputs = form.querySelectorAll("input, select, textarea");

  let submission = {};

  formInputs.forEach((element) => {
    const { value, name } = element;
    if (value) {
      submission[name] = value;
    }
  });

  const { error } = await supabase
    .from("entries")
    .insert([submisson], { returning: "minimal" });
  if (error) {
    alert("erreur");
  } else {
    alert("merci");
  }
  formInputs.forEach((element) => (element.value = ""));
});
