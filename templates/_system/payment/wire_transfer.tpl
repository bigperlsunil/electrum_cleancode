<h1>[[Wire Transfer]]</h1>
{assign var="username" value=$user.username}
{capture assign = "amount"}{tr type="float"}{$amount}{/tr}{/capture}
{capture assign="productPrice"}{currencyFormat amount=$amount}{/capture}

{foreach from=$errors item=message key=error}
<p class="error">
	{if $error == 'INVALID_INVOICE_ID'}
		[[Invalid invoice ID is specified]]
	{elseif $error == 'NOT_OWNER'}
		[[You're not owner of this invoice]]
	{elseif $error == 'INVOICE_IS_NOT_UNPAID'}
		[[Invoice already paid]]
	{else}
		[[{$error}]]: [[{$message}]]
	{/if}
</p>
{foreachelse}
[[Dear $username, <br /><br />Please send us a payment in the amount of $productPrice for]]
{foreach name="product_names_loop" item="productName" from=$item_name}
	[[{$productName|regex_replace:"/(Payment for)/u":" "|paymentTranslate}]]{if !$smarty.foreach.product_names_loop.last}, {/if}
{/foreach}
<br />
[[Your transaction reference number is $invoice_sid. <br />Once your payment is endorsed by Admin the product(s) from your Shopping Cart would be added to your account.<br /><br />Thank you!]]
{/foreach}