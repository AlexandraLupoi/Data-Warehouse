<!DOCTYPE html>
<html>
    <head>
        <?php include 'header.php';?>
    </head>
    <body style="background-color:white;">
    <h2 style="margin-left: 36px;margin-top: 30px;color: black;font-weight: 500;">SHOPPING LIST</h2>
    <table class="table table-hover" style="margin-left: 2%;width: 50%;margin-top: 3%;">
         <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Book</th>
                <th scope="col">Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Book1</td>
                <td>20</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Book2</td>
                <td>100</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Book2</td>
                <td>30</td>
            </tr>
        </tbody>
    </table>

<h2 style="margin-top: 3%;margin-left: 2%;font-size: 21px;">TOTAL:</h2>
<h3 style="margin-top: 2%;margin-left: 2%;font-size: 17px;text-decoration: underline;">How do you want to order?</h3>
<input onchange="radioBtnFunction()" type="radio" name="group1" id="onlineRadioBtn" value="Online" style="margin-left:2%;margin-top:2%;">
<label for="onlineRadioBtn">Online</label>
<input onchange="radioBtnFunction()" type="radio" name="group1" id="shopRadioBtn" value="In shop" style="margin-left:2%">
<label for="shopRadioBtn">In shop</label>
<h3 id="address" style="display:none; margin-top: 2%; margin-left:2%; font-size: 17px;text-decoration: underline">Adress:</h3>
<h3 id="shopAddress" style="display:none; margin-top: 2%; margin-left:2%; font-size: 17px;text-decoration: underline">Our shops:</h3>
<div class="row">
    <div class="column" style="margin-left: 3%; margin-right:3%">
        <label style="display:none; margin-left:3%; font-weight: bolder;" for="country" id="labelCountry">Country:</label>
        <select  style="display:none; margin-left:3%;height: 3.1vh;width: 100%;" type="text" id="country" name="country" class="form-control">
            <option value="Romania">Romania</option>
            <option value="Russia">Russia</option>
            <option value="Serbia">Serbia</option>
            <option value="Bulgaria">Bulgaria</option>
            <option value="Moldova">Moldova</option>
        </select><br>
        <label style="display:none; margin-left:3%; font-weight: bolder;" for="city" id="labelCity" >City:</label>
        <input style="display:none; margin-left:3%;" type="text" id="city" name="city" class="form-control" required><br>
    </div>
    <div class="column">
        <label style="display:none; margin-left:3%; font-weight: bolder;" for="city" id="labelStreet">Street:</label>
        <input style="display:none; margin-left:3%;" type="text" id="street" name="street" class="form-control" required><br>
        <label style="display:none; margin-left:3%; font-weight: bolder;" for="city" id="labelNumber">Number:</label>
        <input style="display:none; margin-left:3%;" type="text" id="number" name="number" class="form-control" required>
    </div>
</div>
<select  style="display:none; margin-left:2%;height: 3.1vh;width: 22%;" type="text" id="shopsList" name="shopsList" class="form-control">
    <option value="Bucharet">Bucharest, str. Garoafei, nr.22</option>
    <option value="Cluj">Cluj, str. Minune, nr.80</option>
    <option value="Iasi">Iasi, str. Pantelimon, nr.13</option>
    <option value="Timisoara">Timisoara, str. Bucegi, nr.21</option>
    <option value="Oradea">Oradea, str. Milei, nr.97</option>
</select><br>
<button id="finishComand" class="btn btn-success" style="font-size: large; margin-left:2%;" onclick="sendFunction();">Send</button>
</body>
</html>

<script>
document.getElementById("categoryList").style.display = "none";

//button radio function
function radioBtnFunction() {
    if(document.getElementById('onlineRadioBtn').checked) {
        document.getElementById('labelCountry').style.display="block";
        document.getElementById('country').style.display="block";
        document.getElementById('labelCity').style.display="block";
        document.getElementById('city').style.display="block";
        document.getElementById('labelStreet').style.display="block";
        document.getElementById('street').style.display="block";
        document.getElementById('labelNumber').style.display="block";
        document.getElementById('number').style.display="block";
        document.getElementById('address').style.display="block";
        document.getElementById('shopAddress').style.display="none";
        document.getElementById('shopsList').style.display="none";
    }else if(document.getElementById('shopRadioBtn').checked) {
        document.getElementById('labelCountry').style.display="none";
        document.getElementById('country').style.display="none";
        document.getElementById('labelCity').style.display="none";
        document.getElementById('city').style.display="none";
        document.getElementById('labelStreet').style.display="none";
        document.getElementById('street').style.display="none";
        document.getElementById('labelNumber').style.display="none";
        document.getElementById('number').style.display="none";
        document.getElementById('address').style.display="none";
        document.getElementById('shopAddress').style.display="block";
        document.getElementById('shopsList').style.display="block";
    }
}
//validation
// $(document).ready(function () {
//     function sendFunction(){  
//         var empty = "";
//         var city = $('#city').val();
//         var street = $('#street').val();
//         var number = $('#number').val();
//         const button = document.querySelector('button')
        
//         if (empty == city || empty == street || empty == number)
//         {
//             alert("Please fill all the fields!");
//             e.preventDefault();
//             button.disabled = true;
//         }
//         else
//         {
//              button.disabled = false
//         }    
//     }
// });
</script>