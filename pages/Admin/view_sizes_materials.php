<?php namespace Donsframe; ?>

<div id="main-frame" class="main-frame">

<?php include 'view_menu.php'; ?>

<!-- ============ START Sizes by Material ============ -->
  <br><strong>Sizes by Material</strong><br>

  <select style=" width: 150px; " name="ball_materials" id="ball_materials" onchange="SetMaterial()">
    <option value="0">Select Material</option>
    <?php for ($n=0; $n<Data::GetRowCount('all_materials'); $n++) { ?>
      <option <?php echo (Data::Get('all_materials','id',$n) == $this->GetQs('material')) ? ' selected=selected ' : '' ; ?> value="<?php echo Data::Get('all_materials','id',$n); ?>"><?php echo Data::Get('all_materials','material',$n); ?> </option>
    <?php } ?>
  </select>

  <select style="width: 120px; " name="ball_sizes" id="ball_sizes" >
    <option value="0">Select Size||</option>
    <?php for ($n=0; $n<Data::GetRowCount('all_sizes'); $n++) { ?>
      <option value="<?php echo Data::Get('all_sizes','id',$n); ?>"><?php echo Data::Get('all_sizes','decimal_in',$n); ?>" |<?php echo Data::Get('all_sizes','fraction_in',$n) ?> |<?php echo Data::Get('all_sizes','millimeters',$n); ?>mm </option>
    <?php } ?>
  </select>

  <table>
    <tr>
      <th>Options</th>
      <th>#</th>
      <th>Fraction In.</th>
      <th>Decimal In.</th>
      <th>Millimeters</th>
    </tr>
<?php if (Data::GetRowCount('current_material') > 0) { ?>
<?php for ($n=0; $n<Data::GetRowCount('current_material'); $n++) { ?>
    <tr>
    <td style="text-align: center"><input title="Remove size from this material" type=button value="-" onclick="NotReady();"></td>
    <td><?php echo $n+1; ?></td>
    <td><?php echo Data::Get('current_material','fraction_in',$n); ?></td>
    <td><?php echo Data::Get('current_material','decimal_in',$n); ?></td>
    <td><?php echo Data::Get('current_material','millimeters',$n); ?></td>
    </tr>
<?php }  ?>
<?php } else { ?>
  <tr>
    <td colspan="999" style="text-align: center">None found</td>
  </tr>
<?php } ?>
  <table>
    <!-- ============ END Sizes by Material ============ -->

</div>

<?php include 'javascript.js.php'; ?>
