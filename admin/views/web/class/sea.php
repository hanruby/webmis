<form action="<?php echo base_url('index.php/web_class/index.html');?>" method="get">
<table class="table_add">
	<tr>
		<td class="width right">FID:</td>
		<td>
			<input type="text" name="fid" class="input" style="width: 30%;" />
		</td>
	</tr>
	<tr>
		<td class="right">菜单名:</td>
		<td>
			<input type="text" name="title" class="input" style="width: 80%;" />
		</td>
	</tr>
	<tr>
		<td class="right">URL:</td>
		<td>
			<input type="text" name="url" class="input" style="width: 80%;" />
		</td>
	</tr>
	<tr>
		<td class="right">图标:</td>
		<td>
			<input type="text" name="ico" class="input" style="width: 30%;" />
		</td>
	</tr>
	<tr>
		<td class="right">备注:</td>
		<td>
			<input type="text" name="remark" class="input" style="width: 80%;" />
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>
			<input type="submit" id="seaSub" name="search" value="搜索" />
		</td>
	</tr>
</table>
</form>