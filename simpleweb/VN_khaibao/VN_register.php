<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Medical_register</title>
  </head>

  <body>
    <div class="wrapper">
      <div class="title">
        Medical Register Form
      </div>
     <form action="insert.php" method="POST">

       <div class="input-fields">
         <span class="details">Họ và Tên</span>
         <input type="text" name="username" required>
       </div>

       <div class="input-fields">
         <span class="details">Mã số sinh viên</span>
         <input type="text" name="MSSV" required>
       </div>

       <div class="input-fields">
         <span class="details">Khoa</span>
         <input type="text" name="factor" required>
       </div>

       <div class="input-fields">
         <span class="details">Email</span>
         <input type="email" name="email" required>
       </div>

       <div class="input-fields">
         <span class="details">Số điện thoại</span>
         <input type="phone" name="phone" required>
       </div>

       <div class="input-fields">
         <span class="details">Địa chỉ</span>
         <input type="text" name="address" required>
       </div>

       <div class="input-fields">
         <span class="details">Năm sinh: </span>
         <input type="text" name="date" required>
       </div>

       <div class="input-fields">
          <span class="details">Giới tính</span>
         <div class="custom-select">
           <select name="gender">
             <option value="nam">Nam</option>
             <option value="nu">Nữ</option>
           </select>
         </div>
       </div>

       <div class="input-fields">
         <span class="details">Có đi đến vùng dịch trong vòng 14 ngày</span>
         <div class="custom-select">
           <select name="travel">
             <option value="co">Có</option>
             <option value="khong">Không</option>
           </select>
         </div>
       </div>


       <div class="input-fields">
         <span class="details">Triệu chứng trong vòng 14 ngày</span>
         <div class="custom-select">
           <select name="symptom">
             <option value="ho">Ho</option>
             <option value="sot">Sốt</option>
             <option value="kho tho">Khó thở</option>
             <option value="dau dau">Đau đầu</option>
             <option value="met moi">Mệt mỏi</option>
             <option value="khong">Không</option>
           </select>
         </div>
       </div>



       <div class="input-fields">
         <span class="details">Tiếp xúc f0, f1 trong vòng 14 ngày</span>
         <div class="custom-select">
           <select name="contact">
             <option value="co">Có</option>
             <option value="khong">Không</option>
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
