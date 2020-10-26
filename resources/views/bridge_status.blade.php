<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

        <title>Welland Canal Bridge Status</title>

        <!-- Fonts -->

        <!-- Styles -->
        <style>
            html {
    background: #F8F8F8;
    font-family: 'Roboto', sans-serif;
    -webkit-font-smoothing: antialiased;
    padding: 20px 0;
}
.mydiv {
    
    color: black;
    height: 200px;
    
    border: 5px lightblue;
    background-color: white;
    text-align: center;
    position: relative;
    border-radius: 10px;
    box-shadow: 0 6px 6px rgba(0,0,0,0.1);
    
    top: 0;
    transition: all .09s ease-in;
}
.mydiv:hover {
    top: -6px;
    box-shadow: 0 4px 5px rgba(0,0,0,0.2);
}

.title {
    text-align: center;
}
.wrapper {
      display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 10px;
    grid-auto-rows: minmax(100px, auto);
}
.one {
    grid-column: 1 / 3;
    grid-row: 1;
    }
.two { 
    grid-column: 2 / 4;
    grid-row: 1 / 3;
    }
.three {
    grid-column: 1;
    grid-row: 2 / 5;
    }
.four {
    grid-column: 3;
    grid-row: 3;
    }
.five {
    grid-column: 2;
    grid-row: 4;
    }
.six {
    grid-column: 3;
    grid-row: 4;
    }
