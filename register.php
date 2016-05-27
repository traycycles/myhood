<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timber Ridge</title>
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/register.css">

</head>
<body>
<form action="#" method="post">
    <h1>Sign Up</h1>
    <fieldset>
        <legend><span class="number">1</span>Your basic info</legend>
        <label for="name">Name:</label>
            <input type="text" id="name" name="user_name">
        <label for="email">Email:</label>
            <input type="email" id="email" name="user_email" placeholder="name@email.com">
        <label for="password">Password:</label>
            <input type="password" id="password" name="user_password">

    </fieldset>

    <fieldset >
        <legend><span class="number">2</span>About you:</legend>

        <label for="address">House/Bldg. Number:</label>
        <input type="text" id="address" name="user_addressnum" required>
        <span id="needit"></span>

        <label for="street">Street</label>
        <select id="street" name="user_street" onchange="unitDo()">
            <option value="street" selected>Street Name</option>
            <option value="timberRidgeRd" id="timberRidgeRd">Timber Ridge Rd.</option>
            <option value="timberwood">Timberwood Dr.</option>
            <option value="timberbrush">Timber Brush Tr.</option>
            <option value="timberRidgeDr">Timber Ridge Dr.</option>
        </select>
        <span id="user_condo_unit"></span>


        <label>I am a :</label>
        <input type="radio" id="homeowner" value="homeowner" name="user_status"><label
            for="homeowner" class="light">Homeowner</label><br>
        <input type="radio" id="renter" value="renter" name="user_status"><label
            for="renter" class="light">Renter</label>
    </fieldset>
        <button type="submit">Sign Up</button>
</form>
<script>
    function unitDo(){
        var str = document.getElementById('street');
        var add = document.getElementById('address');

        var strVal = str.options[str.selectedIndex].value;
        var addVal = add.value;

        var newfield = "<label for='unit'>Unit#</label><input type='text' id='unit' name='user_unit'>"
        if(strVal === 'timberRidgeRd' &&    (addVal == 1720 ||
                                            addVal==1730 ||
                                            addVal == 1740 ||
                                            addVal == 1750)){
            document.getElementById("user_condo_unit").innerHTML += newfield;
        }
    }
</script>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: tracy
 * Date: 4/30/2016
 * Time: 2:13 AM
 */