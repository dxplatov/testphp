  
  <?php
    header('Access-Control-Allow-Origin: *');
    //header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: GET');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');
    $client_name = $_GET['client_name'];
    $email = $_GET['email'];
    $message = $_GET['message'];
    $no_of_people = $GET['no_of_people'];
    $status = "P";
    $phone = $_GET['phone'];
    $date = $_GET['date'];
    $band = $_GET['band'];
    $food=$_GET['food'];
    
    $band = explode(',',$band);
    $food = explode(',',$food);

    $myfile = fopen("./test.txt", "wr");
    file_put_contents($myfile,$client_name);
    file_put_contents($myfile,$email);
    file_put_contents($myfile,$message);
    file_put_contents($myfile,$no_of_people);
    file_put_contents($myfile,$status);
    file_put_contents($myfile,$phone);
    file_put_contents($myfile,$date);
    for($i=0;$i<count($band);$i++){
      file_put_contents($myfile,$band[$i]);
    }
    for($i=0;$i<count($food);$i++){
      file_put_contents($myfile,$food[$i]);
    }
    $data = "1";
    $data = json_encode(array("id"=>$data));
    echo $data;
    // file_put_contents("test.txt",$name);
    // file_put_contents("test.txt",$phone);
   
    // test.php?client_name=Asil&email=dxplatov@gmailcom&phone=998977067633&date=2010-02-2&no_of_people=201&message=motherfucker&foods=1,2,3,4,6&bands=5,6,7