.available {
    padding: 10px;
    text-align: center;
    background: #1abc9c;
    color: white;
    font-size: 13px;
    border-radius: 10px 10px 0px 0px;
}
.raisingsoon {
    padding: 10px;
    text-align: center;
    background: #FF0000;
    color: white;
    font-size: 13px;
    border-radius: 10px 10px 0px 0px;
}
.fullyraised {
    padding: 10px;
    text-align: center;
    background: #FF0000;
    color: white;
    font-size: 13px;
    border-radius: 10px 10px 0px 0px;
}
.wip {
    padding: 10px;
    text-align: center;
    background: #FF8C00;
    color: white;
    font-size: 13px;
    border-radius: 10px 10px 0px 0px;
}
        </style>
        

    </head>
    <body>

        <?PHP
            $jsondata = file_get_contents("https://canalstatus.com/api/v1/bridges/");
            $json = json_decode($jsondata, true);
            $bridges = $json['bridges'];
        ?>
       
            <header class="title">
                <h1>Welland Canal Bridge Status</h1>
            </header>
            
            
            <div class="wrapper">

                <div class="mydiv" class="one">
                    <div class="<?PHP
                                    if ($json['bridges'][0]['status']['status'] === "Available") {
                                        echo "available";
                                    } elseif ($json['bridges'][0]['status']['status'] === "Raising Soon") {
                                        echo "raisingsoon";
                                    } elseif ($json['bridges'][0]['status']['status'] === "--Work in Progress--") {
                                        echo "wip";
                                    } else {
                                        echo "fullyraised";
                                    };?>">

                        <h2><?PHP echo $json['bridges'][0]['location'];?></h2>
                    </div>
                        <h6><?PHP echo $json['bridges'][0]['name'];?></h6>
                        <h3><?PHP echo $json['bridges'][0]['status']['status'];?></h3>
                </div>
                <div class="mydiv" class="two">
                    <div class="<?PHP
                                    if ($json['bridges'][1]['status']['status'] === "Available") {
                                        echo "available";
                                    } elseif ($json['bridges'][1]['status']['status'] === "Raising Soon") {
                                        echo "raisingsoon";
                                    } elseif ($json['bridges'][1]['status']['status'] === "--Work in Progress--") {
                                        echo "wip";
                                    } else {
                                        echo "fullyraised";
                                    };?>">

                        <h2><?PHP echo $json['bridges'][1]['location'];?></h2>
                    </div>
                    <h6><?PHP echo $json['bridges'][1]['name'];?></h6>
                    <h3><?PHP echo $json['bridges'][1]['status']['status'];?></h3>
                </div>
                <div class="mydiv" class="three">
                    <div class="<?PHP
                                    if ($json['bridges'][2]['status']['status'] === "Available") {
                                        echo "available";
                                    } elseif ($json['bridges'][2]['status']['status'] === "Raising Soon") {
                                        echo "raisingsoon";
                                    } elseif ($json['bridges'][2]['status']['status'] === "--Work in Progress--") {
                                        echo "wip";
                                    } else {
                                        echo "fullyraised";
                                    };?>">

                        <h2><?PHP echo $json['bridges'][2]['location'];?></h2>
                    </div>
                    <h6><?PHP echo $json['bridges'][2]['name'];?></h6>
                    <h3><?PHP echo $json['bridges'][2]['status']['status'];?></h3>
                </div>
                
                <div class="mydiv" class="four">
                    <div class="<?PHP
                                    if ($json['bridges'][3]['status']['status'] === "Available") {
                                        echo "available";
                                    } elseif ($json['bridges'][3]['status']['status'] === "Raising Soon") {
                                        echo "raisingsoon";
                                    } elseif ($json['bridges'][3]['status']['status'] === "--Work in Progress--") {
                                        echo "wip";
                                    } else {
                                        echo "fullyraised";
                                    };?>">

                        <h2><?PHP echo $json['bridges'][3]['location'];?></h2>
                    </div>
                    <h6><?PHP echo $json['bridges'][3]['name'];?></h6>
                    <h3><?PHP echo $json['bridges'][3]['status']['status'];?></h3>
                </div>

                <div class="mydiv" class="five">
                    <div class="<?PHP
                                    if ($json['bridges'][4]['status']['status'] === "Available") {
                                        echo "available";
                                    } elseif ($json['bridges'][4]['status']['status'] === "Raising Soon") {
                                        echo "raisingsoon";
                                    } elseif ($json['bridges'][4]['status']['status'] === "--Work in Progress--") {
                                        echo "wip";
                                    } else {
                                        echo "fullyraised";
                                    };?>">

                        <h2><?PHP echo $json['bridges'][4]['location'];?></h2>
                    </div>
                    <h6><?PHP echo $json['bridges'][4]['name'];?></h6>
                    <h3><?PHP echo $json['bridges'][4]['status']['status'];?></h3>
                </div>

                <div class="mydiv" class="six">
                    <div class="<?PHP
                                    if ($json['bridges'][5]['status']['status'] === "Available") {
                                        echo "available";
                                    } elseif ($json['bridges'][5]['status']['status'] === "Raising Soon") {
                                        echo "raisingsoon";
                                    } elseif ($json['bridges'][5]['status']['status'] === "--Work in Progress--") {
                                        echo "wip";
                                    } else {
                                        echo "fullyraised";
                                    };?>">

                        <h2><?PHP echo $json['bridges'][5]['location'];?></h2>
                    </div>
                    <h6><?PHP echo $json['bridges'][5]['name'];?></h6>
                    <h3><?PHP echo $json['bridges'][5]['status']['status'];?></h3>
                </div>

                <div class="mydiv" class="seven">
                    <div class="<?PHP
                                    if ($json['bridges'][6]['status']['status'] === "Available") {
                                        echo "available";
                                    } elseif ($json['bridges'][6]['status']['status'] === "Raising Soon") {
                                        echo "raisingsoon";
                                    } elseif ($json['bridges'][6]['status']['status'] === "--Work in Progress--") {
                                        echo "wip";
                                    } else {
                                        echo "fullyraised";
                                    };?>">

                        <h2><?PHP echo $json['bridges'][6]['location'];?></h2>
                    </div>
                    <h6><?PHP echo $json['bridges'][6]['name'];?></h6>
                    <h3><?PHP echo $json['bridges'][6]['status']['status'];?></h3>
                </div>

                <div class="mydiv" class="eight">
                    <div class="<?PHP
                                    if ($json['bridges'][7]['status']['status'] === "Available") {
                                        echo "available";
                                    } elseif ($json['bridges'][7]['status']['status'] === "Raising Soon") {
                                        echo "raisingsoon";
                                    } elseif ($json['bridges'][7]['status']['status'] === "--Work in Progress--") {
                                        echo "wip";
                                    } else {
                                        echo "fullyraised";
                                    };?>">

                        <h2><?PHP echo $json['bridges'][7]['location'];?></h2>
                    </div>
                    <h6><?PHP echo $json['bridges'][7]['name'];?></h6>
                    <h3><?PHP echo $json['bridges'][7]['status']['status'];?></h3>
                </div>

            </div>
    </body>
</html>