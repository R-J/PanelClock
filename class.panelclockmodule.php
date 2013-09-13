<?php if (!defined('APPLICATION')) exit();
class PanelClockModule extends Gdn_Module {
   public function AssetTarget() {
      return 'Panel';
   }
   
   /**
    * Somewhat messy but JS and CSS is included in module because they just
    * consume a few lines and I didn't wan't to bloat the plugin
    */
   public function ToString() {
      require_once('design/panelclock.php');
?>
<style type="text/css">
#PanelClockFace {
   display:block;
   margin:15px; 
   width:220px;
   height:220px;
}
</style>
<div id="PanelClock" class="Box PanelClockBox">
   <h4><?php echo T('Astonishing Piece of Art!');?></h4>
   <?php echo($PanelClock); ?>
</div>
<script type="text/javascript"> 
   var d = new Date();
   var s = d.getSeconds();
   var m = d.getMinutes() + s / 60;
   var h = d.getHours() + m / 60;
   document.getElementById('PanelClockMinute').setAttribute('transform', 'rotate(' + (m * 6) + ',100,100)');
   document.getElementById('PanelClockHour').setAttribute('transform', 'rotate(' + (h * 30) + ',100,100)');
</script>
   <?php    
  }
}