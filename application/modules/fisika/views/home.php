<style>
	.resistor{width:450px;height:auto;background:yellow;}
	.gelang1,.gelang2,.gelang3,.gelang4{float:left;margin-left:20px;background:#342;color:#fff;text-align:center;}
	.kawat{width:40px;border-bottom:10px solid;height:50px;float:left;}
	.container{width:300px;height:100px;border:1px solid;background:#fff;float:left;border-radius:10px;}
	.gelang1{width:30px;height:99%;border:0px solid;}
	.gelang2{width:30px;height:99%;border:0px solid;}
	.gelang3{width:30px;height:99%;border:0px solid;margin-right:30px;}
	.gelang4{width:30px;height:99%;border:0px solid;}
</style>
<?php 
	if(!isset($c1)){
		$c1='';$c2='';$c3='';$c4='';
	}
 ?>
<table>
 <tr>
  <th>Gelang 1</th>
  <th>Gelang 2</th>
  <th>Gelang 3</th>
  <th>Gelang 4</th>
 </tr>
 <tr>
  <?=form_open()?>
  <td><?=form_dropdown('g1',$r1)?></td>
  <td><?=form_dropdown('g2',$r2)?></td>
  <td><?=form_dropdown('g3',$r3)?></td>
  <td><?=form_dropdown('toleransi',$r4)?></td>
  <td><?=form_submit('submit','Hitung')?></td>
  <?=form_close()?>
 </tr>
 
 <tr>
  <td colspan=4>
	<br>
	<div class='resistor'>
	 <div class='kawat'></div>
		<div class='container'>
		 <div class='gelang1' style="background:<?=$c1?>">1</div>
		 <div class='gelang2' style="background:<?=$c2?>">2</div>
		 <div class='gelang3' style="background:<?=$c3?>">3</div>
		 <div class='gelang4' style="background:<?=$c4?>">4</div>
		</div>
	 <div class='kawat'></div>
	</div>
	
  </td>
 </tr>
 <tr>
  <td colspan=4 style='background:#EAEAEA;text-align:center;'>
	<br><b>Hasil : </b>
	<?php 
		if(isset($hasil))echo $hasil;else echo 0;
	?>
  </td>
 </tr>

</table>