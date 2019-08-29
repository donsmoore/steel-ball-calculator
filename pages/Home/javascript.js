<script>
var size = 0;
var material = '';
function SetSize() {
    size = document.getElementById('ball_sizes').value;
    material = document.getElementById('material').innerHTML;
    window.location = 'index.php?material='+material.trim()+'&size='+size.trim();
    }
function SetMaterial(this_material) {
    size = document.getElementById('ball_sizes').value;
    window.location = 'index.php?material='+this_material.trim()+'&size='+size.trim();
    }
var spacesToAdd = -12;
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

