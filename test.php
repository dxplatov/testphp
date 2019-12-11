  
  <?php
    header('Access-Control-Allow-Origin: *');
    //header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: GET');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');
    $name = $_GET['name'];
    $phone = $_GET['phone'];
    file_put_contents("test.txt",$name);
    file_put_contents("test.txt",$phone);
    echo file_get_contents("./test.txt");
