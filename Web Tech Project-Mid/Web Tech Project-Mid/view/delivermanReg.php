<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <form method="post" action="../controller/DeliverymanRegChecker.php"
        style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
        <table border="1" cellspacing="0" cellpadding="5" width="100%">
            <tr>
                <td><img src="../asset/clogo.png" alt="" height="30px"><b>All in One Parcel Service</td>
                <td align="right"><a href="index.php">Back to Home!?</a></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <fieldset>
                        <form method="post" action="../controller/DeliverymanRegChecker.php">
                            <legend>Delivery Man Registration Panel</legend>
                            <table border="1" cellpadding="10" cellspacing="0">
                                <tr>
                                    <td>Name: </td>
                                    <td>
                                        <input type="text" name="dname" id="" required placeholder="enter your name here.">
                                    </td>
                                </tr>

                                <tr>
                                    <td>E-mail: </td>
                                    <td>
                                        <input type="text" name="demail"
                                        required placeholder="enter your email here." >
                                        <input type="submit" value="i" title="hint: example@example.com">
                                    </td>
                                </tr>

                                <tr>
                                    <td>Gender: </td>
                                    <td>
                                        <Select name="dgender">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </Select>
                                        <i style="color:red; font-size:12px ;">Select Your Gender</i>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Date Of Birth: </td>
                                    <td>
                                        <input type="date" name="ddob" id="" required>
                                        <i style="color:red; font-size:12px ;">Select Your DOB</i>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Phone Number: </td>
                                    <td>
                                        <input type="number" name="dphone" id="" required placeholder="enter your phone number here.">
                                        <br><i style="color:red; font-size:12px ;">Phone Number length==11</i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>NID Number: </td>
                                    <td><input type="number" name="dnid" id="" required placeholder="enter your nid no here.">
                                    <br><i style="color:red; font-size:12px ;">NID Number length==10</i>
                                </td>
                                </tr>
                                <tr>
                                    <td>Vehicle Type: </td>
                                    <td>
                                        <Select name="vec">
                                            <option value="Motor Bike">Motor Bike</option>
                                            <option value="By-Cycle">By-Cycle</option>
                                            <option value="None">None</option>
                                        </Select>
                                        <br><i style="color:red; font-size:12px ;">Choose Your Vehicle Type</i>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Address: </td>
                                    <td><textarea name="daddress" id="" cols="30" rows="5" required placeholder="enter your address here."></textarea></td>
                                </tr>

                                <tr>
                                    <td>Password: </td>
                                    <td>
                                        <input type="password" name="dpassword" id="" required placeholder="enter your password here.">
                                        <br><i style="color:red; font-size:12px ;">Minimum length=8</i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Re-password: </td>
                                    <td>
                                        <input type="password" name="drePassword" id="" required placeholder="retype your password.">
                                        <br><i style="color:red; font-size:12px ;">same as given password</i>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                        <input type="submit" name="submit" id="" value="REGISTER ME">
                                        <input type="reset" name="reset" id="" value="Reset">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" colspan="2">
                                        <a href="userLogin.php">Already Have An Account?</a>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="right">
                    <p>
                        Having trouble!? <br>
                    <p style="color: red;">Hotline: 0987654321</p>
                    </p>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>