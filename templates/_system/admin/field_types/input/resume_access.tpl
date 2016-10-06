<select class="searchList" name="{if $complexField}{$complexField}[{$id}][{$complexStep}]{else}{$id}{/if}" class="{if $complexField}complexField{/if}">
	{foreach from=$list_values item=list_value}
		<option value="{$list_value.id}" {if $list_value.id == $value}selected="selected"{/if} >{tr mode="raw"}{$list_value.caption}{/tr|escape:'html'}</option>
	{/foreach}
</select>