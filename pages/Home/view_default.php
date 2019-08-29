<?php namespace Donsframe; ?>

<?php

//echo "<br> size = ".$this->GetQs('size');
//echo "<br> get data = ".Data::GetData('all_sizes','fraction_in','id',$this->GetQs('size'));
//die();

?>

<div id="main-frame" class="main-frame">

  <div id="loading" style=" border: 1px solid green; background-color: mediumseagreen; position: absolute; top: 150px; left: 270px; z-index: 10; padding: 10px 50px 10px 50px; text-align: center; display: none ">
    Loading...
  </div>

  <div style="border-top: 10px solid #1d3745; border-right: 5px solid #1d3745; border-bottom: 5px solid #1d3745; border-left: 5px solid #1d3745; font-size: 38pt; font-weight: bold; padding: 10px; text-align:center;">
    Bearing Ball Calculator
  </div>

  <!-- START Select Material -->
  <div style=" border: 5px solid #1d3745; float: left; width: 390px; height: 400px; ">

    <div style="border: 0px solid blue; font-size: 18pt; font-weight: bold; padding: 2px; text-align:center;">
      Select Material
    </div>

    <div class="materials">

      <a onclick="SetMaterial('Chrome Steel');"   href="#"><div<?php echo ($this->GetQs('material') == 'Chrome Steel') ? ' class="selected" ' : ''; ?>><img src="./images/ball1.jpg"><span>Chrome Steel</span></div></a>
      <a onclick="SetMaterial('Carbon Steel');"   href="#"><div<?php echo ($this->GetQs('material') == 'Carbon Steel') ? ' class="selected" ' : ''; ?>><img src="./images/ball1.jpg"><span>Carbon Steel</span></div></a>
      <a onclick="SetMaterial('Soft Steel');"     href="#"><div<?php echo ($this->GetQs('material') == 'Soft Steel') ? ' class="selected" ' : ''; ?>><img src="./images/ball1.jpg"><span>Soft Steel</span></div></a>
      <a onclick="SetMaterial('316 Stainless');"  href="#"><div<?php echo ($this->GetQs('material') == '316 Stainless') ? ' class="selected" ' : ''; ?>><img src="./images/ball1.jpg"><span>316 Stainless</span></div></a>
      <a onclick="SetMaterial('302 Stainless');"  href="#"><div<?php echo ($this->GetQs('material') == '302 Stainless') ? ' class="selected" ' : ''; ?>><img src="./images/ball1.jpg"><span>302 Stainless</span></div></a>
      <a onclick="SetMaterial('440c Stainless');" href="#"><div<?php echo ($this->GetQs('material') == '440c Stainless') ? ' class="selected" ' : ''; ?>><img src="./images/ball1.jpg"><span>440c Stainless</span></div></a>

    </div>

    <div class="materials">

      <a onclick="SetMaterial('420 Stainless');"   href="#"><div<?php echo ($this->GetQs('material') == '420 Stainless') ? ' class="selected" ' : ''; ?>><img src="./images/ball1.jpg"><span>420 Stainless</span></div></a>
      <a onclick="SetMaterial('Brass');"           href="#"><div<?php echo ($this->GetQs('material') == 'Brass') ? ' class="selected" ' : ''; ?>><img src="./images/ball2.jpg"><span>Brass</span></div></a>
      <a onclick="SetMaterial('Aluminum');"        href="#"><div<?php echo ($this->GetQs('material') == 'Aluminum') ? ' class="selected" ' : ''; ?>><img src="./images/ball1.jpg"><span>Aluminum</span></div></a>
      <a onclick="SetMaterial('Nylon');"           href="#"><div<?php echo ($this->GetQs('material') == 'Nylon') ? ' class="selected" ' : ''; ?>><img src="./images/ball3.jpg"><span>Nylon</span></div></a>
      <a onclick="SetMaterial('Delrin');"          href="#"><div<?php echo ($this->GetQs('material') == 'Delrin') ? ' class="selected" ' : ''; ?>><img src="./images/ball3.jpg"><span>Delrin</span></div></a>
      <a onclick="SetMaterial('Silicon Nitride');" href="#"><div<?php echo ($this->GetQs('material') == 'Silicon Nitride') ? ' class="selected" ' : ''; ?>><img src="./images/ball4.jpg"><span>Silicon Nitride</span></div></a>

    </div>

    <div style="clear: both; height: 10px"></div><br>

    <div style="border: 0px solid black; width: 130px; float: left; text-align:center; ">
      Material
    </div>

    <div style="border: 0px solid black; width: 130px; float: left; text-align:center; ">
      Lbs. per cu in
    </div>

    <div style="border: 0px solid black; width: 100px; float: left; text-align:center; ">
      kg/m3
    </div>

    <div id="material" style="border: 0px solid black; width: 130px; float: left; text-align:center; ">
      <?php echo $this->GetQs('material'); ?>
    </div>

    <div style="border: 0px solid black; width: 130px; float: left; text-align:center; ">
      <?php echo Data::GetData('all_materials','lbs_in3','material',$this->GetQs('material')); ?>
    </div>

    <div style="border: 0px solid black; width: 100px; float: left; text-align:center; ">
      <?php echo Data::GetData('all_materials','kg_m3','material',$this->GetQs('material')); ?>
    </div>

    <div style="clear: both; height: 30px"></div>


  </div>
  <!-- END Ball Size -->

  <!-- START Ball Size -->
  <div style=" border: 5px solid #1d3745; float: left; width: 290px; height: 400px">

    <div style="border: 0px solid blue; font-size: 18pt; font-weight: bold; padding: 2px; text-align:center;">
      <span style="position: relative; top: 3; padding-right: 10px">Ball Size</span>
      <select style="width: 120px; " name="ball_sizes" id="ball_sizes" onchange="SetSize();">
        <option value="0">Select Size||</option>
        <?php for ($n=0; $n<Data::GetRowCount('all_sizes'); $n++) { ?>
          <option <?php echo (Data::Get('all_sizes','id',$n) == $this->GetQs('size')) ? ' selected=selected ' : '' ; ?> value="<?php echo Data::Get('all_sizes','id',$n); ?>"><?php echo Data::Get('all_sizes','decimal_in',$n); ?>" |<?php echo Data::Get('all_sizes','fraction_in',$n) ?> |<?php echo Data::Get('all_sizes','millimeters',$n); ?>mm </option>
        <?php } ?>
      </select>
    </div>

    <br>

    <div style=" border: 0px solid black; width: 60px; float: left; text-align:center; padding-left: 10px ">
      Inches
    </div>

    <div style=" border: 0px solid black; width: 90px; float: left; text-align:center; ">
      Fraction
    </div>

    <div style=" border: 0px solid black; width: 110px; float: left; text-align:center; ">
      Millimeters
    </div>

    <div style=" border: 0px solid black; width: 60px; float: left; text-align:center;padding-left: 10px  ">
      <?php echo Data::GetData('all_sizes','fraction_in','id',$this->GetQs('size')); ?>&nbsp;
    </div>

    <div style=" border: 0px solid black; width: 90px; float: left; text-align:center; ">
      <?php echo Data::GetData('all_sizes','decimal_in','id',$this->GetQs('size')); echo (Data::GetData('all_sizes','decimal_in','id',$this->GetQs('size'))) ? '"' : '&nbsp;'; ?>
    </div>

    <div style=" border: 0px solid black; width: 110px; float: left; text-align:center; ">
      <?php echo Data::GetData('all_sizes','millimeters','id',$this->GetQs('size')); echo (Data::GetData('all_sizes','millimeters','id',$this->GetQs('size'))) ? ' mm' : '&nbsp;'; ?>
    </div>

    <div style="border: 0px solid black; clear: both">
      <br>&nbsp;&nbsp;Materials Available for size: <?php echo Data::GetData('all_sizes','fraction_in','id',$this->GetQs('size')); ?>&nbsp;<br><br>

      <?php if (Data::GetRowCount('current_size') > 0) { ?>
      <?php for ($n=0; $n<Data::GetRowCount('current_size'); $n++) { ?>
          &nbsp;&nbsp;<a href="<?php echo Data::Get('current_size','page_link',$n); ?>"><?php echo Data::Get('current_size','material',$n); ?></a> &nbsp;&nbsp; <?php if (Data::Get('current_size','material',$n) == 'Brass') { echo '(out of stock)'; } ?> <br>
      <?php } ?>
      <?php } else { ?>echo number_format((1/Data::GetData('all_sizes','one_ball_weight_ounce','id',$this->GetQs('size'))),4);$)
        &nbsp;&nbsp;None found for size
      <?php } ?>

    </div>

  </div>
  <!-- END Ball Size -->

  <div style="border-top: 5px solid #1d3745; border-right: 5px solid #1d3745; border-bottom: 10px solid #1d3745; border-left: 5px solid #1d3745; clear: both">
    <img style="float: right; height: 40px" src="http://bearingballstore.com/includes/templates/digitalshop/images/logo.png">
    <table class="table1" border="0">
      <tr>
        <td style=" width: 80px; text-align: center"><strong><?php echo Data::GetData('all_sizes','fraction_in','id',$this->GetQs('size')); ?> Ball </strong></td>
        <td style=" width: 80px; text-align: center; ">Ounce</td>
        <td style=" width: 80px; text-align: center; ">Pound</td>
        <td style=" width: 80px; text-align: center; ">Killo</td>
        <td style=" width: 80px; text-align: center; "></td>
      </tr>
      <tr>
        <td>Balls Per</td>
        <td><input style="border: 0; text-align: center; width: 80px" type="text" name="box1" id="box1" value="<?php echo number_format((1/Data::GetData('all_sizes','one_ball_weight_ounce','id',$this->GetQs('size'))),2); ?>"></td>
        <td><input style="border: 0; text-align: center; width: 80px" type="text" name="box2" id="box2" value="<?php echo number_format((16/Data::GetData('all_sizes','one_ball_weight_ounce','id',$this->GetQs('size'))),2); ?>"></td>
        <td><input style="border: 0; text-align: center; width: 80px" type="text" name="box3" id="box3" value="<?php echo number_format((1000/Data::GetData('all_sizes','one_ball_weight_gram','id',$this->GetQs('size'))),2); ?>"></td>
        <td style=" width: 80px; text-align: center; "></td>
      </tr>
      <tr>
        <td colspan="5">
          Weight of <input style="border: 1; text-align: center; width: 50px" type="text" name="balls_per" id="balls_per" value="<?php echo $this->GetQs('balls_per'); ?>"> Balls <input onclick="SetBallsPer()" type="button" value="Calculate"> = <input style="border: 1; text-align: center; width: 80px" type="text" name="box5" id="box5" value="<?php echo number_format($this->GetQs('balls_per')*Data::GetData('all_sizes','one_ball_weight_ounce','id',$this->GetQs('size')),2); ?>"> Oz
        </td>
      </tr>
    </table>
    <div style="clear: both; height: 10px"></div>
  </div>


