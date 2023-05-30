<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="star.css">
    <title>Dummies Dashboard</title>
</head>
<body>
    <?php
        $firstname = $_POST['fist_name'];
        $last_name = $_POST['last_name']; 
        $location = $_POST['location'];
        $gender = $_POST['gender'];
        $course = $_POST['course'];
        $password = $_POST['upassword'];
         echo '<div class="holder"><div class="home"><p>Hello Welcome on Our Site Here is a quick recap of Your information.<br/>
        Username: <i>'.$firstname.' '.$last_name.' </i><br>And Your Home Address is: <i>'.$location.'<br/></i>
        And Your Gender Is: <i>'.$gender.'</i><br/>
        And You are Majoring: <i>'.$course.'</i><br/>
        Your Password Is: <i>'.sha1($password).'</i><br/>
        Hahahah, wondering what that was, its Your Password, the hashed Version, wish you all the best on our Site!</p></div>
        <div class="wrapper">
        <!-- <p>Happy coding</p> -->
            <div class="square" id="s0"></div>
            <div class="square" id="s1"></div>
            <div class="square" id="s2"></div>
            <div class="square" id="s3"></div>
            <div class="square" id="s4"></div>
            <div class="square" id="s5"></div>
            <div class="square" id="s6"></div>
            <div class="square" id="s7"></div>
            <div class="square" id="s8"></div>
            <div class="square" id="s9"></div>
            <div class="square" id="s10"></div>
            <div class="square" id="s11"></div>
            <div class="square" id="s12"></div>
            <div class="square" id="s13"></div>
            <div class="square" id="s14"></div>
            <div class="square" id="s15"></div>
            <div class="square" id="s16"></div>
            <div class="square" id="s17"></div>
            <div class="square" id="s18"></div>
            <div class="square" id="s19"></div>
            <div class="square" id="s20"></div>
            <div class="square" id="s21"></div>
            <div class="square" id="s22"></div>
            <div class="square" id="s23"></div>
            <div class="square" id="s24"></div>
            <div class="square" id="s25"></div>
            <div class="square" id="s26"></div>
            <div class="square" id="s27"></div>
            <div class="square" id="s28"></div>
            <div class="square" id="s29"></div>
    </div>  
        
        <h2>Have A wonderful Experience, Call this Place Home 💘💘💘💘</h2>
        ';
        
    ?>
</body>
</html>
