<?php namespace Donsframe; ?>

<div id="main-frame" class="main-frame">

<?php include 'view_menu.php'; ?>

<input type="hidden" id="cur_edit_id" name="cur_id" value="">

<!-- ============ START Materials ============ -->
  <br><strong>Materials</strong><br>
  <table>
    <tr>
      <th> Options </th>
      <th> # </th>
      <th> Material </th>
      <th> Lbs in3 </th>
      <th> Kg m3 </th>
      <th> page_link </th>
      <th style="background-color: white;"></th>
    </tr>
<?php for ($n=0; $n<Data::GetRowCount('all_materials'); $n++) { ?>
    <tr>
    <td>
      <input id="id_<?php echo str_pad(Data::Get('all_materials','id',$n),2,'0',STR_PAD_LEFT); ?>_edit" type=button title="Edit material" value="Edit" onclick="EditMaterial('<?php echo str_pad(Data::Get('all_materials','id',$n),2,'0',STR_PAD_LEFT); ?>');" style="display: inline">
    </td>
    <td><?php echo $n+1; ?></td>
    <td><input type="hidden" id="id_<?php echo str_pad(Data::Get('all_materials','id',$n),2,'0',STR_PAD_LEFT); ?>" value="<?php echo str_pad(Data::Get('all_materials','id',$n),2,'0',STR_PAD_LEFT); ?>"><input id="id_<?php echo str_pad(Data::Get('all_materials','id',$n),2,'0',STR_PAD_LEFT); ?>_material" readonly="readonly" type="text" style=" background: none; border: 0; " value='<?php echo Data::Get('all_materials','material',$n); ?>'></td>
    <td><input id="id_<?php echo str_pad(Data::Get('all_materials','id',$n),2,'0',STR_PAD_LEFT); ?>_lbs_in3" readonly="readonly" type="text" style=" background: none; border: 0; " value='<?php echo Data::Get('all_materials','lbs_in3',$n); ?>'></td>
    <td><input id="id_<?php echo str_pad(Data::Get('all_materials','id',$n),2,'0',STR_PAD_LEFT); ?>_kg_m3" readonly="readonly" type="text" style=" background: none; border: 0; " value='<?php echo Data::Get('all_materials','kg_m3',$n); ?>'></td>
    <td><input id="id_<?php echo str_pad(Data::Get('all_materials','id',$n),2,'0',STR_PAD_LEFT); ?>_page_link" readonly="readonly" type="text" style="width: 510px; background: none; border: 0; " value='<?php echo Data::Get('all_materials','page_link',$n); ?>'></td>
    <td style="background-color: white;">
      <input id="id_<?php echo str_pad(Data::Get('all_materials','id',$n),2,'0',STR_PAD_LEFT); ?>_save"   type=button title="Save"      value="Save"   onclick="SaveMaterial();" style="display: none">&nbsp;
      <input id="id_<?php echo str_pad(Data::Get('all_materials','id',$n),2,'0',STR_PAD_LEFT); ?>_cancel" type=button title="Cancel"    value="Cancel" onclick="CancelMaterial();" style="display: none">&nbsp;
    </td>
    </tr>
<?php } ?>
  </table>
<!-- ============ END Materials ============ -->

</div>

<?php include 'javascript.js.php'; ?>