</div>

<script>
  var size = 0;
  var material = '';
  function DoLoading() {
    document.getElementById('loading').style.display = 'block';
  }
  function SetSize() {
    DoLoading();
    size = document.getElementById('ball_sizes').value;
    material = document.getElementById('material').innerHTML;
    window.location = 'index.php?material='+material.trim()+'&size='+size.trim();
  }
  function SetMaterial(this_material) {
    DoLoading();
    size = document.getElementById('ball_sizes').value;
    window.location = 'index.php?material='+this_material.trim()+'&size='+size.trim();
  }
  function SetBallsPer() {
    DoLoading();
    size = document.getElementById('ball_sizes').value;
    material = document.getElementById('material').innerHTML;
    balls_per = document.getElementById('balls_per').value;
    window.location = 'index.php?material='+material.trim()+'&size='+size.trim()+'&balls_per='+balls_per.toString();
  }
  var spacesToAdd = -18;
  var biggestLength = 0;
  $("#ball_sizes option").each(function(){
    var len = $(this).text().length;
    if(len > biggestLength){
      biggestLength = len;
    }
  });
  var padLength = biggestLength + spacesToAdd;
  $("#ball_sizes option").each(function(){
    var parts = $(this).text().split('|');
    var strLength = parts[0].length;
    for(var x=0; x<(padLength-strLength); x++){
      parts[0] = parts[0]+' ';
    }
    var strLength = parts[1].length;
    for(var x=0; x<(padLength-strLength); x++){
      parts[1] = parts[1]+' ';
    }
    $(this).text(parts[0].replace(/ /g, '\u00a0')+' '+parts[1].replace(/ /g, '\u00a0')+' '+parts[2]).text;
  });
</script>

