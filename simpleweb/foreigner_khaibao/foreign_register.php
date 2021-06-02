<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Medical Register</title>
  </head>

  <body>
    <div class="wrapper">
      <div class="title">
        Medical Register Form for Foreigner Student
      </div>
     <form action="foreign_insert.php" method="POST">

       <div class="input-fields">
         <span class="details">Full Name</span>
         <input type="text" name="username" required>
       </div>

       <div class="input-fields">
         <span class="details">Nationality</span>
         <input type="text" name="nation" required>
       </div>

       <div class="input-fields">
         <span class="details">Subject study at school</span>
         <input type="text" name="subject" required>
       </div>

       <div class="input-fields">
         <span class="details">Email</span>
         <input type="email" name="email" required>
       </div>

       <div class="input-fields">
         <span class="details">Phone number</span>
         <input type="phone" name="phone" required>
       </div>

       <div class="input-fields">
         <span class="details">Living address in VN</span>
         <input type="text" name="address" required>
       </div>

       <div class="input-fields">
         <span class="details">Date of Birth </span>
         <input type="text" name="dob" required>
       </div>

       <div class="input-fields">
          <span class="details">Gender</span>
         <div class="custom-select">
           <select name="gender">
             <option value="male">male</option>
             <option value="female">Female</option>
           </select>
         </div>
       </div>

       <div class="input-fields">
         <span class="details">For the past 14 days, Did you travel to any epidemic area </span>
         <div class="custom-select">
           <select name="travel">
             <option value="yes">Yes</option>
             <option value="no">No</option>
           </select>
         </div>
       </div>


       <div class="input-fields">
         <span class="details">For the past 14 days, Did you have any COVID-19 symptom</span>
         <div class="custom-select">
           <select name="symptom">
             <option value="cough">Heavy Cough</option>
             <option value="fever">Fever</option>
             <option value="stuffy">Heavy Breath</option>
             <option value="headache">Headache</option>
             <option value="exhausted">Exhausted</option>
             <option value="none">None</option>
           </select>
         </div>
       </div>



       <div class="input-fields">
         <span class="details">For the past 14 days,Did you contact with any infected people</span>
         <div class="custom-select">
           <select name="contact">
             <option value="yes">Yes</option>
             <option value="no">No</option>
           </select>
         </div>
       </div>

       <div class="inputfield">
        <input type="submit" value="Submit" class="button" name="submit">
      </div>

     </form>
    </div>
  </body>
</html>
