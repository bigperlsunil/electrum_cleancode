{if $form_fields}
	<div id="poll">
		<h2 class="pollTitle">[[Poll]]</h2>
		<div class="clr"></div>
		{if $isVoted == 0}
			<form method="post" action="">
				<input type="hidden" name="action" value="save"/>
				<input type="hidden" name="sid" value="{$sid}"/>
				{foreach from=$form_fields item=form_field}
					[[$form_field.caption]]
					<div class="clr"></div>
					<div class="polls-fieldset">{input property=$form_field.id template='radiobuttons.tpl'}</div>
				{/foreach}
				<div class="clr"><br/></div>
				<input id="pollButton" type="submit" name="vote" value="[[Vote]]"/>
				{if $display_results}&nbsp; <a class="poll-view-results" href="{$GLOBALS.site_url}/poll-results/{$sid}/{$question|regex_replace:"/[\\/\\\:*?\"<>|%#$\s]/":"-"}.html">[[View Results]]</a>{/if}
			</form>
		{else}
			{foreach from=$form_fields item=form_field}
				<div class="poll-question">[[$form_field.caption]]</div>
				<div class="clr"></div>
			{/foreach}
			<p class="poll-message">[[You've already voted]]</p>
			{if $display_results}&nbsp; <a class="poll-view-results {if $isVoted == 1}poll-voted{/if}" href="{$GLOBALS.site_url}/poll-results/{$sid}/{$question|regex_replace:"/[\\/\\\:*?\"<>|%#$\s]/":"-"}.html">[[View Results]]</a>{/if}
		{/if}
		<div class="clr"><br/></div>
	</div>
{/if}