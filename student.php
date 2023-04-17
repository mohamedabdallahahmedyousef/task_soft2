<?php
$Student = [
    [
        'id' => '1',
        'Name' => 'Mohamed_Abdallah',
        'phone' => '011279824256',
        
        'Section' => 'CS',
        'Number'=>'200591',

        
        

    ],
    [
        'id' => '2',
        'Name' => 'Adel_Reda',
        'phone' => '010235486975',
        'Section' => 'IT',
        'Number'=>'200591',

    ],
    [
        'id' => '3',
        'Name' => 'Ahmed_Mohamed',
        'phone' => '012591136876',
        
        'Section' => 'CS',
        'Number'=>'200591',

    ],
    [
        'id' => '4',
        'Name' => 'Mohmed_Ali',
        'phone' => '01011125951',

        'Section' => 'IT',
        'Number'=>'200591',


    ],
    [
        'id' => '5',
        'Name' => 'Ahmed_Ebrahem',
        'phone' => '010235486975',
        
        'Section' => 'IT',
        'Number'=>'200591',


    ],
    [
        'id' => '6',
        'Name' => 'Abdalaa_Hassan',
        'phone' => '010235486975',
        
        'Section' => 'CS',
        'Number'=>'200591',

    ],
    [
        'id' => '7',
        'Name' => 'Abdelrahman_Hamed',
        'phone' => '011279824256',
        
        'Section' => 'CS',
        'Number'=>'200591',

    ],
    [
        'id' => '8',
        'Name' => 'Ali_mohmed',
        'phone' => '010235486975',

        'Section' => 'IT',
        'Number'=>'200591',

    ],
    [
        'id' => '9',
        'Name' => 'Salma_Ahmed',
        'phone' => '011279824256',

        'Section' => 'CS',
        'Number'=>'200591',

    ],
    [
        'id' => '10',
        'Name' => 'Yasmeen_mohmed',
        'phone' => '010235486975',
        
        'Section' => 'IT',
        'Number'=>'200591',

    ], [
        'id' => '11',
        'Name' => 'Nour_Mohamed',
        'phone' => '011279824256',
        
        'Section' => 'CS',
        'Number'=>'200591',

    ],
    [
        'id' => '12',
        'Name' => 'Ahmed_Yous`ef',
        'phone' => '010235486975',
        
        'Section' => 'IT',
        'Number'=>'200591',

    ], [
        'id' => '13',
        'Name' => 'amr_mohamed',
        'phone' => '011279824256',

        'Section' => 'CS',
        'Number'=>'200591',

    ],
    [
        'id' => '14',
        'Name' => 'Ali_mohmed',
        'phone' => '010235486975',

        'Section' => 'IT',
        'Number'=>'200591',

    ],
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            margin: 0px;
            padding: 0px;
        }

        table,
        th,
        tr,
        td {
            border: solid 2px green;
            color: blue;
            padding: 5px;
            margin-bottom: 35px;

        }

        h1 {
            color: blue;
            text-align: center;

        }

        .all_student_list {
            background-color: black;
            width: 100%;
            height: 100vh;
            margin: auto;
            display: flex;
            justify-content: center;
        }

        .all_student_list a {
            font-size: 20px;
            color: white;
            background-color: grey;
            padding: 8px 35px;
            border-radius: 15px;
            text-decoration: none;
        }
    </style>

</head>

<body>
    <div class="all_student_list">
        <div class="list">

            <h1>List of Student </h1>
            <table>
                <tr>
                    <th>index</th>
                    <th>Name</th>
                    <th>Phone</th>
                    
                    <th>Section</th>
                    <th>Number</th>
                    
                </tr>
                <?php
                foreach ($Student as $data) {
                ?>
                    <tr>
                        <td><?php echo "{$data["id"]}" ?></td>
                        <td><?php echo "{$data["Name"]}" ?></td>
                        <td><?php echo "{$data["phone"]}" ?></td>
                        
                        <td><?php echo "{$data["Section"]}" ?></td>
                        <td><?php echo "{$data["Number"]}" ?></td>
                        
                    </tr>
                <?php } ?>
            </table>
            <a href="./index.html">back To Home Page</a>
        </div>
    </div>
</body>