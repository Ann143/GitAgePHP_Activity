<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
    <style>
    body{
        background-image: url(anime1.jpg);
        background-repeat:no-repeat;
        background-size:cover;
        height:200px;
    }
    </style>
</head>
<body>
    
<br><br><br><br><br>
    <div class="card" style="width: 25rem;margin-left: 500px;" >
  <h6 class="text-center">Fill in the form!</h6>
  <div class="card-body">
     <form action="" method="POST">
            Enter your name:
            <input type="text" name="myname" class="form-control"><br>
            Enter your birthdate:
            <input type="date" name="birthdate" class="form-control"><br>
           <center><button type="submit" name="btn" class="btn btn-primary">Submit</button></center>
        </form>
  </div>
</div>

<div class="card" style="width: 25rem; margin-left: 500px; font-size:18px;background-color:pink;text-align:center ">
  <div class="card-body">
    
  <?php  
        if(isset($_POST['btn'])){
   
    $bithdaydate= $_POST['birthdate'];
    $name = $_POST['myname'];
    echo "Hello, ".$name."! ";
    echo  Age($_POST['birthdate'])." years old!";

        }

        function Age(){
            $dob= $_POST['birthdate'];
            $diff = (date('Y') - date('Y',strtotime($dob)));
            echo "You are " .$diff;
        }
    ?>

  </div>
</div>





    

</body>
</html>