<?php if (!defined('APPLICATION')) exit();
/**
  * This Plugin shows an analog svg clock in the panel
  *
  * You can define your own clock faces by SVG
  * Your SVG needs to have the id "PanelClockFace"
  * Hour and minute must be enclosed in groups with ids PanelClockHour and PanelClockMinute
  * You need to include animateTransform in your SVG to let hands circle around
  * See examples in design directory
  */

$PluginInfo['PanelClock'] = array(
   'Name' => 'Panel Clock',
   'Description' => '(Pretty Useless) Panel Clock shows an analog clock in the panel',
   'Version' => '0.1',
   'RequiredApplications' => array('Vanilla' => '2.0.18.8'),
   'HasLocale' => TRUE,
   'Author' => 'Robin'
);

class PanelClockPlugin extends Gdn_Plugin {
  
   public function Base_Render_Before($Sender) {
      // only render our module in panel
      if(GetValue('Panel',$Sender->Assets) && $Sender->MasterView != 'admin') {
         $PanelClockModule = new PanelClockModule($Sender);
         $Sender->AddModule($PanelClockModule);
      }
   }
}
