<?php if (!defined('APPLICATION')) exit();
$PanelClock = <<<EOC
<svg id="PanelClockFace" style="stroke:#1E79A7;fill:#E3F4FF;"> 
   <defs>
      <line id="tick1" x1="100" y1="10" x2="100" y2="25" style="stroke-width:4"/>
      <line id="tick2" x1="100" y1="10" x2="100" y2="20" style="stroke-width:3"/>
   </defs>
   <circle cx="100" cy="100" r="98" style="stroke-width:4"/>
   <circle cx="100" cy="100" r="6" style="stroke-width:1;fill:#1E79A7"/>
   <use x="0" y="0" xlink:href="#tick1"/>
   <use x="0" y="0" transform="rotate(30 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(60 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(90 100 100)" xlink:href="#tick1"/>
   <use x="0" y="0" transform="rotate(120 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(150 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(180 100 100)" xlink:href="#tick1"/>
   <use x="0" y="0" transform="rotate(-30 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(-60 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(-90 100 100)" xlink:href="#tick1"/>
   <use x="0" y="0" transform="rotate(-120 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(-150 100 100)" xlink:href="#tick2"/>
   <g id="PanelClockMinute">
      <line x1="100" y1="100" x2="100" y2="40" style="stroke-width:3">
         <animateTransform attributeName="transform" type="rotate" dur="1h" from="0,100,100" to="360,100,100" repeatDur="indefinite" />
      </line>   
   </g>
   <g id="PanelClockHour">
      <line x1="100" y1="100" x2="100" y2="60" style="stroke-width:5">
         <animateTransform attributeName="transform" type="rotate" dur="24h" from="0,100,100" to="360,100,100" repeatDur="indefinite" />
      </line>
   </g>
</svg>
EOC;
?>