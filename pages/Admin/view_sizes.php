<?php namespace Donsframe; ?>

<div id="main-frame" class="main-frame">

<?php include 'view_menu.php'; ?>

<input type="hidden" id="cur_edit_id" name="cur_id" value="">

<!-- ============ START Sizes ============ -->
  <br><strong>Sizes</strong><br>
    <table>
    <tr>
      <th>Options</th>
      <th>#</th>
      <th>Fraction In.</th>
      <th>Decimal In.</th>
      <th>Millimeters</th>
      <th>one_ball_weight_ounce</th>
      <th>one_ball_weight_gram</th>
      <th style="background-color: white;"></th>
    </tr>
<?php for ($n=0; $n<Data::GetRowCount('all_sizes'); $n++) { ?>
    <tr>
    <td>
      <input id="id_<?php echo str_pad(Data::Get('all_sizes','id',$n),2,'0',STR_PAD_LEFT); ?>_edit" type=button title="Edit size" value="Edit" onclick="EditSize('<?php echo str_pad(Data::Get('all_sizes','id',$n),2,'0',STR_PAD_LEFT); ?>');" style="display: inline">
    </td>
    <td><?php echo $n+1; ?></td>
    <td><input type="hidden" id="id_<?php echo str_pad(Data::Get('all_sizes','id',$n),2,'0',STR_PAD_LEFT); ?>" value="<?php echo str_pad(Data::Get('all_sizes','id',$n),2,'0',STR_PAD_LEFT); ?>"><input id="id_<?php echo str_pad(Data::Get('all_sizes','id',$n),2,'0',STR_PAD_LEFT); ?>_fraction_in" readonly="readonly" type="text" style="width: 50px; background: none; border: 0; " value='<?php echo Data::Get('all_sizes','fraction_in',$n); ?>'></td>
    <td><input id="id_<?php echo str_pad(Data::Get('all_sizes','id',$n),2,'0',STR_PAD_LEFT); ?>_decimal_in" readonly="readonly" type="text" style="width: 80px; background: none; border: 0; " value='<?php echo Data::Get('all_sizes','decimal_in',$n); ?>'></td>
    <td><input id="id_<?php echo str_pad(Data::Get('all_sizes','id',$n),2,'0',STR_PAD_LEFT); ?>_millimeters" readonly="readonly" type="text" style="width: 80px; background: none; border: 0; " value='<?php echo Data::Get('all_sizes','millimeters',$n); ?>'></td>
    <td><input id="id_<?php echo str_pad(Data::Get('all_sizes','id',$n),2,'0',STR_PAD_LEFT); ?>_one_ball_weight_ounce" readonly="readonly" type="text" style="width: 120px; background: none; border: 0; " value='<?php echo Data::Get('all_sizes','one_ball_weight_ounce',$n); ?>'></td>
    <td><input id="id_<?php echo str_pad(Data::Get('all_sizes','id',$n),2,'0',STR_PAD_LEFT); ?>_one_ball_weight_gram" readonly="readonly" type="text" style="width: 120px; background: none; border: 0; " value='<?php echo Data::Get('all_sizes','one_ball_weight_gram',$n); ?>'></td>
    <td style="background-color: white;">
      <input id="id_<?php echo str_pad(Data::Get('all_sizes','id',$n),2,'0',STR_PAD_LEFT); ?>_save"   type=button title="Save"      value="Save"   onclick="SaveSize();" style="display: none">&nbsp;
      <input id="id_<?php echo str_pad(Data::Get('all_sizes','id',$n),2,'0',STR_PAD_LEFT); ?>_cancel" type=button title="Cancel"    value="Cancel" onclick="CancelSize();" style="display: none">&nbsp;
    </td>
    </tr>
<?php } ?>
  </table>
<!-- ============ END Sizes ============ -->

</div>

<?php include 'javascript.js.php'; ?>