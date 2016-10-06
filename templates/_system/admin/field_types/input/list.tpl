<select class="searchList {if $sort_by_alphabet}sortable-select{/if} {if $complexField}complexField{/if}" name="{if $complexField}{$complexField}[{$id}][{$complexStep}]{elseif $parentID}{$parentID}[{$id}]{else}{$id}{/if}" id="{if $complexField}{$complexField}[{$id}][{$complexStep}]{elseif $parentID}{$parentID}[{$id}]{else}{$id}{/if}" {if $product_type && $id == 'user_group_sid'} onChange="changePermissions(this.value)" {/if} {if ($parentID && !$list_values && !$enabled) || $disable} disabled="disabled" {/if} {if $parentID && $id == "Country"} onchange = "get{$parentID}States(this.value)" {/if} >
	{if $listingFieldInfo.parent_sid && ($listingFieldInfo.id == 'Country' || $listingFieldInfo.id  == 'State') && $id == 'display_as'}
	{elseif $userFieldInfo.parent_sid && ($userFieldInfo.id == 'Country' || $userFieldInfo.id  == 'State') && $id == 'display_as'}
	{else
		}<option value="">{if $id == 'profile_field_as_dv'}[[Select user profile field]] {elseif $polls && $id == 'user_group_sid'}[[Everyone]]{elseif $id == 'product_sid'}[[All Products]]{elseif !$parentID && ($id == "Country" or $id == "State")}[[Any]] {$caption|escape:"html"}{else}[[Select]] {$caption|escape:"html"}{/if}</option>
	{/if}
	{foreach from=$list_values item=list_value}
		<option value='{$list_value.id}' {if $list_value.id == $value}selected="selected"{/if} >{tr}{$list_value.caption}{/tr|escape:'html'}</option>
	{/foreach}
</select>
