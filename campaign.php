<?php 


if(isset($_GET['id'])){
    $id = $_GET['id'];
    // echo $id;
    $url = "http://localhost:4000/getSingleCampaignProfile/$id";
    
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $set_data=curl_exec($ch);
    if($e = curl_error($ch)){
        echo $e;
        
    }
    else{
        // $decode =json_decode($set_data);
        // print_r($decode);
        // echo $set_data;
    }
   
  
}



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>All Campaigns</h1>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Campaign Title</th>
                    <th scope="col">Campaign Email</th>
                    <th scope="col">Details</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $obj = json_decode($set_data);

                    // echo $obj;
                    
                    $id = $obj->_id;
                    $campaignTitle = $obj->campaignTitle;
                    $campaignEmail = $obj->brandEmail;
                    // $onboardedInfluencerIds = $obj->onboardedInfluencerIds;

                    $data = json_decode($set_data, true);

                    // echo [$data];

                    // foreach($data as $item){
                    //     $id = $item['onboardedInfluencerIds'];

                    //     echo "=============";
                    //     echo $id;
                    // }


                    echo '
                        <tr>
                            <td>'.$campaignTitle.'</td>
                            <td>'.$campaignEmail.'</td>
                            <td>'.$influencerId1.'</td>
                            <td>'.$influencerId2.'</td>
                        </tr>
                    ';
                   

                ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>