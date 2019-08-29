<div id="menu-frame" class="menu-frame">
  <ul>
    <li <?php echo $this->MenuSelected('Home');      ?>><a onclick="DoMenu();" href="?page=Home">Home</a></li>
  </ul>
  <div style=" opacity:0.4; font-size: 8pt; color: #DDD; padding-left: 20px; padding-top: 11px;  display: inline-block;" id="menu-page-load-time"><?php echo $this->GetPageRenderFinishTime(); ?> seconds</div>
  <div style=" color: white; padding: 9px; font-size: 10pt; " id="menu-status"></div>
</div>
