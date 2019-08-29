<script>

var the_url = '';
var item = null;
var page = 'Admin';
var view = 'sizes';
var size = 0;
var spacesToAdd = -19;
var biggestLength = 0;

function DoLoading() {
  document.getElementById('loading').style.display = 'block';
}

function DoSaving() {
  document.getElementById('saving').style.display = 'block';
}

function StopLoading() {
  document.getElementById('loading').style.display = 'none';
}

function SaveSize() {
  DoSaving();
  the_url = 'index.php?page='+page+'&view='+view+'&action=save';
  the_url += '&size_id='+document.getElementById('cur_edit_id').value.toString();
  the_url += '&fraction_in='+document.getElementById('id_'+document.getElementById('cur_edit_id').value.toString()+'_fraction_in').value;
  the_url += '&decimal_in='+document.getElementById('id_'+document.getElementById('cur_edit_id').value.toString()+'_decimal_in').value;
  the_url += '&millimeters='+document.getElementById('id_'+document.getElementById('cur_edit_id').value.toString()+'_millimeters').value;
  the_url += '&one_ball_weight_ounce='+document.getElementById('id_'+document.getElementById('cur_edit_id').value.toString()+'_one_ball_weight_ounce').value;
  the_url += '&one_ball_weight_gram='+document.getElementById('id_'+document.getElementById('cur_edit_id').value.toString()+'_one_ball_weight_gram').value;
  window.location = the_url;
}

function CancelSize() {
  the_id = document.getElementById('cur_edit_id').value.toString();
  DisableEdit('id_'+the_id+'_fraction_in');
  DisableEdit('id_'+the_id+'_decimal_in');
  DisableEdit('id_'+the_id+'_millimeters');
  DisableEdit('id_'+the_id+'_one_ball_weight_ounce');
  DisableEdit('id_'+the_id+'_one_ball_weight_gram');
  document.getElementById('id_'+the_id+'_edit').disabled = false;
  document.getElementById('id_'+the_id+'_save').style.display = "none";
  document.getElementById('id_'+the_id+'_cancel').style.display = "none";
  StopLoading()
}

function EditSize(the_id) {
  DoLoading();
  if (document.getElementById('cur_edit_id').value > 0) { CancelSize() }
  document.getElementById('cur_edit_id').value = the_id;
  EnableEdit('id_'+the_id+'_fraction_in');
  EnableEdit('id_'+the_id+'_decimal_in');
  EnableEdit('id_'+the_id+'_millimeters');
  EnableEdit('id_'+the_id+'_one_ball_weight_ounce');
  EnableEdit('id_'+the_id+'_one_ball_weight_gram');
  document.getElementById('id_'+the_id+'_edit').disabled = true;
  document.getElementById('id_'+the_id+'_save').style.display = "inline";
  document.getElementById('id_'+the_id+'_cancel').style.display = "inline";
  StopLoading()
}

function SaveMaterial() {
  view = 'materials';
  DoSaving();
  the_url = 'index.php?page='+page+'&view='+view+'&action=save';
  the_url += '&size_id='+document.getElementById('cur_edit_id').value.toString();
  window.location = the_url;
}

function CancelMaterial() {
  view = 'materials';
  the_id = document.getElementById('cur_edit_id').value.toString();
  DisableEdit('id_'+the_id+'_material');
  DisableEdit('id_'+the_id+'_lbs_in3');
  DisableEdit('id_'+the_id+'_kg_m3');
  DisableEdit('id_'+the_id+'_page_link');
  document.getElementById('id_'+the_id+'_edit').disabled = false;
  document.getElementById('id_'+the_id+'_save').style.display = "none";
  document.getElementById('id_'+the_id+'_cancel').style.display = "none";
  StopLoading()
}

function EditMaterial(the_id) {
  view = 'materials';
  DoLoading();
  if (document.getElementById('cur_edit_id').value > 0) { CancelMaterial() }
  document.getElementById('cur_edit_id').value = the_id;
  EnableEdit('id_'+the_id+'_material');
  EnableEdit('id_'+the_id+'_lbs_in3');
  EnableEdit('id_'+the_id+'_kg_m3');
  EnableEdit('id_'+the_id+'_page_link');
  document.getElementById('id_'+the_id+'_edit').disabled = true;
  document.getElementById('id_'+the_id+'_save').style.display = "inline";
  document.getElementById('id_'+the_id+'_cancel').style.display = "inline";
  StopLoading()
}

function EnableEdit(this_obj) {
  item = document.getElementById(this_obj);
  item.readOnly = false;
  item.style.border = "2px inset";
  item.style.background = "white";
}

function DisableEdit(this_obj) {
  item = document.getElementById(this_obj);
  item.readOnly = true;
  item.style.border = "0";
  item.style.background = "none";
}

function DoMenu(the_view) {
  DoLoading();
  window.location = 'index.php?page=Admin&view='+the_view.trim();
}

function SetSize() {
  DoLoading();
  size = document.getElementById('ball_sizes').value;
  window.location = 'index.php?page=Admin&size='+size.trim()+'&view=materials_sizes';
}

function SetMaterial() {
  DoLoading();
  material = document.getElementById('ball_materials').value;
  window.location = 'index.php?page=Admin&material='+material.trim()+'&view=sizes_materials';
}

$(document).ready(function() {
  $("table tr:even").css("background-color", "lightblue");
  $("table tr:odd").css("background-color", "lightgrey");
});


</script>
