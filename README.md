


<p align="center">
  <img src="https://github.com/Ethansteip/Welland-Canal-Status/blob/master/Screen%20Shot%202020-10-27%20at%209.29.59%20AM.png" width="1500" title="hover text">
  
</p>


## About Welland Canal Bridge Status

Its a simple webpage built using Laravel + PHP that displays the current status of each of the 7 bridges that make up the Welland Canal. Each bridge is represented by a card that changes colour depending on the status of the bridge. It also displays the bridge location, name and current status (ie. "Raising Soon", "Lowering", "Fully Raised").

Looking to add in functionality that will let you know for how long a bridge may be up or down based on historical data. This would allow users to have a better ideas of which bridges to try and use while commuting from Niagara/St.Catharines or St.Catharines/Niagara.

Data for bridge status is pulled in from https://canalstatus.com/api/v1/bridges/

<h1>Main files:</h1>

<p>The main webpage + bridge status requests --> /resources/views/bridge_status.blade.php</p><br><br>
<p>Script for building database of bridge status's. This is used for building a model to approximate the time bridges are up/down --> app/Models/insertDBforEach.php</p><br><br>
<p>Laravel schedule:work script for inserting bridge status's to db every minute --> /app/Console/Kernel.php<p>
