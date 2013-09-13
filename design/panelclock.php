<?php if (!defined('APPLICATION')) exit();
$PanelClock = <<<EOC
<svg id="PanelClockFace"> 

   <defs>
      <line id="tick1" x1="100" y1="55" x2="100" y2="58" style="stroke:#00d4d4;stroke-width:2;stroke-linecap:round"/>
      <line id="tick2" x1="100" y1="55" x2="100" y2="57" style="stroke:#00d4d4;stroke-width:1;stroke-linecap:round"/>
   </defs>
   
   <image x="00" y="0" width="200" height="200"
     xlink:href="/plugins/PanelClock/design/vrijvlinderClockFace.png" />
   
   <use x="0" y="0" xlink:href="#tick1"/>
   <use x="0" y="0" transform="rotate(30 100 100)" xlink:href="#tick1"/>
   <use x="0" y="0" transform="rotate(60 100 100)" xlink:href="#tick1"/>
   <use x="0" y="0" transform="rotate(90 100 100)" xlink:href="#tick1"/>
   <use x="0" y="0" transform="rotate(120 100 100)" xlink:href="#tick1"/>
   <use x="0" y="0" transform="rotate(150 100 100)" xlink:href="#tick1"/>
   <use x="0" y="0" transform="rotate(180 100 100)" xlink:href="#tick1"/>
   <use x="0" y="0" transform="rotate(-30 100 100)" xlink:href="#tick1"/>
   <use x="0" y="0" transform="rotate(-60 100 100)" xlink:href="#tick1"/>
   <use x="0" y="0" transform="rotate(-90 100 100)" xlink:href="#tick1"/>
   <use x="0" y="0" transform="rotate(-120 100 100)" xlink:href="#tick1"/>
   <use x="0" y="0" transform="rotate(-150 100 100)" xlink:href="#tick1"/>
   <use x="0" y="0" transform="rotate(6 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(12 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(18 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(24 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(36 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(42 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(48 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(54 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(66 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(72 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(78 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(84 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(96 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(102 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(108 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(114 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(126 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(132 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(138 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(144 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(156 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(162 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(168 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(174 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(-6 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(-12 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(-18 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(-24 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(-36 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(-42 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(-48 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(-54 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(-66 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(-72 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(-78 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(-84 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(-96 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(-102 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(-108 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(-114 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(-126 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(-132 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(-138 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(-144 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(-156 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(-162 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(-168 100 100)" xlink:href="#tick2"/>
   <use x="0" y="0" transform="rotate(-174 100 100)" xlink:href="#tick2"/>

   <text x="117" y="76" style="font-family:Arial;font-size:12px;text-anchor:middle;fill:#00d4d4">1</text>
   <text x="129" y="88" style="font-family:Arial;font-size:12px;text-anchor:middle;fill:#00d4d4">2</text>
   <text x="134" y="105" style="font-family:Arial;font-size:12px;text-anchor:middle;fill:#00d4d4">3</text>
   <text x="129" y="122" style="font-family:Arial;font-size:12px;text-anchor:middle;fill:#00d4d4">4</text>
   <text x="117" y="134" style="font-family:Arial;font-size:12px;text-anchor:middle;fill:#00d4d4">5</text>
   <text x="100" y="139" style="font-family:Arial;font-size:12px;text-anchor:middle;fill:#00d4d4">6</text>
   <text x="83" y="134" style="font-family:Arial;font-size:12px;text-anchor:middle;fill:#00d4d4">7</text>
   <text x="71" y="122" style="font-family:Arial;font-size:12px;text-anchor:middle;fill:#00d4d4">8</text>
   <text x="66" y="105" style="font-family:Arial;font-size:12px;text-anchor:middle;fill:#00d4d4">9</text>
   <text x="71" y="88" style="font-family:Arial;font-size:12px;text-anchor:middle;fill:#00d4d4">10</text>
   <text x="83" y="76" style="font-family:Arial;font-size:12px;text-anchor:middle;fill:#00d4d4">11</text>
   <text x="100" y="71" style="font-family:Arial;font-size:12px;text-anchor:middle;fill:#00d4d4">12</text>
   
   <g id="PanelClockMinute">
      <rect x="99" y="73" rx="4" ry="4" width="3" height="30" style="fill:red;stroke:none">
         <animateTransform attributeName="transform" type="rotate" dur="1h" from="0,100,100" to="360,100,100" repeatDur="indefinite" />
      </rect>
   </g>
   <g id="PanelClockHour">
      <rect x="98" y="77" rx="4" ry="4" width="5" height="26" style="fill:red;stroke:none">
         <animateTransform attributeName="transform" type="rotate" dur="24h" from="0,100,100" to="360,100,100" repeatDur="indefinite" />
      </rect>
   </g>
</svg>
EOC;
?>