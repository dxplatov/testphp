  
  <?php
    header('Access-Control-Allow-Origin: *');
    //header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: GET');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');
    $client_name = $_GET['client_name'];
    $email = $_GET['email'];
    $message = $_GET['message'];
    $no_of_people = $_GET['no_of_people'];
    $status = "P";
    $phone = $_GET['phone'];
    $date = $_GET['date'];
    $band = $_GET['band'];
    $food=$_GET['food'];
    $food_1 = array();
    $band = explode(',',$band);
    $food = explode(',',$food);
    for($i=0;$i<count($food);$i++){
      $food_1[$i] = intval($food[$i]);
    }
    $myfile1= fopen("./test.txt","w");
    $myfile = "test.txt";
    if(!file_put_contents($myfile,$client_name))
    {
      echo "1";
    }
    if(!file_put_contents($myfile,$email)){
      echo "2";
    }
    if(!file_put_contents($myfile,$message)){
      echo "3";
    }
    if(!file_put_contents($myfile,$no_of_people)){
      echo "4";
    }
    if(!file_put_contents($myfile,$status)){
      echo "5";
    }
    if(!file_put_contents($myfile,$phone)){
      echo "6";
    }
    file_put_contents($myfile,$date);
    for($i=0;$i<count($band);$i++){
      if(!file_put_contents($myfile,$band[$i])){
        echo "7";
      }
    }
    for($i=0;$i<count($food);$i++){
      if(!file_put_contents($myfile,$food[$i])){
        echo "8";
      }
    }
    
    $data = "1";
    $data = json_encode(array("man"=>$data));
    echo $data;
    // file_put_contents("test.txt",$name);
    // file_put_contents("test.txt",$phone);
   
    // test.php?client_name=Asil&email=dxplatov@gmailcom&phone=998977067633&date=2010-02-2&no_of_people=201&message=motherfucker&foods=1,2,3,4,6&bands=5,6,7