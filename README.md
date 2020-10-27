


![alt text](https://imgur.com/a/NZcni8a)



## About Welland Canal Bridge Status

Its a simple webpage built using Laravel + PHP that displays the current status of each of the 7 bridges that make up the Welland Canal. Each bridge is represented by a card that changes colour depending on the status of the bridge. It also displays the bridge location, name and current status (ie. "Raising Soon", "Lowering", "Fully Raised").

Looking to add in functionality that will let you know for how long a brige may be up or down based on historical data. This would allow users to have a better sense of which bridges to try and use while commuting from Niagara/St.Catharines or St.Catharines/Niagara.

Data for bridge status is pulled in from https://canalstatus.com/api/v1/bridges/

Main files:

Main webpage + bridge status requests --> /resources/views/bridge_status.blade.php
Script for building database of bridge status's. Will be used for building model to approximate time bridges are up/down --> app/Models/insertdb.php
Laravel scheduling:work script for inserting to db every minute --> /app/Console/Kernel.php
